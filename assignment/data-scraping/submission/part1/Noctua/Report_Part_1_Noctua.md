<h1 align='center'>Web scraping multimedia content using Flickr 📷☁️</h1>

## 1. Introduction

Automated retrieval and aggregation of images, videos, audio, and other multimedia materials from websites is known as web scraping of multimedia content. This category of data can be highly advantageous in several domains, such as computer vision, natural language processing, marketing, and social media analysis, for research and examination purposes.

## 2. Web Scraping Flickr

Flickr is a good source for multimedia content because it hosts a vast collection of user-generated images and videos, searchable by tags and keywords. It is an online photo and video sharing platform where users can upload, organize and share their multimedia content with the world. The site also features social networking tools, such as groups, comments, and photo communities, to facilitate interaction among users.

In this assignment, we will extract image from Flickr by firstly identifying the trending picture tags and from the list, choose one tag that we wanted to scrape the data. Aside from Flickr API, we will scrap the data using Beautiful soup library. The main items that will be extract are its ID, EXIF info, and the geographical information. After extracting all the information needed, it will then be exported into a CSV file with the title being the tag.The web scraping process are as follows:

1. Install Flickr API.
```
pip install flickrapi
```

2. Import suitable libraries.
```
import requests
import flickrapi
from bs4 import BeautifulSoup
import pandas as pd
import time
import os
import numpy as np
```

3. Create usable functions.
```
#create folder path
def mkdir(root,folder):
    path = root+'/'+folder
    folder = os.path.exists(path)
    if not folder:
        os.makedirs(path)
        os.chdir(path)
    else:
        os.chdir(path)
        pass
    return path
```
 ```
 def mkdir(root,folder=''):
    path = root+'/'+folder
    folder = os.path.exists(path)
    if not folder:
        os.makedirs(path)
        os.chdir(path)
    else:
        os.chdir(path)
        pass
    return path
```
  
4. Find top 10 tags of trending picture in Flickr website. We decide to get the data about from 'Clouds' tag.
```
#get tags
def get_tags(url_base):
    res = requests.get(url_base + '/photos/tags')
    res.encoding = 'utf-8'
    hsoup = BeautifulSoup(res.text,'html.parser')
    
    tag_lst = []
    for tag in hsoup.select('.overlay'):
        tag_lst.append(tag.text)
    for i in range(len(tag_lst)):
        if tag_lst[i] == 'clouds':
            tag_lst = tag_lst[i:][:10]
            print('TAG_LIST ABSORBED !')
            print(tag_lst)
            dline(1)
            break
    time.sleep(0.5)
    return tag_lst
```

5. Call its API and function above to get a list of tags.
```
url_base = 'https://www.flickr.com'
api_key = 'e6b00be365cab3b2c004788b12bb6b47'
api_secret = '401e90577d12f507'
root = '/content/sample_data'
min_date = '2022-01-01'
tag_lst = get_tags(url_base)
```

6. Define functions that will access the photo ID.
```
#Get photo id
def get_pic(tag,min_date,api_key,api_secret):
    st = time.process_time()
    flickr=flickrapi.FlickrAPI(api_key,api_secret,cache=True)      
    
    try:
        photos = flickr.walk(tags=tag,
                           sort='interestingness-desc',
                           content_type='1',
                           extras='views',
                           min_upload_date=min_date)
    except Exception as e:
        time.sleep(1800)
        print('get_pic()',e)

    file_name = tag + '_id.csv'
    df_pic = pd.DataFrame()
    total = 0
    amount = 0
    drop_nan = 0

    for photo in photos:
            
        exist = (float(str(photo.get('views').strip()))!= 0)
        if exist:
            df_temp = pd.DataFrame()
            df_temp['pic_id'] = pd.Series(str(photo.get('id')))
            df_temp['Views'] = pd.Series(float(str(photo.get('views').strip())))
            df_pic = pd.concat([df_pic,df_temp])
            amount += 1
        else:
            drop_nan += 1
        
        df_pic['tag'] = tag
        df_pic.to_csv(file_name,sep=',',index=False,header=None,mode='a')
        df_pic = pd.DataFrame()
        
        total += 1
        st_pic = round(time.process_time() - st,2)
        print('\rGETTING PICS: {0} , DROP_NAN: {1} , TOTAL: {2} , TIME CONSUMED: {3}s'.format(amount,drop_nan,total,st_pic),end='',flush=True)
        time.sleep(0.1)
        #if amount >= 20:
            #break
        #else:
            #pass
    print('\nPIC_SET: %s SAVED !' %tag)
    dline(1)
    return
  ```
  
7. Call function above to access the list of cloud's photo ID.
  ```
  for tag in tag_lst:
    path = mkdir(root,'IDs_Views')
    file_path = path + '/' + tag + '_id.csv'
    exist = os.path.exists(file_path)

    if exist:
        print('TAG: %s ALREADY ABSORBED !' %tag)
        dline(1)
        pass
    else:
        print('CRAWLING ON TAG: %s...' %tag)
        dline(0)
        get_pic(tag,min_date,api_key,api_secret)
        time.sleep(2000)
    
print('FINISH !!!')
```

8. Define function to acces EXIF info.
```
#Get Exif info
def get_exif(df_pic,file_name,api_key,api_secret):
    st = time.process_time()
    file_name = file_name.replace('id','exif')
    df_info = pd.DataFrame(columns=['pic_id','Camera_Make','Camera_Model',
                                    'Exposure','Aperture','Exposure_Program',
                                    'ISO','Metering_Mode','Flash','Focal_Length',
                                    'Color_Space','Lens_Model'])
    df_info.to_csv(file_name,sep=',',index=None)
    total = 0
    amount = 0
    drop_nan = 0
        
    for i in range(len(df_pic.index)):
            
        if amount < 100000:
            try:
                flickr=flickrapi.FlickrAPI(api_key,api_secret,format='parsed-json')
                exif = flickr.photos.getExif(photo_id=df_pic['pic_id'].iloc[i])
                
                for info in exif['photo']['exif']:
                    if info['label'] == 'Make':
                        df_info['Camera_Make'] = pd.Series(info['raw']['_content'])
                    elif info['label'] == 'Model':
                        df_info['Camera_Model'] = pd.Series(info['raw']['_content'])
                    elif info['label'] == 'Exposure':
                        if '/' in info['raw']['_content']:
                            operator = info['raw']['_content'].strip().split('/')
                            df_info['Exposure'] = pd.Series(float(operator[0])/float(operator[1]))
                        else:
                            df_info['Exposure'] = pd.Series(float(info['raw']['_content'].strip()))
                    elif info['label'] == 'Aperture':
                        df_info['Aperture'] = pd.Series(float(info['raw']['_content'].strip()))
                    elif info['label'] == 'Exposure Program':
                        df_info['Exposure_Program'] = pd.Series(info['raw']['_content'])
                    elif info['label'] == 'ISO Speed':
                        df_info['ISO'] = pd.Series(float(info['raw']['_content'].strip()))
                    elif info['label'] == 'Metering Mode':
                        df_info['Metering_Mode'] = pd.Series(info['raw']['_content'])
                    elif info['label'] == 'Flash':
                        df_info['Flash'] = pd.Series(info['raw']['_content'])
                    elif info['label'] == 'Focal Length':
                        df_info['Focal_Length'] = pd.Series(float(info['raw']['_content'].replace('mm','').strip()))
                    elif info['label'] == 'Color Space':
                        df_info['Color_Space'] = pd.Series(info['raw']['_content'])
                    elif info['label'] == 'Lens Model':
                        df_info['Lens_Model'] = pd.Series(info['raw']['_content'])
                
                df_info['pic_id'] = df_pic['pic_id'].iloc[i]
                df_info.to_csv(file_name,sep=',',index=None,header=None,mode='a')
                amount += 1
            except Exception as e:
                drop_nan += 1
                pass
            
        else:
            break
        total += 1
        st_info = round(time.process_time()-st,2)
        print('\rGETTING INFO: {0} , DROP_NAN: {1} , TOTAL: {2} , TIME CONSUMED: {3}s'.format(amount,drop_nan,total,st_info),end='',flush=True)
        #time.sleep(1)
    dline(2)
    print('FILE: %s SAVED !' %file_name)
    print('SIZE: %i' %amount)
    
    return
```

9. Access its API and call function above to access EXIF info based on ID.
```
api_key = '2b74061345250898719cdc9cf9aae8f0'
api_secret = '0825a78a0bd5865e'
root = '/content/sample_data'
```
```
path = mkdir(root,'IDs_Views')
csv_lst = list(os.walk(path))[0][2]
path = mkdir(root,'Exif')
for id_csv in csv_lst:
    
    file_path = path + '/' + id_csv.replace('id','exif')
    exist = os.path.exists(file_path)
    if exist:
        print('FILE: %s ALREADY ABSORBED !' %id_csv)
        pass
    else:
        print('CRAWLING ON : %s...' %id_csv)
        dline(0)
        
        mkdir(root,'IDs_Views')
        df_pic = pd.read_csv(id_csv,sep=',',engine='python')
        df_pic.columns = ['pic_id','Views','tag']
        df_pic = df_pic.drop_duplicates().sort_values('Views',ascending=False).reset_index()
        del df_pic['index']
        
        path = mkdir(root,'Exif')
        get_exif(df_pic,id_csv,api_key,api_secret)
        dline(1)
print('FINISH !!!')
```

10. Define function to access geographical information.
```
#Get Geo info
def get_geo(df_pic,file_name,api_key,api_secret):
    st = time.process_time()
    file_name = file_name.replace('id','geo')
    df_info = pd.DataFrame(columns=['pic_id','latitude','longitude','county','region','country'])
    df_info.to_csv(file_name,sep=',',index=None)
    total = 0
    amount = 0
    drop_nan = 0
    
    for i in range(len(df_pic.index)):
        
        if amount < 100000:
            try:
                flickr=flickrapi.FlickrAPI(api_key,api_secret,format='parsed-json')
                pic_geo = flickr.photos.geo.getLocation(photo_id=df_pic['pic_id'].iloc[i])
                geo = pic_geo['photo']['location']
                
                for loc in geo:
                    if loc == 'latitude':
                        df_info[loc] = pd.Series(geo[loc])
                    if loc == 'longitude':
                        df_info[loc] = pd.Series(geo[loc])
                    if loc == 'county':
                        df_info[loc] = pd.Series(geo[loc]['_content'])
                    if loc == 'region':
                        df_info[loc] = pd.Series(geo[loc]['_content'])
                    if loc == 'country':
                        df_info[loc] = pd.Series(geo[loc]['_content'])
                        
                amount += 1
                df_info['pic_id'] = df_pic['pic_id'].iloc[i]
                df_info.to_csv(file_name,sep=',',index=None,header=None,mode='a')
            except:
                drop_nan += 1
                pass
            
        total += 1
        st_info = round(time.process_time()-st,2)
        print('\rGETTING GEO: {0} , DROP_NAN: {1} , TOTAL: {2} , TIME CONSUMED: {3}s'.format(amount,drop_nan,total,st_info),end='',flush=True)
        #time.sleep(1)
    dline(2)
    print('FILE: %s SAVED !' %file_name)
    print('SIZE: %i' %amount)
```

11. Access its API and call function above to get a list of geographical info based on ID.
```
api_key = '404afab90a2381ab68c53efba4d3cb44'
api_secret = 'e13d4f79198b64c7'
root = '/content/sample_data'
```
```path = mkdir(root,'IDs_Views')
csv_lst = list(os.walk(path))[0][2]
path = mkdir(root,'Geo')

for id_csv in csv_lst:  
    
    file_path = path + '/' + id_csv.replace('id','exif')
    exist = os.path.exists(file_path)
    
    if exist:
        print('FILE: %s ALREADY ABSORBED !' %id_csv)
        pass
    else:
        print('CRAWLING ON : %s...' %id_csv)
        dline(0)
        
        mkdir(root,'IDs_Views')
        df_pic = pd.read_csv(id_csv,sep=',',engine='python')
        df_pic.columns = ['pic_id','Views','tag']
        df_pic = df_pic.drop_duplicates().sort_values('Views',ascending=False).reset_index()
        del df_pic['index']
        
        path = mkdir(root,'Geo')
        get_geo(df_pic,id_csv,api_key,api_secret)
        dline(1)
print('FINISH !!!')
```

12. Clean the ID to remove duplicate data.
```
# Cleaned ID
root = '/content/sample_data'
path = mkdir(root,'IDs_Views')
csv_lst = list(os.walk(path))[0][2]
df_id = pd.DataFrame()

for csv in csv_lst:
    df = pd.DataFrame()
    df = pd.read_csv(csv,sep=',',engine='python')
    df.columns = ['pic_id','Views','tag']
    tag = df['tag'].iloc[0]
    print('COLUMNS ATTACHED TO: %s' %csv)
    df = df.drop_duplicates()
    print('REMAINING:',len(df.index))
    dline(2)
    df = df.groupby('pic_id').sum()
    df['tag'] = tag
    df = df.sort_values('Views',ascending=False).reset_index()
    
    print(df.head())
    dline(2)
    print('DUPLICATES DROPED: %s' %csv)
    print('REMAINING:',len(df.index))
    dline(2)
    path = mkdir(root,'IDs_Views_Cleaned')
    df.to_csv(csv,sep=',',index=None)
    path = mkdir(root,'IDs_Views')
    df_id = pd.concat([df_id,df])
    print('MERGED: %s' %csv)
    dline(1)

mkdir(root)
df_id.to_excel('ID_Merged.xlsx',index=None)
print('ID CLEAND !!!')
```

13. Merge three separated csv files (ID, EXIF, and GEO) into one csv file.
```
# Merge
def read_csv(root,folder):
    path = mkdir(root,folder)
    csv_lst = list(os.walk(path))[0][2]
    df_merge = pd.DataFrame()
    
    for csv in csv_lst:
        df = pd.DataFrame()
        df = pd.read_csv(csv,sep=',',engine='python')        
        dline(2)
        df_merge = pd.concat([df_merge,df])
        print('MERGED: %s' %csv)
    dline(1)
    return df_merge
```

Perhaps the biggest challenge for us was finding out that not all picture shared all the information we needed as the CSV file contains some null values which we believe could not be avoided as the publisher themselves did not feel obliged to share all the information we needed. The CSV file is 19 KB in size which can be considered small as it only contains 120 rows of data.

## 3. Choosing a Library for Web Scraping
- Compare and contrast the available libraries for web scraping multimedia content, including Pillow and OpenCV.
<div align='center'>
<table>
  <tr>
   <th>Pillow</th>
   <th>OpenCV</th>
   <th>Beautiful Soup</th>
  </tr>
  
   <tr>
     <td>
         <ul>
             <li> Used for image manipulation, such as image loading and saving in various file formats, image resizing, cropping, etc.</li>
             <li> Not design specifically for web scraping </li>
         </ul>
     </td>
     <td>
         <ul>
             <li>Used for image and video processing</li>
             <li>Provides tools for image and video manipulation, feature detection, object recognition, etc.</li>
             <li>Not design specifically for web scraping.</li>
         </ul>
     </td>
      <td>
        <ul>
             <li>Used for web scraping, including the extraction of text and multimedia content from HTML and XML documents.</li>
             <liDoes not provide tools for image or video manipulation but it can be used to parse HTML documents and extract multimedia content URLs.</li>
             <li>Documents can be downloaded using other libraries such as OpenCV or Pillow.</li>
         </ul>
       </td>
   </tr>
   
</table>
</div>

We have tried different type of libraries but since we wanted to extract data from Flickr website, we think that Beautiful Soup is the best. Athough we are not able to extract the picture, but we get to extract a detailed pictures information. We believe that Beautiful Soups is the one of the best as it is easy to use, abe to find and extract specific HTML tags and attributes, can handle different types of data formats and it has a large community of users and developers.

## 4. Storing Data in MongoDB

Discuss the benefits of using MongoDB for storing multimedia content data:
1. Scalability: MongoDB is designed to scale horizontally, which means it can handle large volumes of multimedia content data without sacrificing performance.

2. Flexibility: MongoDB's document-based structure allows for flexible data modeling and the ability to store multimedia content data in a wide variety of formats.

3. Querying and Indexing: MongoDB provides powerful querying and indexing capabilities that enable efficient searching and analysis of multimedia content data, including support for geospatial queries.

4. Automatic Sharding: MongoDB automatically partitions data across multiple servers for efficient storage and retrieval of multimedia content data.

5. High Availability: MongoDB provides automatic failover and replication, ensuring that multimedia content data remains available even in the event of hardware failures or other issues.

7. Rich API Support: MongoDB has a rich API with support for a wide variety of programming languages, making it easy to integrate multimedia content data into applications.

8. GridFS: MongoDB's GridFS feature allows for efficient storage and retrieval of large multimedia content data files, such as videos or high-resolution images.

9. Dynamic Schema: MongoDB's dynamic schema allows for changes in data structure or format over time, making it easy to adapt to evolving needs for storing multimedia content data.

Overall, MongoDB's scalability, flexibility, powerful querying and indexing capabilities, automatic sharding, high availability, rich API support, GridFS feature, and dynamic schema make it an excellent choice for storing multimedia content data.

From csv file, we can store the data in MongoDB where the data will be in JSON format. Here are the steps use in this assignment:

1. Install mongo libraries.
``` 
!pip install pymongo
```
```
!pip install pyngrok
```

2. Import pymongo and csv libraries.
```
import pymongo
import csv
from pymongo import MongoClient
```

3. Read csv file.
```
df = pd.read_csv('/content/sample_data/Clouds_Flickr_Merged.csv')
```

4. Get the mongodb client, determine the name of database and collection.
```
client = pymongo.MongoClient("mongodb+srv://user1:60XRzCr4mubxCPC5@cluster0.evngzba.mongodb.net/test")
db = client['Flickr']
collection = db['Clouds Image']
```

5. Insert the data into database and collection.
```
data = df.to_dict(orient='records')
collection.insert_many(data)
```

6. Pictures below shows how data stored in MongoDB compass and atlas.
   <img height='300px' src='MongoDBFlickr.png'/>
   <img height='300px' src='MongoDBAtlasFlickr.png'/>
   
- Provide examples of how the data can be queried and analyzed using MongoDB.

## 5. Conclusion

In conclusion, the project involved extracting metadata of images from Flickr using the Beautiful Soup Python library and storing the data in a MongoDB database. Web scraping, particularly with tools like Beautiful Soup, proved to be a powerful method for collecting specific HTML tags and attributes, enabling the team to retrieve detailed information about the pictures. While the extraction of actual pictures was not achieved, the focus on metadata extraction showcased the versatility and usability of Beautiful Soup for data scraping purposes.

Looking ahead, future research or analysis using the data set obtained from Flickr could involve various avenues. One suggestion is to perform sentiment analysis on the image descriptions to gauge the emotions or sentiments associated with different types of images. This could provide valuable insights into user preferences, trends, or patterns within the image collection. Additionally, conducting clustering or categorization analysis on the extracted metadata could help identify groups or themes within the image dataset, enabling further exploration and understanding of visual content.

