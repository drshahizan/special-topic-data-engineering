<div align="center">
   <h1>Data Integration Using Azure Data Factory</h1>
</div>

## Table of Contents
- [Introduction](#introduction)
- [Web Scraping Flickr](#web-scraping-flickr)
- [Choosing a Library for Web Scraping](#choosing-a-library-for-web-scraping)
- [Storing Data in MongoDB](#storing-data-in-mongoDB)
- [Conclusion](#conclusion)

## Introduction
Web scraping multimedia is a process where images, videos, audio and other types of non-textual content from websites are extracted. It is widely used for research and business purposes as this type of data provides valuable insights into trends, consumer behavior, and user preferences. The data is extracted to train machine learning models, detect and monitor visual content, create interactive user interfaces, and improve search engine optimization. Many social media companies use web scraping to analyze user-generated images and videos to understand user behavior, preferences, and sentiment. Some academic researchers also use the data to analyze multimedia content such as historical images and videos for cultural and social studies audio data for linguistics and music research, and scientific images and videos for medical and environmental research.

## Web Scraping Flickr
Flickr is a photo-sharing platform which is launched in 2004. Users can upload and share their images and videos through Flickr. They can also manage their photos by creating albums or collections on Flickr. Users can customize the privacy settings of their accounts by choosing who can view and access their media.

It is a good source for multimedia content due to its large and diverse community of photographers and content creators. This helps Flickr to provide its users with abundant sources of high-quality visual content. Users from all around the world can share their work, allowing for a wide range of subjects, styles, and perspectives to be explored.

### Web scraping process

Step 1: Install the libraries that will be used.
```ruby
!pip install FlickrAPI
!pip install opencv-python
```

Step 2: Import the libraries.
```ruby
import requests
import json
import csv
import cv2
import numpy as np
```

Step 3: To start web scraping from Flickr, we need to get an API key. The API key must be requested through Flickr App Garden. Specify the tags of the image or videos that you want to scrap. In this assignment, we will be scraping images related to tulips. 

```ruby
api_key = "c4f4b6d66b68b51b2cf8980452b317aa"
search_url = "https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key={api_key}&tags=tulip&per_page=100&page=1&format=json&nojsoncallback=1"
info_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
exif_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getExif&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
```

Step 4: Make the API call to get the search results. It will only return a maximum of 100 results. The`search_url` method is used to get 100 results per page. 

```ruby
response = requests.get(search_url.format(api_key=api_key))
data = json.loads(response.text)
total_pages = data["photos"]["page"]
```

Step 5: After that, access the Flickr API to retrieve the URLs for each image or video. Loop through all the pages and get the photo metadata and camera settings. Then, store them in a dictionary. After that, add the metadata to the list.

```ruby
metadata_list = []
for page in range(1, total_pages+1):
    response = requests.get(search_url.format(api_key=api_key, page=page))
    data = json.loads(response.text)
    for photo in data["photos"]["photo"]:
        response = requests.get(info_url.format(api_key=api_key, photo_id=photo["id"]))
        data = json.loads(response.text)
        metadata = data["photo"]

        response = requests.get(exif_url.format(api_key=api_key, photo_id=photo["id"]))
        data_exif = json.loads(response.text)

        metadata_dict = {
            "Title": metadata["title"].get("_content", "Untitled"),
            "Author": metadata["owner"]["username"],
            "URL": f'https://live.staticflickr.com/{metadata["server"]}/{metadata["id"]}_{metadata["secret"]}.jpg',
        }

        if data_exif['stat'] == 'fail':
            exif_data ="Owner denied access"
        else:
            exif_data = data_exif["photo"]["exif"]

            for exif in exif_data:
                if exif["label"] in ["Make", "Model"]:
                    metadata_dict[exif["label"]] = exif["raw"]["_content"]

        metadata_list.append(metadata_dict)
```

Step 6: Write the metadata to the CSV file and download the images. OpenCV library is used to get the CSV file of the data. 

The dataset contains metadata such as:
- Geolocation
- Camera model
- Camera settings
- Lenses model
- Tags

The size of the multimedia files varies depending on the quality and length of the multimedia content. It can be around kB-MB.

```ruby
with open("flickr_image_metadata.csv", "w", newline="", encoding="utf-8") as f:
    writer = csv.DictWriter(f, fieldnames=["Title", "Author", "URL", "Make", "Model"])
    writer.writeheader()

    for metadata in metadata_list:
        response = requests.get(metadata["URL"])
        image = cv2.imdecode(np.frombuffer(response.content, np.uint8), cv2.IMREAD_COLOR)

        writer.writerow(metadata)
```

Step 7: Lastly, to store the multimedia content and the metadata in a database, define the connection string, database name and collection name. The connection string can be obtained by following these steps:
- Navigate to your Atlas Clusters view.

- Click Connect for your desired cluster.

- Click Connect with MongoDB Compass.

- Copy the provided connection string.
```ruby
#Connection String 
uri="mongodb://<username>:<password>@ac-lojpzav-shard-00-00.nz2oazc.mongodb.net:27017,ac-lojpzav-shard-00-01.nz2oazc.mongodb.net:27017,ac-lojpzav-shard-00-02.nz2oazc.mongodb.net:27017/?ssl=true&replicaSet=atlas-li4q9r-shard-0&authSource=admin&retryWrites=true&w=majority"
client = MongoClient(uri)

#Define the database and collection
db = client['<your_database_name>']
collection = db['<your_collection_name>']

collection.insert_many(metadata_list)
```
<br>

<div align="center">
  <img width="700" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-scraping/submission/part1/StaticIP/dbview_mongodb.png" alt='View of database after importing to MongoDB'>
</div>

<br>

While doing the web scraping, there are some challenges occur. One of the challenges is the restriction of accessing the data. For example, some authors restrict access to their EXIF information. This causes the metadata collected in the end to only includes title, author name, URL, camera make and model. Besides that, Flickr has its own policies on the use of its content. Therefore, we need to be very careful while doing web scraping to avoid violations of the policies.

## Choosing a Library for Web Scraping
<table>
    <tr>
        <th>Library</th>
        <th>Advantages</th>
        <th>Disadvantages</th>
    </tr>
    <tr>
        <td>Request<br>Python HTTP query library used for retrieving Web content, including media files from URLs.</td>
        <td align=justify>
            <li>Transparent integration into web scraper workflows.</li>
            <li>Can be used to access web content URLs and multimedia files directly</li>
            <li>User-friendly API for effortless HTTP requests and response handling.</li>        
        </td>
        <td>
            <li>Not designed specifically for multimedia manipulation or analysis.</li>  
            <li>Only provide support for some complex multimedia formats or operations.</li>          
            <li>Cannot work by itself for advanced multimedia operations, may need additional libraries or tools</li>
        </td>
    </tr>
    <tr>
        <td>OpenCV<br>A Python library that can perform image processing and computer vision tasks such as object detection, face recognition and tracking.</td>
        <td align=justify>
            <li>Provide high-performance efficiency and optimization.</li>  
            <li>Provide solutions for web scraping as well as subsequent multimedia processing tasks.</li> 
            <li>Provide support for some complex multimedia formats and operations for image manipulation and analysis.</li>     
        </td>
        <td align=justify>
            <li>Not recommended for projects seeking lightweight or minimalistic approaches.</li>        
            <li>Library size is big.</li>
            <li>The function of this library mostly focuses on computer vision tasks only</li>
        </td>
    </tr>
    <tr>
        <td>Pillow<br>A Python library that provides basic image processing functionality including image resizing, rotation and transformation.</td>
        <td align=justify>
            <li>Support multiple image file formats.</li>
            <li>Transparent integration into web scraper workflows.</li>
            <li>Suitable for pre-processing and analyzing basic images.</li>        
        </td>
        <td align=justify>
            <li>Only provides support for some complex multimedia formats or operations.</li>
            <li>Lack of integrated features for web content retrieving and management.</li>        
            <li>Cannot work by itself for advanced multimedia analysis, may need additional libraries or tools.</li>
        </td>
    </tr>
</table>
There are some criteria that one should consider while choosing an appropriate library for a project:

1. Performance and Scalability
The library's performance and scalability such as speed and memory usage is an important aspects that needed to be considered especially if you are dealing with a large amount of data.

2. Ease of Use
Always choose a library that is easy to understand and work with. It may be troublesome if you could not understand the library. Make sure the library has clear and user-friendly documentation and examples that you can use as references.

3. Language Compatibility
Find a library that aligns with your language preferences. Different libraries may be available for languages like Python, JavaScript, Ruby, or others.

4. Legal and Ethical Considerations
While doing web scraping, one should always be careful of the legal and ethical implications of web scraping. Some libraries can provide the functionality to manage robots.txt files, comply with website policies, or allow you to strangle your requests to avoid overloading the target website.

In our assignment, we choose to use Request and OpenCV due to their ease of use for simple web scraping multimedia. Besides, OpenCV provides high-performance efficiency and optimization while performing web scraping multimedia.

## Storing Data in MongoDB
MongoDB is a document database developed by MongoDB Inc. and licensed under the Server Side Public License. One of the highlighted features of MongoDB is storing data in a type of JSON format called BSON. There are many benefits of using MongoDB for storing multimedia content data:

1. File Metadata and Search
MongoDB can store metadata together with multimedia content, such as file format, resolution, duration, author, and description. It allows users to search and filter the metadata by typing the queries so that the user can discover their data deeper based on different criteria.

2. Replication and Availability
MongoDB has replica sets that replicate multimedia content data across multiple nodes. This can help to ensure data redundancy and high availability, preventing hardware failures that may cause data loss or service interruptions.

3. High Performance
MongoDB also has great indexing capabilities and efficient data access mechanisms of MongoDB. It can leverage indexes on specific indexes such as tags, categories and timestamps. This increases the performance of queries while retrieving multimedia content.

There are many alternatives to storing data in MongoDB. However, one should always keep in mind that the metadata should be created in a separate collection to maximize the efficiency of querying and management of the files. It is also advised that one should make use of GridFS to split the file into smaller chunks before storing them into individual documents. This can ease the retrieval and storage management of large files that are bigger than 16MB. 

Below shows a simple example of how the data can be queried and analyzed using MongoDB.

<div align="center">
<img width='700' src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-scraping/submission/part1/StaticIP/agg1.png" alt='View of database after importing to MongoDB'>
</div>
This screenshot shows that only the records that contain the author name "Konstantin Filatov" will be displayed.

<div align="center">
<img width='700' src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-scraping/submission/part1/StaticIP/agg2.png" alt='View of database after importing to MongoDB'>
</div>
This screenshot shows that only the records that do not contain the author name "Konstantin Filatov" will be displayed.

## Conclusion
In conclusion, the assignment provides a detailed discussion on how to use the API key obtained from Flickr to carry out web scraping multimedia. It cannot be denied that web scraping multimedia has grown significantly in these few years. It not only can train machine learning models and create interactive user interfaces, but it also can detect and monitor visual content and improve search engine optimization. By processing the extracted multimedia data,  we can gain valuable insights into trends, consumer behavior, and user preferences. Besides, Flickr is a good platform to perform web scraping due to its large and diverse community of photographers and content creators as mentioned earlier. It is highly recommended for future research such as image and video recognition, social media analysis and content recommendation systems.
