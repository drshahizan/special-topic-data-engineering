import requests
import json
import csv
import cv2
import numpy as np

# Define the API key and endpoint URLs
api_key = "your_api_key"
search_url = "https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key={api_key}&tags=sunset&per_page=100&page=1&format=json&nojsoncallback=1"
info_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"
exif_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getExif&api_key={api_key}&photo_id={photo_id}&format=json&nojsoncallback=1"

# Make the API call to get the search results
response = requests.get(search_url.format(api_key=api_key))
data = json.loads(response.text)
total_pages = data["photos"]["page"]

# Loop through all the pages and get the photo metadata
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

# Write the metadata to the CSV file and download the images
with open("flickr_scraping.csv", "w", newline="", encoding="utf-8") as f:
    writer = csv.DictWriter(f, fieldnames=["Title", "Author", "URL", "Make", "Model"])
    writer.writeheader()

    for metadata in metadata_list:
        # Download the image
        response = requests.get(metadata["URL"])
        image = cv2.imdecode(np.frombuffer(response.content, np.uint8), cv2.IMREAD_COLOR)

        # Write the metadata to the CSV file
        writer.writerow(metadata)