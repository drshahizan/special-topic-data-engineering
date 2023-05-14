## 1. Introduction
Web scraping multimedia content relating to cars from Flickr may give a lot of information for study and analysis in sectors such as marketing, advertising, design and automotive engineering. Flickr is a prominent photo-sharing network where users may publish and share their images, and it has a large collection of multimedia information relating to vehicles. Web scraping this data can reveal insights into customer preferences, design trends, and user-generated material connected to cars. This data may also be utilised to train machine learning models for picture identification and classification tasks. As a result, online scraping multimedia material linked to vehicles from Flickr is an important activity for researchers and analysts in various sectors.

## 2. Web Scraping Flickr

<h4> Web Scraping Process </h4>

1. Accessing Google Drive from Google Colab
```ruby

from google.colab import drive
drive.mount('/content/drive')
```
2. Install Flickr API.
```ruby

!pip install FlickrAPI
```
3. Import all neccesary libraries
```ruby

import requests
import json
import csv
import cv2
import numpy as np
```

4. Establish the endpoint URLs and API key. Initially, finding the Flickr photographs or videos that you want to scrape is the first step. This might be achieved by looking for particular tags or keywords associated with the study topic. In this example, the tag 'bridge' is mentioned. Additionally, we are utilising three API urls to search for the photo and obtain the "photo_id" before obtaining the metadata using the info and exif APIs.
```ruby
api_key = "44ea8d9eef59bddae531535b21df31f8"
search_url = "https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key={api_key}&tags=bridge&per_page=100&page=1&format=json&nojsoncallback=1"
info_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
exif_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getExif&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
```
> **API Keys** - To monitor API usage, we must have an application key in order to utilise the Flickr API. The API can only currently be used commercially with prior authorization. Staff members examine requests for API keys intended for commercial use. Please keep in mind that you must obtain your own API key through [this link](https://www.flickr.com/services/api/) > API Keys. Do fill in necessary information requested by Flickr then kindly wait for the team to respond.

5. To obtain the search results, make an API call. This search will yield just 100 results. It is possible to provide it in the 'search_url' flickr.photos.search method by setting the per_page parameter to 100 to get 100 results per page and then looping through the pages to get all the photo IDs.
```ruby
response = requests.get(search_url.format(api_key=api_key))
data = json.loads(response.text)
total_pages = data["photos"]["page"]
```

6. After identifying the desired data, use the Flickr API to retrieve the URLs for each image or video. Get the photo metadata by iterating through all of the pages. Because some owners restrict access to their exif data, the metadata is limited to merely collecting the title, author, url, camera make and model. Furthermore, Flickr has stringent policies about the usage of their information, so it's critical to guarantee that the data is used in accordance with their terms of service.
```ruby
# Get the photo metadata by iterating through all of the pages.
metadata_list = []
for page in range(1, total_pages+1):
    response = requests.get(search_url.format(api_key=api_key, page=page))
    data = json.loads(response.text)
    for photo in data["photos"]["photo"]:
        # Retrieve the photo information
        response = requests.get(info_url.format(api_key=api_key, photo_id=photo["id"]))
        data = json.loads(response.text)
        metadata = data["photo"]

        # Retrieve the camera settings
        response = requests.get(exif_url.format(api_key=api_key, photo_id=photo["id"]))
        data_exif = json.loads(response.text)

        # Make a dictionary of the metadata and camera settings.
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


7. Download the photos and save the metadata to a CSV file. Metadata such as geolocation data, camera information, and tags are included in the data set acquired. Depending on the quality and duration of the multimedia material, the size of each file might range from a few kilobytes to several megabytes. Image formats such as JPEG are utilised as file types. The metadata can be used to determine trends in the use of tags or geolocation data, as well as to investigate the properties of the multimedia material itself. We utilise the OpenCV package to handle the photos and information in order to generate the csv file for this data.
```ruby
with open("Flickr Image Scraping_DataSphere.csv", "w", newline="", encoding="utf-8") as f:
    writer = csv.DictWriter(f, fieldnames=["Title", "Author", "URL", "Make", "Model"])
    writer.writeheader()

    for metadata in metadata_list:
        # Download the image
        response = requests.get(metadata["URL"])
        image = cv2.imdecode(np.frombuffer(response.content, np.uint8), cv2.IMREAD_COLOR)

        # Write the metadata to the CSV file
        writer.writerow(metadata)
```

## 3. Storing Data in MongoDB

The benefits of using MongoDB for storing multimedia content data:
1. Scalability: MongoDB is designed to scale horizontally, which means it can handle large volumes of multimedia content data without sacrificing performance.

2. Flexibility: MongoDB's document-based structure allows for flexible data modeling and the ability to store multimedia content data in a wide variety of formats.

3. Querying and Indexing: MongoDB provides powerful querying and indexing capabilities that enable efficient searching and analysis of multimedia content data, including support for geospatial queries.

4. Automatic Sharding: MongoDB automatically partitions data across multiple servers for efficient storage and retrieval of multimedia content data.

5. High Availability: MongoDB provides automatic failover and replication, ensuring that multimedia content data remains available even in the event of hardware failures or other issues.

7. Rich API Support: MongoDB has a rich API with support for a wide variety of programming languages, making it easy to integrate multimedia content data into applications.

MongoDB is a well-known NoSQL database that employs a document-based paradigm. You must first decide the structure and organisation of your data before storing it in MongoDB. Here's how to format and organise automobile image data for flickr multimedia:

1. Choose the fields you wish to save for each automobile photograph. This might contain information such as the vehicle's make, model, year, colour, number of doors, gearbox type, and any other pertinent details.

2. To store your data, create a new MongoDB database and collection.

3. Create a new document in your collection for each automobile image that has all of the fields you defined in step 1.

4. If you have your data in a CSV file, you may import it into your collection using the MongoDB import tool. CSV files are supported by the import tool, and data may be imported straight from them.

5. If you prefer Python, you may connect to your MongoDB database using the PyMongo package and then put documents into your collection using Python. Here's an example of code:
```
import pymongo
import csv

# Connect to MongoDB
client = pymongo.MongoClient('mongodb://localhost:27017/')
db = client['mydatabase']
collection = db['cars']

# Open the CSV file
with open('cars.csv', 'r') as file:
    reader = csv.DictReader(file)
    
    # Insert each row as a document in MongoDB
    for row in reader:
        collection.insert_one(row)
```

Examples of how the data can be queried and analyzed using MongoDB:

1. Querying by keywords: Using the '$text' operator, you may search for multimedia material associated with specified keywords in MongoDB. For example, you can use the following command to search for all photographs relating to "sports cars":

```
db.photos.find({ $text: { $search: "sports cars" } })
```

2. Aggregating by tags: Flickr users may use tags to describe the content of their images. You can use MongoDB's aggregation architecture to group photographs by tags and count the number of photos in each category. For example, you can use the following command to count the number of photographs with the tag "Ferrari":

```
db.photos.aggregate([
  { $unwind: "$tags" },
  { $match: { tags: "Ferrari" } },
  { $group: { _id: "$tags", count: { $sum: 1 } } }
])
```

3. Analyzing user-generated content: Flickr allows users to post their own images as well as comment on and rate the photos of other users. You may use MongoDB to analyse user-generated material to learn about user behaviour and preferences. For example, you can use the following command to get the most popular photographs based on the number of views:

```
db.photos.find().sort({ views: -1 }).limit(10)
```


## 4. Conclusion

The following are the primary takeaways from the online scraping of Flickr's automotive-related multimedia content:

-On Flickr, there are a lot of automotive pictures that can be scraped for data analysis.

-The photographs can be filtered based on a variety of factors, including location, colour, manufacturer, and model.

-The year, make, and model of the car can be learned by scraping the metadata from the images.

-Targeted advertising, trend analysis, and market research are just a few uses for the scraped data.

To conclude,Web scraping multimedia content for data analysis is important since it can deliver insightful knowledge and data that would otherwise be hard to find. Analysts can develop a more thorough understanding of consumer behaviour, preferences, and trends by scraping data from many sources, including images, videos, and social media posts. This can result in better predictions, better choices, and better business results.

