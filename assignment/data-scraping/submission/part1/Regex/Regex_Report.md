<h1 align=center>Web scraping Multimedia Using Flickr API</h1>

## Table of Content
- [Introduction](#introduction)
- [Web Scraping Flickr](#web-scraping-flickr)
- [Choosing a Library for Web Scraping](#choosing-a-library-for-web-scraping)
- [Storing Data in MongoDB](#storing-data-in-mongodb)
- [Conclusion](#conclusion)

## Introduction

<p align=justify>Web scraping multimedia content extracts multimedia data from websites, including images, videos, audio, and animations. This data type can provide valuable insights for research and analysis in various disciplines, such as media studies, marketing, social media analysis, and machine learning. Multimedia data can provide more information than text-based data alone. For instance, insights into consumer preferences, sentiment analysis, and brand recognition can be gained by analyzing images and videos. In machine learning, multimedia data is frequently used to train models for image recognition, speech recognition, and natural language processing. This is significant because it enables researchers and analysts to access and analyze a greater variety of data, which can lead to more accurate and insightful results.</p>

## Web Scraping Flickr

<p align=justify>The vast amount of multimedia content on Flickr has contributed to its popularity among many users. The website has over 100 million active users and shares billions of photos and videos. Flickr is an excellent source for multimedia content because many of its high-quality images and videos are freely accessible under a Creative Commons license, making them suitable for research and analysis.
Flickr also possesses a robust search engine that facilitates the discovery of relevant content via tags, keywords, and other filters. Metadata, which includes information such as the time and location of an image or video's capture and the type of camera used, can be used for research and analysis.</p>

<h4> Web Scraping Process </h4>

1. Import all necessary libraries
```ruby

import requests
import json
import csv
import cv2
import numpy as np
import pymongo
from pymongo import MongoClient
```

2. Define the API key and endpoint URLs. Please note that you must request your own API key via [Flickr App Garden](https://www.flickr.com/services/apps/create/apply/?). The first step is identifying the images or videos you want to scrape from Flickr. This can be done by searching for specific tags or keywords related to the research topic. The tag 'sunset' is specified in this example. We also use 3 API urls to search the photo and get the `photo_id`, then get the metadata through info and exif APIs.
```ruby
api_key = "your_api_key"
search_url = "https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key={api_key}&tags=sunset&per_page=100&page=1&format=json&nojsoncallback=1"
info_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
exif_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getExif&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
```

3. Make the API call to get the search results. This search will only return 100 results. It can be specified in the `search_url` flickr.photos.search method by setting the per_page parameter to 100 to get 100 results per page, and then loop through the pages to get all the photo IDs. 
```ruby
response = requests.get(search_url.format(api_key=api_key))
data = json.loads(response.text)
total_pages = data["photos"]["page"]
```

4. Once the target data is identified, access the Flickr API to retrieve the URLs for each image or video. Loop through all the pages and get the photo metadata. Since some owners restrict access to their Exif information, the metadata is narrowed down only to collect the title, author, URL, camera make, and model. Additionally, Flickr has strict policies on using its content, so ensuring that the data complies with its terms of service is essential.
```ruby
metadata_list = []
for page in range(1, total_pages+1):
    response = requests.get(search_url.format(api_key=api_key, page=page))
    data = json.loads(response.text)
    for photo in data["photos"]["photo"]:
        # Get the photo info
        response = requests.get(info_url.format(api_key=api_key, photo_id=photo["id"]))
        data = json.loads(response.text)
        metadata = data["photo"]

        # Get the camera settings
        response = requests.get(exif_url.format(api_key=api_key, photo_id=photo["id"]))
        data_exif = json.loads(response.text)

        # Store the metadata and camera settings in a dictionary
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

        # Add the metadata to the list
        metadata_list.append(metadata_dict)
```

5. Write the metadata in the CSV file and download the images. The data set obtained includes metadata such as camera information, and tags. The size of each file can range from a few kilobytes to several megabytes, depending on the quality and length of the multimedia content. The file type used includes image formats such as JPEG. To get the CSV file of this data, we use the OpenCV library to handle the images and metadata.
```ruby
with open("flickr_scraping.csv", "w", newline="", encoding="utf-8") as f:
    writer = csv.DictWriter(f, fieldnames=["Title", "Author", "URL", "Make", "Model"])
    writer.writeheader()

    for metadata in metadata_list:
        # Download the image
        response = requests.get(metadata["URL"])
        image = cv2.imdecode(np.frombuffer(response.content, np.uint8), cv2.IMREAD_COLOR)

        # Write the metadata to the CSV file
        writer.writerow(metadata)
        
```

6.  Store the downloaded multimedia content and associated metadata in an appropriate format for further analysis, such as a CSV file or a database. The data are uploaded to MongoDB Atlas using a connection string where the username, password, database, and collection name must be specified. To get the connection string, create a new project and cluster in MongoDB Atlas. Connect to the cluster by selecting the correct driver and version to get the corresponding connection string. Then, insert the data.
```ruby
#Connection String 
uri="mongodb://<username>:<password>@ac-lojpzav-shard-00-00.nz2oazc.mongodb.net:27017,ac-lojpzav-shard-00-01.nz2oazc.mongodb.net:27017,ac-lojpzav-shard-00-02.nz2oazc.mongodb.net:27017/?ssl=true&replicaSet=atlas-li4q9r-shard-0&authSource=admin&retryWrites=true&w=majority"
client = MongoClient(uri)

#Define the database and collection
db = client['<your_database_name>']
collection = db['<your_collection_name>']

collection.insert_many(metadata_list)
```
<img width="940" alt="Screenshot 2023-06-24 at 3 15 57 AM" src="https://github.com/drshahizan/special-topic-data-engineering/assets/76076543/8e524556-3ab8-4b80-8932-6b1a4a9667e3">

## Choosing a Library for Web Scraping
<p align=justify> Several libraries are available for web scraping multimedia content. To make a comparison, three libraries will be discussed: request, OpenCV, and Pillow.
 Each  library has its advantages and disadvantages in performing multimedia content web scraping. </p>
 
 <table>
    <tr>
        <th>Library</th>
        <th>Purpose</th>
        <th>Advantages</th>
        <th>Disadvantages</th>
    </tr>
    <tr>
        <td>Request</td>
        <td align=justify>
           A Python HTTP request library commonly retrieves web content, including multimedia files, from URLs. It makes it easier to send HTTP requests, handle responses,
            and retrieve multimedia content by directly accessing URLs. It includes methods for downloading files and dealing with various data types, such as images,
            videos, and other multimedia formats.
        </td>
        <td>
            <li>Suitable for directly accessing the URLs of web content, including multimedia files.</li>
            <li>Easy to integrate into web scraping workflows.</li>
            <li>Simple and intuitive API for making HTTP requests and handling responses.</li>        
        </td>
        <td>
            <li>Requires additional libraries or tools for advanced multimedia operations.</li>
            <li>Limited support for complex multimedia formats or specialized operations.</li>
            <li>Not designed specifically for multimedia manipulation or analysis.</li>        
        </td>
    </tr>
    <tr>
        <td>OpenCV</td>
        <td align=justify>
           Provides advanced multimedia processing capabilities, including the ability to load, manipulate, and analyze images and videos and perform tasks such as resizing, cropping, filtering, object detection, and various computer vision algorithms.
        </td>
        <td>
            <li>Supports a wide range of multimedia formats and provides advanced algorithms for image manipulation and analysis.</li>
            <li>Can be used for web scraping and subsequent multimedia processing tasks.</li>
            <li>Efficient and optimized for performance.</li>        
        </td>
        <td>
            <li>Larger library size.</li>
            <li>Focuses primarily on computer vision tasks, so it may have additional functionality beyond what is needed for basic web scraping.</li>
            <li>Might not be suitable for projects that require lightweight or minimalistic approaches.</li>        
        </td>
    </tr>
    <tr>
        <td>Pillow</td>
        <td align=justify>
            A well-known Python library for image processing and manipulation that provides a user-friendly interface for opening, manipulating, and saving various image file formats. It provides various image processing features and supports basic image operations such as metadata extraction, color space conversion, and transparency handling.
        </td>
        <td>
            <li>Simple and easy to use.</li>
            <li>Supports various image file formats.</li>
            <li>Easy to integrate into web scraping workflows.</li>
            <li>Suitable for basic image preprocessing and analysis tasks.</li>        
        </td>
        <td>
            <li>Limited support for complex image operations or specialized tasks.</li>
            <li>Require additional libraries or tools for advanced image analysis or manipulation.</li>
            <li>Not specifically designed for web scraping, it lacks built-in features for retrieving and handling web content.</li>        
        </td>
    </tr>
</table>

<P>There will be several criteria used to select the most suitable library for this assignment:</P>

1. **Functionality**- Understand the library's capabilities and features to ensure that it supports the specific tasks that must be performed, such as retrieving, processing, and manipulating multimedia content.
2. **Ease of use**- Select a library compatible with the programmer's abilities. The simple and straightforward solution will help programmers save time and effort during development.
3. **Compatibility**- Check whether the library is compatible with the web technologies used, such as its ability to handle different file formats, work with JavaScript-driven websites, or integrate well with other libraries. 
4. **Performance**- The chosen library should be efficient, fast, and resource-efficient. 
5. **Flexibility**- The library should be able to support various web page and file format types. 

<p align=justify>Based on these criteria, Request and OpenCV are the libraries that best align with the web scraping multimedia content assignment requirements. These libraries were chosen for this assignment because their features are suitable where requests are advantageous for simple web content retrieval, whereas OpenCV provides advanced multimedia processing capabilities.</p>  

## Storing Data in MongoDB

- The benefits of using MongoDB for storing multimedia content data:
  1. **Flexibility**- The document-based data model of MongoDB allows for flexible and dynamic schemas. This flexibility is particularly useful when storing multimedia content data, as the schema can vary from one document to another. Without enforcing a rigid schema, you can easily store various types of multimedia content.
  2. **Scalability**- MongoDB is designed to scale horizontally, which means the data is distributed across multiple servers or clusters. This scalability is critical for handling large amounts of multimedia content, which can quickly grow in size. You can achieve high throughput and efficiently handle concurrent read and write operations by distributing the data across multiple servers.
  3. **Binary data support**- MongoDB has excellent support for binary data storage, which is essential when handling multimedia content like images and videos. You can store binary data directly within a document, eliminating the need for separate storage systems or complex entity relationships.
  4. **High-performance queries**- MongoDB has powerful querying capabilities, including indexing and aggregation support. These features allow for the efficient retrieval and manipulation of multimedia content data based on criteria such as metadata, tags, or content properties. You can optimize query performance for multimedia-specific requirements by using appropriate indexing strategies. 
  
- The best way to store the data in MongoDB, including the data structure and organization:
  <p>It is essential to consider the data structure and organization when storing data in MongoDB to optimize performance and facilitate efficient querying. There were several ways of best practices for storing multimedia content in MongoDB:</p>
  
  1. **Use GridFS**- GridFS splits the file into smaller chunks and stores them as individual documents. It includes features that allow for the efficient storage and retrieval of large files. It is recommended to store large multimedia files exceeding the 16 MB size limit.
  2. **Denormalize and embedded data models**- Data models that have been denormalized allow you to embed related data within a single document. Embedding can improve query performance and make data access easier, particularly for frequently accessed related data.
  3. **Used appropriate indexes**- Create indexes on the fields that are frequently used in queries or that need to be sorted. Indexes can reduce query execution time significantly by allowing MongoDB to locate and retrieve relevant documents quickly. 
  4. **Store metadata separately**- Create a separate collection to store metadata related to multimedia content to allow for efficient querying and management of multimedia files.

  However, when designing data structure and organization based on specific application requirements, consider factors such as the size of multimedia files, expected access patterns, and performance considerations.

## Conclusion
<p align=justify>To summarize, this assignment aims to scrape image content from Flickr and store the extracted data in a database. Json, OpenCV, and Python are the tools and libraries used in this web scraping. It is possible to scrape many images and their metadata through web scraping. This is because web scraping multimedia content can benefit data analysis by storing data in MongoDB. MongoDB is an excellent choice for storing multimedia content data due to its flexibility, scalability, binary data support, and high-performance queries. Furthermore, the best way to design data structure and organization when storing data is to use GridFS, denormalize and embed data models, use appropriate indexes, and store metadata separately. Its purpose is to ensure high levels of optimized performance and efficient querying. Future research or analysis could identify a trend in frequent camera brands used in photography, model cameras used, and popular photographers using the data set from Flickr. </p>
