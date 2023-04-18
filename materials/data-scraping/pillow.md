<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

# Pillow
**Pillow** is a library that provides support for opening, manipulating, and saving many different image file formats. It is often used for image processing and manipulation in web scraping applications, such as resizing or cropping images that have been scraped from a website. Pillow can be installed using pip, the Python package manager.

Examples of data that can be extracted using Pillow in web scraping:
1. **Text extraction**: Pillow can be used to extract text from images that contain text. This can be useful in cases where the data is presented as an image rather than text, such as in scanned documents or screenshots. To extract text from an image using Pillow, you can use an OCR (optical character recognition) library like PyTesseract.

2. **Image analysis**: Pillow can be used to perform image analysis tasks such as color detection, edge detection, and image segmentation. This can be useful in cases where the images contain important information that cannot be extracted using traditional web scraping methods.

3. **Image processing**: Pillow can be used to process images by resizing, cropping, and converting them to different formats. This can be useful in cases where the images need to be processed before they can be used in further analysis or visualization.

For example, let's say you are interested in scraping a website that contains images of different products, and you want to extract the product names and prices. However, the product names and prices are not displayed as text on the page, but rather as an image. You can use Pillow to extract the text from the images, and then use traditional web scraping methods to extract the other data.

Here's an example code snippet that uses Pillow and PyTesseract to extract text from an image:

```python
from PIL import Image
import pytesseract

# Open the image file
image = Image.open('product_name.png')

# Extract the text from the image
text = pytesseract.image_to_string(image)

# Print the extracted text
print(text)
``` 

In this example, we open an image file named 'product_name.png' using `Pillow's Image.open()` function. We then use PyTesseract's `image_to_string()` function to extract the text from the image. Finally, we print the extracted text.

Note that the accuracy of the text extraction using OCR libraries like PyTesseract can depend on the quality and clarity of the image. It is also important to consider any legal or ethical implications of web scraping, and to ensure that the scraping is done in compliance with the website's terms of service and any applicable laws and regulations.

## Web scraping using Pillow
Pillow is a Python library that is commonly used for image processing and manipulation, and it can be used for web scraping tasks that involve working with images. Here is a general outline of the steps you would follow to perform web scraping using Pillow:

### 1. Install Pillow
You can install Pillow using pip, the Python package manager. Open your terminal or command prompt and type: `pip install pillow`

### 2. Identify the URL of the image you want to scrape
Use a web scraping library like BeautifulSoup or Scrapy to navigate to the webpage containing the image you want to scrape, and identify the URL of the image.

### 3. Download the image using Pillow
Use the `Image` module from the Pillow library to open and download the image. Here's an example code snippet:

```python
from PIL import Image
import requests

url = "https://example.com/image.jpg"
response = requests.get(url)
img = Image.open(BytesIO(response.content))
```
In this example, we first import the `Image` module from Pillow, and the `requests` library to make HTTP requests. We then define the URL of the image we want to scrape, and use `requests.get()` to make an HTTP GET request to the URL. We pass the response content to `BytesIO` to convert it to a binary stream, and then pass the binary stream to `Image.open()` to open the image.

### 4. Manipulate the image as needed
Once the image is downloaded, you can use Pillow's image processing functions to manipulate the image as needed. For example, you could resize the image using the resize() function, or crop the image using the crop() function.

### 5. Save the manipulated image
Finally, you can use the `save()` function from the `Image` module to save the manipulated image to a file. Here's an example code snippet:

```python
img_resized = img.resize((500, 500))
img_resized.save("image_resized.jpg")
```

In this example, we resize the image to a size of 500x500 pixels, and then use the `save()` function to save the resized image to a file named *image_resized.jpg*.

Note that web scraping can have legal and ethical implications, and it is important to make sure you have permission to scrape the website and its content before doing so.

## Case Study: Google Scholar
Extracting data from Google Scholar using Pillow can be a challenging task since Google Scholar uses dynamic HTML, which means that the page source code changes frequently. However, we can extract data such as article titles and authors from the search results using Pillow. Here's a general outline of the steps you would follow to extract data from Google Scholar using Pillow:

### 1. Install Pillow
You can install Pillow using pip, the Python package manager. Open your terminal or command prompt and type: `pip install pillow`

### 2. Use requests and BeautifulSoup to extract the search results HTML
Use the requests library to make an HTTP GET request to the Google Scholar search results page, passing in your search query as a parameter. You can then use BeautifulSoup to parse the HTML and extract the search results.

```python
import requests
from bs4 import BeautifulSoup

query = "web scraping with pillow"
url = "https://scholar.google.com/scholar?q=" + query

response = requests.get(url)
soup = BeautifulSoup(response.text, "html.parser")
results = soup.find_all("div", {"class": "gs_r gs_or gs_scl"})
```

In this example, we define our search query and construct the search results URL by appending the query to the base Google Scholar search URL. We then use `requests.get()` to make an HTTP GET request to the search results URL, and parse the HTML using BeautifulSoup. We extract the search results by finding all div elements with the class `gs_r gs_or gs_scl`.

### 3. Extract the article titles and authors using Pillow
Use Pillow's image processing functions to extract the article titles and authors from the search results. Since the Google Scholar search results use dynamic HTML, the article titles and authors are rendered as images rather than text. We can use Pillow's Image module to open and process these images.

```python
from PIL import Image
from io import BytesIO

for result in results:
    title_url = result.find("h3", {"class": "gs_rt"}).find("a")["href"]
    title_img_url = result.find("h3", {"class": "gs_rt"}).find("img")["src"]
    author_img_url = result.find("div", {"class": "gs_a"}).find("img")["src"]

    title_response = requests.get(title_img_url)
    title_img = Image.open(BytesIO(title_response.content))
    title = pytesseract.image_to_string(title_img)

    author_response = requests.get(author_img_url)
    author_img = Image.open(BytesIO(author_response.content))
    author = pytesseract.image_to_string(author_img)

    print("Title:", title.strip())
    print("Author:", author.strip())
```

In this example, we iterate over each search result and extract the URLs of the article title, article title image, and author image. We use `requests.get()` to download the article title and author images, and open them using Image.open() from the `PIL` module. We then use PyTesseract, an OCR library, to extract the text from the image using `image_to_string()`. Finally, we print the extracted title and author.

Note that this is a simplified example, and there are many more details and edge cases to consider when extracting data from Google Scholar using Pillow. Additionally, web scraping can have legal and ethical implications, and it is important to make sure you have permission to scrape the website and its content before doing so.

## Storing data using MongoDB
When it comes to storing data that includes images and videos, MongoDB is a good option as it supports the storage of binary data through its Binary Data subtype. Here are the steps you can follow to store data that includes images and videos after scraping using Pillow in MongoDB:

1. Establish a connection to your MongoDB server and create a new database and collection where you will store the scraped data.

2. After scraping the data using Pillow, you can save the image or video file to a local file path.

3. Open the file and read its binary data using Python's built-in `open` function and `read` method.

4. Convert the binary data into the BSON format, which is the binary representation of JSON data used by MongoDB, using Python's built-in `bson.binary.Binary` method.

5. Create a new document object and insert it into the MongoDB collection using the `insert_one` method of the `pymongo` library. The document object should include the data fields you scraped along with the binary data of the image or video.

Here's a code example that shows how to store image and video data in MongoDB using Pillow and pymongo:

```python
import pymongo
import requests
from PIL import Image

# Connect to MongoDB server and create database and collection
client = pymongo.MongoClient('mongodb://localhost:27017/')
db = client['mydatabase']
col = db['mycollection']

# Scrape data using Pillow
url = 'https://example.com/image.jpg'
response = requests.get(url)
image = Image.open(BytesIO(response.content))

# Save image to local file path
image.save('image.jpg')

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

# Scrape video data using Pillow
url = 'https://example.com/video.mp4'
response = requests.get(url)

# Save video to local file path
with open('video.mp4', 'wb') as f:
    f.write(response.content)

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

In this example, we first establish a connection to the MongoDB server and create a new database and collection. We then use Pillow to scrape an image and save it to a local file path. We read the binary data from the file using Python's `open` function and `read` method, and then convert it to BSON format using `pymongo.binary.Binary`. We create a new document object with the scraped data fields and the binary image data, and then insert it into the MongoDB collection using `insert_one`.

We follow a similar process to scrape a video, save it to a local file path, read its binary data, convert it to BSON format, and insert it into the MongoDB collection along with the scraped data fields.

Note that storing binary data in a database can result in large file sizes and increased storage requirements, so it's important to consider the trade-offs between storing binary data in a database versus storing it on disk or in a cloud storage service.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
