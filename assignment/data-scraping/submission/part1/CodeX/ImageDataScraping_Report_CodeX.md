# Pixabay Images Data Scraping 
Image web scraping refers to the process of automatically extracting images and related metadata from websites using software programs, scripts or APIs. This can be done for a variety of reasons, such as building a dataset for machine learning or computer vision, collecting images for marketing purposes, or simply gathering information for personal use.

It's important to note that not all websites allow web scraping, and some may require permission or have restrictions on how the data can be used. It's also important to be respectful of the website's terms of use and to avoid overloading their server with too many requests.
## Part 1: Scrap Metadata From Pixabay
### Step 1: Go to the Pixabay website
Go to the Pixabay website: https://pixabay.com/api/docs/ then copy and paste the API code. You will need to sign up first if you have not registered.

### Step 2: Import necessary libraries and URL
```python
import requests
import csv

# Pixabay API endpoint
url = 'https://pixabay.com/api/'

# Pixabay API key
api_key = '35457209-4e96a8c8795b4e18cc047a4e6'
```

### Step 3: Enter the parameters of image
This code will extract 100 ragdolls images. 

Replace `query` with what you want to search. 

`per-page` will extract number of results per page (max is 200.)

`page` is the number of pages to retrieve.
```python
# Query parameters
query = 'ragdolls'  # Replace with the search query you want to use
per_page = 100     # Number of results per page (max is 200)
page = 1           # Page number to retrieve
```

### Step 4: GET request to Pixabay API

```python
# Send GET request to Pixabay API
response = requests.get(url, params={
    'key': api_key,
    'q': query,
    'per_page': per_page,
    'page': page
})
```

```python
# Parse JSON response
data = response.json()
```

### Step 5: Extract metadata
If the API request is successful, we can then proceed to extract the metadata like the code below.
```python
# Check if API request was successful
if response.status_code == 200 and data['totalHits'] > 0:
    # Create a list to store metadata
    metadata_list = []

    # Loop through the list of hits
    for hit in data['hits']:
        # Extract the metadata from the hit object
        photo_id = hit['id']
        photo_title = hit['user']
        photo_description = hit['tags']
        photo_tags = hit['tags']
        photo_url = hit['webformatURL']
        photo_user = hit['user']
        photo_user_id = hit['user_id']
        imageWidth = hit['imageWidth']
        imageHeight = hit['imageHeight']
        previewWidth = hit['previewWidth']
        previewHeight = hit['previewHeight']
        webformatWidth = hit['webformatWidth']
        webformatHeight = hit['webformatHeight']
        imageSize = hit['imageSize']
        tags = hit['tags']
        view = hit['views']
        downloads = hit['downloads']
        likes = hit['likes']
        comments =  hit['comments']
        user_id = hit['user_id']
        user = hit['user']
        pageURL = hit['pageURL']
        previewURL = hit['previewURL']
        userImageURL =  hit['userImageURL']
        webformatURL = hit['webformatURL']


        # Create a dictionary to store the metadata for the current photo
        metadata = {
            'Photo ID': photo_id,
            'Photo Title': photo_title,
            'Photo Description': photo_description,
            'Photo Tags': photo_tags,
            'Photo URL': photo_url,
            'Photo User': photo_user,
            'Photo User ID': photo_user_id,
            'Image Width' : imageWidth,
            'Image Height' : imageHeight  ,
            'previewWidth' :  previewWidth,
            'previewHeight' :  previewHeight,
            'webformatWidth' : webformatWidth,
            'webformatHeight' :  webformatHeight,
            'imageSize' :  imageSize,
            'tags' :  tags,
            'views' :  view,
            'downloads' :  downloads,
            'likes' :  likes,
            'comments' :  comments,
            'userID' :  user_id,
            'user' :  user,
            'page URL' :  pageURL,
            'preview URL' :  previewURL,
            'userimage URL' :  userImageURL,
            'webformat URL' :  webformatURL,

        }

        # Append the metadata to the metadata list
        metadata_list.append(metadata)
```

### Step 6: Save in .csv file
The results will then be saved in [PixabayImage_Metadata.csv](https://github.com/drshahizan/special-topic-data-engineering/blob/accd4cc0707ea823667e2bc0299090d351a3b769/assignment/data-scraping/submission/part1/CodeX/PixabayImage_Metadata.csv)
```python
    # Write the metadata to a CSV file
    with open('pixabay_metadata.csv', 'w', newline='') as csvfile:
        fieldnames = metadata_list[0].keys()
        writer = csv.DictWriter(csvfile, fieldnames=fieldnames)
        writer.writeheader()
        writer.writerows(metadata_list)

    print('Metadata for {} photos has been saved to PixabayImage_Metadata.csv file.'.format(len(metadata_list)))
else:
    print('No photos found for the query: {}'.format(query))
```

## Part 2: Load into MongoDB
### Step 1: Open and connect MongoDB compass
> Click here to install [MongoDB Compass](https://www.mongodb.com/try/download/shell) 

Open MongoDB Compass and create `New Connection`. Insert the URL of the local host.

<img height='200px' src='https://user-images.githubusercontent.com/96984290/230783928-1fe10a85-dd6e-43b2-8397-a29c0f03658d.jpg'/>


### Step 2: Create new database
Create Database by inserting `Database Name` and `Collection Name` 

<img height='350px' src='https://user-images.githubusercontent.com/96984290/230783967-e43ebd9a-7e2d-4296-8231-5249137b2dde.jpg'/>

### Step 3: Add .csv file
In the new database created, click on `ADD DATA` and select `Import JSON or CSV file`.

<img height='150px' src='https://user-images.githubusercontent.com/96984290/230783986-27fef5d2-81b6-4ce2-8858-4f5fd721b4d1.jpg'/>

Choose the file name of the saved metadata images [PixabayImage_Metadata.csv](https://github.com/drshahizan/special-topic-data-engineering/blob/accd4cc0707ea823667e2bc0299090d351a3b769/assignment/data-scraping/submission/part1/CodeX/PixabayImage_Metadata.csv) 

Then, click on `Import`

<img height='300px' src='https://user-images.githubusercontent.com/96984290/230784004-63817cab-f6f0-451f-bd8f-7088bb2a6e3f.jpg'/>

A database based on the csv uploaded will be shown as below picture
<img height='300px' src='https://user-images.githubusercontent.com/96984290/235344710-4eb4dc36-ea5f-424f-9048-80f5c0fca752.jpg'/>

