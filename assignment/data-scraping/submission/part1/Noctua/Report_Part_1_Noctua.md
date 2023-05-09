## 1. Introduction

Automated retrieval and aggregation of images, videos, audio, and other multimedia materials from websites is known as web scraping of multimedia content. This category of data can be highly advantageous in several domains, such as computer vision, natural language processing, marketing, and social media analysis, for research and examination purposes.

## 2. Web Scraping Flickr

Flickr is a good source for multimedia content because it hosts a vast collection of user-generated images and videos, searchable by tags and keywords. It is an online photo and video sharing platform where users can upload, organize and share their multimedia content with the world. The site also features social networking tools, such as groups, comments, and photo communities, to facilitate interaction among users.

In this assignment, we will extract image from Flickr by firstly identifying the trending picture tags and from the list, choose one tag that we wanted to scrape the data. Aside from Flickr API, we will scrap the data using Beautiful soup library. The main items that will be extract are its ID, information about the camera used, and the geographical area. After extracting all the information needed, it will then be exported into a CSV file with the title being the tag.The web scraping process are as follows:

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
4. Find top 10 tags of trending picture in Flickr website.
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
Perhaps the biggest challenge for us was finding out that not all picture shared all the information we needed as the CSV file contains some null values which we believe could not be avoided as the publisher themselves did not feel obliged to share all the information we needed. The CSV file is 19 KB in size which can be considered small as it only contains 120 rows of data.

## 3. Choosing a Library for Web Scraping
- Compare and contrast the available libraries for web scraping multimedia content, including Pillow and OpenCV.
- Explain the criteria used to choose the appropriate library for this project.
- Justify the final choice and explain the advantages of the chosen library.

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

- Explain the best way to store the data in MongoDB, including the data structure and organization.
- Provide examples of how the data can be queried and analyzed using MongoDB.

## 5. Conclusion
- Summarize the main points of the assignment and restate the importance of web scraping multimedia content for data analysis.
- Offer suggestions for future research or analysis using the data set obtained from Flickr.

