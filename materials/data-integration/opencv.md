<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

# OpenCV
**OpenCV (Open Source Computer Vision Library)** is another library that is commonly used for image processing and computer vision tasks in Python. It provides support for image and video processing, including functions for reading, writing, and manipulating images and video files. OpenCV can also be used for tasks like object detection and recognition, which can be useful for scraping websites that contain images or videos with specific objects or patterns. In web scraping, OpenCV can be used to extract information from images and videos that cannot be obtained through traditional web scraping methods.

Here are some examples of data that can be extracted using OpenCV in web scraping:

1. **Image analysis**: OpenCV can be used to analyze images and extract features such as color, texture, and shape. This can be useful in cases where the images contain important information that cannot be extracted using traditional web scraping methods.

2. **Object detection**: OpenCV can be used to detect objects in images and videos. This can be useful in cases where the website contains images of products, people, or other objects that need to be identified and analyzed.

3. **Video analysis**: OpenCV can be used to analyze videos and extract information such as motion, object tracking, and facial recognition. This can be useful in cases where the website contains videos that need to be analyzed to extract important data.

For example, let's say you are interested in scraping a website that contains images of cars, and you want to extract the make and model of each car. However, the make and model information is not displayed as text on the page, but rather as a logo on the car itself. You can use OpenCV to detect the logo and extract the make and model information.

Here's an example code snippet that uses OpenCV to detect a car logo and extract the make and model:

```python
import cv2

# Load the image file
image = cv2.imread('car_image.png')

# Load the car logo template
logo = cv2.imread('car_logo_template.png')

# Match the logo in the image
result = cv2.matchTemplate(image, logo, cv2.TM_CCOEFF_NORMED)

# Find the best match
min_val, max_val, min_loc, max_loc = cv2.minMaxLoc(result)

# Get the coordinates of the logo in the image
top_left = max_loc
bottom_right = (top_left[0] + logo.shape[1], top_left[1] + logo.shape[0])

# Extract the make and model from the logo text
make_model = image[top_left[1]:bottom_right[1], top_left[0]:bottom_right[0]]

# Display the result
cv2.imshow('Make and Model', make_model)
cv2.waitKey(0)
cv2.destroyAllWindows()
```

In this example, we load an image file named 'car_image.png' using `OpenCV's cv2.imread()` function. We also load a car logo template image named 'car_logo_template.png'. We then use OpenCV's cv2.matchTemplate() function to match the logo in the image. We find the best match using OpenCV's `cv2.minMaxLoc()` function, and then get the coordinates of the logo in the image. Finally, we extract the make and model from the logo text by cropping the image using the logo coordinates.

Note that the accuracy of the logo detection and text extraction can depend on the quality and clarity of the images, and the accuracy of the logo template used. It is also important to consider any legal or ethical implications of web scraping, and to ensure that the scraping is done in compliance with the website's terms of service and any applicable laws and regulations.

## Web scraping using OpenCV
OpenCV is a powerful computer vision library that can be used for various image and video processing tasks, including web scraping. Here's a general outline of the steps you would follow to perform web scraping using OpenCV:

### 1. Install OpenCV
You can install OpenCV using pip, the Python package manager. Open your terminal or command prompt and type: `pip install opencv-python`

Identify the URL of the image or video you want to scrape: Use a web scraping library like BeautifulSoup or Scrapy to navigate to the webpage containing the image or video you want to scrape, and identify the URL of the image or video.

Download the image or video using OpenCV: Use OpenCV's `imread()` function to read the image or video from the URL. Here's an example code snippet:

```python
import cv2
import urllib.request

url = "https://example.com/image.jpg"
img_array = bytearray(urllib.request.urlopen(url).read())
img = cv2.imdecode(np.asarray(img_array), cv2.IMREAD_UNCHANGED)
```

In this example, we first import the `cv2` module from OpenCV, and the `urllib` library to download the image. We then define the URL of the image we want to scrape, and use `urllib.request.urlopen()` to open the URL and read its contents. We convert the image content to a byte array, and then use `cv2.imdecode()` to decode the image data and store it in `img`.

If you want to scrape a video, you can use the VideoCapture() function from OpenCV to capture frames from the video.

### 2. Process the image or video as needed
Once you have downloaded the image or video, you can use OpenCV's various image and video processing functions to manipulate the data as needed. For example, you could detect and track objects in the image using OpenCV's object detection and tracking algorithms.

### 3. Save the processed image or video
Finally, you can use OpenCV's `imwrite()` function to save the processed image or video to a file. Here's an example code snippet:

```python
cv2.imwrite("processed_image.jpg", img)
```

In this example, we use the `imwrite()` function to save the img variable to a file named *processed_image.jpg*.

Note that web scraping can have legal and ethical implications, and it is important to make sure you have permission to scrape the website and its content before doing so. Additionally, make sure to follow best practices for web scraping, such as not overwhelming the website's servers with too many requests.

## Case Study: Google Scholar
Extracting data from Google Scholar using OpenCV can be a challenging task since Google Scholar uses dynamic HTML, which means that the page source code changes frequently. However, we can extract data such as article titles and authors from the search results using OpenCV. Here's a general outline of the steps you would follow to extract data from Google Scholar using OpenCV:

### 1. Install OpenCV
You can install OpenCV using pip, the Python package manager. Open your terminal or command prompt and type: `pip install opencv-python-headless`

### 2. Use requests and BeautifulSoup to extract the search results HTML
Use the `requests` library to make an HTTP GET request to the Google Scholar search results page, passing in your search query as a parameter. You can then use BeautifulSoup to parse the HTML and extract the search results.

```python
import requests
from bs4 import BeautifulSoup

query = "web scraping with opencv"
url = "https://scholar.google.com/scholar?q=" + query

response = requests.get(url)
soup = BeautifulSoup(response.text, "html.parser")
results = soup.find_all("div", {"class": "gs_r gs_or gs_scl"})
```

In this example, we define our search query and construct the search results URL by appending the query to the base Google Scholar search URL. We then use `requests.get()` to make an HTTP GET request to the search results URL, and parse the HTML using BeautifulSoup. We extract the search results by finding all `div` elements with the class `gs_r gs_or gs_scl`.

### 3. Extract the article titles and authors using OpenCV
Use OpenCV's image processing functions to extract the article titles and authors from the search results. Since the Google Scholar search results use dynamic HTML, the article titles and authors are rendered as images rather than text. We can use OpenCV's image processing functions to open and process these images.

```python
import numpy as np
import cv2
import urllib

for result in results:
    title_url = result.find("h3", {"class": "gs_rt"}).find("a")["href"]
    title_img_url = result.find("h3", {"class": "gs_rt"}).find("img")["src"]
    author_img_url = result.find("div", {"class": "gs_a"}).find("img")["src"]

    title_response = urllib.request.urlopen(title_img_url)
    title_img = np.asarray(bytearray(title_response.read()), dtype=np.uint8)
    title_img = cv2.imdecode(title_img, cv2.IMREAD_COLOR)
    title = pytesseract.image_to_string(title_img)

    author_response = urllib.request.urlopen(author_img_url)
    author_img = np.asarray(bytearray(author_response.read()), dtype=np.uint8)
    author_img = cv2.imdecode(author_img, cv2.IMREAD_COLOR)
    author = pytesseract.image_to_string(author_img)

    print("Title:", title.strip())
    print("Author:", author.strip())
```

In this example, we iterate over each search result and extract the URLs of the article title, article title image, and author image. We use `urllib.request.urlopen()` to download the article title and author images, and convert the bytes data into a numpy array using `np.asarray()`. We then use `cv2.imdecode()` from the OpenCV library to decode the image and store it as a numpy array. We then use PyTesseract, an OCR library, to extract the text from the image using `image_to_string()`. Finally, we print the extracted title and author.

Note that this is a simplified example, and there are many more details and edge cases to consider when extracting data from Google Scholar using OpenCV.

## Storing data using MongoDB 
When it comes to storing data that includes images and videos, MongoDB is a good option as it supports the storage of binary data through its Binary Data subtype. Here are the steps you can follow to store data that includes images and videos after scraping using OpenCV in MongoDB:

1. Establish a connection to your MongoDB server and create a new database and collection where you will store the scraped data.

2. After scraping the data using OpenCV, you can save the image or video file to a local file path.

3. Open the file and read its binary data using Python's built-in `open` function and `read` method.

4. Convert the binary data into the BSON format, which is the binary representation of JSON data used by MongoDB, using Python's built-in `bson.binary.Binary` method.

5. Create a new document object and insert it into the MongoDB collection using the `insert_one` method of the `pymongo` library. The document object should include the data fields you scraped along with the binary data of the image or video.

Here's a code example that shows how to store image and video data in MongoDB using OpenCV and pymongo:

```python
import pymongo
import requests
import cv2

# Connect to MongoDB server and create database and collection
client = pymongo.MongoClient('mongodb://localhost:27017/')
db = client['mydatabase']
col = db['mycollection']

# Scrape data using OpenCV
url = 'https://example.com/image.jpg'
response = requests.get(url, stream=True).raw
image = cv2.imdecode(np.asarray(bytearray(response.read()), dtype=np.uint8), cv2.IMREAD_COLOR)

# Save image to local file path
cv2.imwrite('image.jpg', image)

# Read binary data from local file
with open('image.jpg', 'rb') as f:
    image_data = f.read()

# Convert binary data to BSON format
bson_data = pymongo.binary.Binary(image_data)

# Create document object and insert into MongoDB collection
document = {
    'title': 'Example Image',
    'description': 'This is an example image',
    'image_data': bson_data
}

col.insert_one(document)

# Scrape video data using OpenCV
url = 'https://example.com/video.mp4'
response = requests.get(url, stream=True).raw

# Save video to local file path
with open('video.mp4', 'wb') as f:
    f.write(response.read())

# Read binary data from local file
with open('video.mp4', 'rb') as f:
    video_data = f.read()

# Convert binary data to BSON format
bson_data = pymongo.binary.Binary(video_data)

# Create document object and insert into MongoDB collection
document = {
    'title': 'Example Video',
    'description': 'This is an example video',
    'video_data': bson_data
}

col.insert_one(document)
```

In this example, we first establish a connection to the MongoDB server and create a new database and collection. We then use OpenCV to scrape an image and save it to a local file path. We read the binary data from the file using Python's `open` function and `read` method, and then convert it to BSON format using `pymongo.binary.Binary`. We create a new document object with the scraped data fields and the binary image data, and then insert it into the MongoDB collection using `insert_one`.

We follow a similar process to scrape a video, save it to a local file path, read its binary data, convert it to BSON format, and insert it into the MongoDB collection along with the scraped data fields.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
