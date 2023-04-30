<h1 align=center>Web scraping Multimedia Using Flickr API</h1>

<h3> 1. Introduction</h3>

<p align=justify>Web scraping multimedia content extracts multimedia data from websites, including images, videos, audio, and animations. This data type can provide valuable insights for research and analysis in various disciplines, such as media studies, marketing, social media analysis, and machine learning. Multimedia data can provide more information than text-based data alone. For instance, insights into consumer preferences, sentiment analysis, and brand recognition can be gained by analyzing images and videos. In machine learning, multimedia data is frequently used to train models for image recognition, speech recognition, and natural language processing. This is significant because it enables researchers and analysts to access and analyze a greater variety of data, which can lead to more accurate and insightful results.</p>

<h3> 2. Web Scraping Flickr</h3>

- Explain why Flickr is a good source for multimedia content and provide a brief overview of the site.
- Detail the web scraping process, including the tools and libraries used and any challenges that were encountered.
- Discuss the data set obtained, including metadata such as data size, file type, and other relevant information.

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

<h3> Web Scraping Steps </h3>

1. Import all neccesary libraries


```ruby

import requests
import json
import csv
import cv2
import numpy as np
```

2. Define the API key and endpoint URLs. Note that you need to apply for your own API key through Flickr API Explorer.
```ruby
api_key = "your_api_key"
search_url = "https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key={api_key}&tags=sunset&per_page=100&page=1&format=json&nojsoncallback=1"
info_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
exif_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getExif&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
```

3. Make the API call to get the search results. This search will only return 100 results. It can be specify in the flickr.photos.search method by setting the per_page parameter to 100 to get 100 results per page, and then loop through the pages to get all the photo IDs.
```ruby
response = requests.get(search_url.format(api_key=api_key))
data = json.loads(response.text)
total_pages = data["photos"]["page"]
```

4. Loop through all the pages and get the photo metadata. Since some of the owner restrict the access to their exif information. The metadata is narrowed down to only collect the title, author, url, camera make and model.
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

5. Write the metadata to the CSV file and download the images
```ruby
with open("//Users/nursyahirasabrina/Downloads/watermelon/metadata.csv", "w", newline="", encoding="utf-8") as f:
    writer = csv.DictWriter(f, fieldnames=["Title", "Author", "URL", "Make", "Model"])
    writer.writeheader()

    for metadata in metadata_list:
        # Download the image
        response = requests.get(metadata["URL"])
        image = cv2.imdecode(np.frombuffer(response.content, np.uint8), cv2.IMREAD_COLOR)

        # Write the metadata to the CSV file
        writer.writerow(metadata)
        
```
6. Upload the csv file to MongoDB
