## 1. Introduction

Web scraping multimedia content refers to the process of automatically extracting and collecting images, videos, audio, and other types of multimedia data from websites. This type of data can be extremely valuable for research and analysis in various fields such as computer vision, natural language processing, marketing, and social media analysis.

Web scraping multimedia content can help researchers and analysts gain insights into visual and audio trends, sentiment analysis, and image recognition. For example, marketers can use image and video data to identify popular product trends or advertising strategies. Computer vision researchers can use large amounts of image data to train and improve machine learning models. Social media analysts can use multimedia content to monitor brand mentions and public opinion on social media platforms.


## 2. Web Scraping Flickr
<a href="https://www.flickr.com/">Flickr</a> is a popular photo-sharing website and online community that provides a large collection of user-generated images and videos. 

### Why should we use Flickr?

### a. Large collection of images
Flickr has a vast collection of user-generated images and videos, making it a great source for web scraping.

### b. User-friendly search functionality
Flickr has a powerful search engine that allows users to search for multimedia content based on keywords, tags, dates, and more, making it easy to find relevant content for web scraping.

### c. API access
Flickr provides an API (Application Programming Interface) that allows developers to access and interact with the site's multimedia content.

## 3. Process Of Web Scraping Using Flickr API

### a. Import all the required libraries.
```python
import requests
import json
import csv
import cv2
import numpy as np
!pip install pymongo
import pymongo
from pymongo import MongoClient
```
This Python code imports various libraries for web scraping, image processing, and working with MongoDB.

requests is a library that allows sending HTTP requests and handling responses in Python. It is commonly used for web scraping or interacting with web APIs.

json is a library that provides methods for encoding and decoding JSON data in Python. It is used for working with JSON data, which is a lightweight data interchange format commonly used in web applications.

csv is a library that provides functionality to read from and write to CSV files. It is commonly used for working with tabular data.

cv2 is a library that provides computer vision functions for processing images and videos. It is based on the OpenCV library and is commonly used for tasks such as object detection, image segmentation, and facial recognition.

numpy is a library that provides numerical computing functionality in Python. It is commonly used for working with arrays and matrices.

pymongo is a Python library for working with MongoDB, a popular NoSQL database. It provides an interface for connecting to MongoDB, creating and querying collections, and performing CRUD (create, read, update, delete) operations on documents.

The !pip install pymongo command installs the pymongo library if it is not already installed

The from pymongo import MongoClient statement imports the MongoClient class from the pymongo library. MongoClient is the primary interface for connecting to a MongoDB server and working with databases and collections.

Overall, this code imports several essential libraries for working with data in Python and specifically with MongoDB, which is a popular database for storing and managing data in web applications.

### a. Identifying the website or web page to be scraped.

```python
api_key = ""
search_url = "https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key={api_key}&tags=dog&per_page=100&page=1&format=json&nojsoncallback=1"
info_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
exif_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getExif&api_key={api_key}&photo_id={photo_id}&format=

```

This code defines several variables that are used to construct URLs for making API requests to the Flickr API:

- api_key is a string variable that contains a valid API key for accessing the Flickr API. API keys are used to authenticate requests and identify the application making the request.
- search_url is a string variable that contains the URL for searching photos on Flickr. It includes the api_key variable, as well as several parameters that specify the search criteria, such as the tags to search for, the number of photos to return per page, and the page number to start on. The format=json parameter specifies that the response should be returned in JSON format, and nojsoncallback=1 disables the JSONP callback function.
- info_url is a string variable that contains the URL for retrieving detailed information about a specific photo on Flickr. It includes the api_key variable and a photo_id variable, which is the ID of the photo to retrieve information about. The format=json parameter specifies that the response should be returned in JSON format, and nojsoncallback=1 disables the JSONP callback function.
- exif_url is a string variable that contains the URL for retrieving EXIF (Exchangeable Image File Format) data for a specific photo on Flickr. It includes the api_key variable and a photo_id variable, which is the ID of the photo to retrieve EXIF data for. The format=json parameter specifies that the response should be returned in JSON format, and nojsoncallback=1 disables the JSONP callback function.

### b. Convert API into JSON

```python
response = requests.get(search_url.format(api_key=api_key))
data = json.loads(response.text)
total_pages = data["photos"]["page"]

```
After defining the search_url variable in the previous code block, this code uses the requests library to send a GET request to the Flickr API endpoint specified by search_url. The api_key variable is inserted into the URL using Python's string formatting syntax and the .format() method, so that the API key is included in the request.

The response from the API is then converted from JSON format to a Python dictionary using the json.loads() method, and stored in the data variable.

The total_pages variable is then assigned the value of the page attribute from the photos dictionary within the data dictionary. This represents the total number of pages of search results available for the given search query.

Overall, this code retrieves the total number of pages of search results available for the "dog" tag on Flickr, using the previously defined search_url and api_key variables.


### c. Retrieve the metadata for each photo.

```python
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

This code block starts by creating an empty list metadata_list to store the metadata for each photo. Then, using a for loop, it iterates over each page of search results (1 to total_pages) to retrieve the metadata for each photo.

For each photo on each page of search results, the code sends a request to the Flickr API endpoint specified by info_url and exif_url to get information about the photo and its camera settings, respectively.

The metadata and camera settings are then stored in a dictionary called metadata_dict, with the title of the photo, author of the photo, and URL to the photo stored as keys. If the camera settings for the photo are not accessible, the value of exif_data is set to "Owner denied access". Otherwise, the make and model of the camera are extracted from the camera settings and added to the dictionary.

Finally, the metadata_dict dictionary is appended to the metadata_list for each photo, so that the final metadata_list contains a list of dictionaries, each containing the metadata and camera settings for a single photo.


### d. Storing the data in a database or other storage medium for later use or analysis. This may involve cleaning or preprocessing the data to remove any irrelevant or inaccurate information.

```python

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

This code writes the metadata information of a list of dog images obtained from Flickr to a CSV file named "flickr_scraping.csv".

It uses the csv library to write the data to a CSV file with the provided fieldnames in the first row. The metadata list is iterated through, and for each image, it downloads the image using the requests library, and decodes it using the cv2 library. Finally, it writes the metadata information to the CSV file using the writerow() function.

## 4. Storing Data in MongoDB

MongoDB is a popular NoSQL database that allows for the storage of unstructured data. In this case, we can use MongoDB to store the metadata for the images we scraped from Flickr.

#### The process for storing data in MongoDB involves the following steps:

#### a.Install the MongoDB driver for Python using pip install pymongo.

#### b.Connect to the MongoDB server using a URI string that includes the username, password, and database name.

#### c.Define the database and collection to store the data in.

#### d.Use the insert_one() or insert_many() method to insert the data into the collection.

#### e.Once the data is stored in MongoDB, we can easily query and analyze it using tools like MongoDB Compass or Python's PyMongo library.
