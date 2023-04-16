<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

# Pillow or OpenCV
Pillow and OpenCV are both popular libraries used for working with images and other multimedia content in Python, including web scraping.

1. **Pillow** is a library that provides support for opening, manipulating, and saving many different image file formats. It is often used for image processing and manipulation in web scraping applications, such as resizing or cropping images that have been scraped from a website. Pillow can be installed using pip, the Python package manager.

2. **OpenCV (Open Source Computer Vision Library)** is another library that is commonly used for image processing and computer vision tasks in Python. It provides support for image and video processing, including functions for reading, writing, and manipulating images and video files. OpenCV can also be used for tasks like object detection and recognition, which can be useful for scraping websites that contain images or videos with specific objects or patterns.

When scraping websites for images and other multimedia content, both Pillow and OpenCV can be used to download and process the data. For example, you might use Pillow to resize and save images, or use OpenCV to identify and extract specific objects from a video. These libraries can be particularly useful when working with large amounts of media content, as they can help automate many of the tedious and time-consuming tasks involved in scraping and processing multimedia data.

## Pillow
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
You can install Pillow using pip, the Python package manager. Open your terminal or command prompt and type: pip install pillow

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

In this example, we define our search query and construct the search results URL by appending the query to the base Google Scholar search URL. We then use requests.get() to make an HTTP GET request to the search results URL, and parse the HTML using BeautifulSoup. We extract the search results by finding all div elements with the class "gs_r gs_or gs_scl".

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


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
