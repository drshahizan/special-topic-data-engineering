<h1 align=center>Web scraping Multimedia Using Flickr API</h1>

<h3> 1. Introduction</h3>

<p align=justify>Web scraping multimedia content extracts multimedia data from websites, including images, videos, audio, and animations. This data type can provide valuable insights for research and analysis in various disciplines, such as media studies, marketing, social media analysis, and machine learning. Multimedia data can provide more information than text-based data alone. For instance, insights into consumer preferences, sentiment analysis, and brand recognition can be gained by analyzing images and videos. In machine learning, multimedia data is frequently used to train models for image recognition, speech recognition, and natural language processing. This is significant because it enables researchers and analysts to access and analyze a greater variety of data, which can lead to more accurate and insightful results.</p>

<h3> 2. Web Scraping Flickr</h3>

<p align=justify>The vast amount of multimedia content available on Flickr has contributed to its popularity among many users. The website has more than 100 million active users, and billions of photos and videos have been shared. Flickr is an excellent source for multimedia content because many of its high-quality images and videos are freely accessible under a Creative Commons licence, making them suitable for research and analysis.
Flickr also possesses a robust search engine that facilitates the discovery of relevant content via tags, keywords, and other filters. Metadata, which includes information such as the time and location of an image or video's capture and the type of camera used, can be used for research and analysis.</p>

<h4> Web Scraping Process </h4>

1. Import all neccesary libraries
```ruby

import requests
import json
import csv
import cv2
import numpy as np
import pymongo
from pymongo import MongoClient
```

2. Define the API key and endpoint URLs. Please note that you must request your own API key via [Flickr App Garden](https://www.flickr.com/services/apps/create/apply/?). The first step is to identify the images or videos that you want to scrape from Flickr. This can be done by searching for specific tags or keywords related to the research topic. The tag 'sunset' is specified in this example. We are also using 3 API urls to search the photo and get the `photo_id`, then get the metadata through info and exif APIs.
```ruby
api_key = "your_api_key"
search_url = "https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key={api_key}&tags=sunset&per_page=100&page=1&format=json&nojsoncallback=1"
info_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
exif_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getExif&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
```

3. Make the API call to get the search results. This search will only return 100 results. It can be specify in the `search_url` flickr.photos.search method by setting the per_page parameter to 100 to get 100 results per page, and then loop through the pages to get all the photo IDs. 
```ruby
response = requests.get(search_url.format(api_key=api_key))
data = json.loads(response.text)
total_pages = data["photos"]["page"]
```

4. Once the target data is identified, access the Flickr API to retrieve the URLs for each image or video. Loop through all the pages and get the photo metadata. Since some of the owner restrict the access to their exif information, the metadata is narrowed down to only collect the title, author, url, camera make and model. Additionally, Flickr has strict policies on the use of their content, so it's essential to ensure that the data is being used in compliance with their terms of service.
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

5. Write the metadata to the CSV file and download the images. The data set obtained include metadata such as the geolocation data, camera information, and tags. The size of each file can range from a few kilobytes to several megabytes, depending on the quality and length of the multimedia content. The file type used include image formats such as JPEG. The metadata can be analyzed to identify trends in the use of tags or geolocation data, as well as to study the characteristics of the multimedia content itself. To get the csv file of this data, we use OpenCV library to handle the images and metadata.
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

6.  Store the downloaded multimedia content and associated metadata in an appropriate format for further analysis, such as a CSV file or a database. The data are uploaded to MongoDB Atlas using a connection string where the username, password, database and collection name need to be specified. To get the connection string, in MongoDB Atlas, create new project and cluster. Connect to the cluster by selecting the correct driver and version to get the corresponding connection string. Then, insert the data.
```ruby
#Connection String 
uri="mongodb://<username>:<password>@ac-lojpzav-shard-00-00.nz2oazc.mongodb.net:27017,ac-lojpzav-shard-00-01.nz2oazc.mongodb.net:27017,ac-lojpzav-shard-00-02.nz2oazc.mongodb.net:27017/?ssl=true&replicaSet=atlas-li4q9r-shard-0&authSource=admin&retryWrites=true&w=majority"
client = MongoClient(uri)

#Define the database and collection
db = client['<your_database_name>']
collection = db['<your_collection_name>']

collection.insert_many(metadata_list)
```
<img width='500' src="https://github.com/drshahizan/special-topic-data-engineering/blob/6973121368be8f043f9d6bb662ae3e78617e064b/assignment/data-scraping/submission/part1/Regex/MongoDB.png" alt='Screenshot of database after data is added'>

<h3> 3. Choosing a Library for Web Scraping</h3>

- Compare and contrast the available libraries for web scraping multimedia content, including Pillow and OpenCV.
- Explain the criteria used to choose the appropriate library for this project.
- Justify the final choice and explain the advantages of the chosen library.

<h3> 4. Storing Data in MongoDB</h3>

- Discuss the benefits of using MongoDB for storing multimedia content data.
- Explain the best way to store the data in MongoDB, including the data structure and organization.
- Provide examples of how the data can be queried and analyzed using MongoDB.

<h3> 5. Conclusion</h3>

- Summarize the main points of the assignment and restate the importance of web scraping multimedia content for data analysis.
- Offer suggestions for future research or analysis using the data set obtained from Flickr.


