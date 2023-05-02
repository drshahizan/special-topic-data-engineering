<div align="center">
  <img src="https://user-images.githubusercontent.com/95162273/232305985-a6549da1-bbea-4658-becb-8448ae0db9f9.png" alt = "flickr logo"/>
</div>

<h1 align="center"> Web Scraping </h1>

<h2 align="center">
  Group Name
  <br>
</h2>

<p align="center">
  <a>Gadgeteen</a><br>
</p>

<h2 align="center">
  Group Members
  <br>
</h2>
<p align="center">
<table align="center">
  <tr>
    <th>Name</th>
    <th>Matric No</th>
  </tr>
  <tr>
    <th>GOO YE JUI</th>
    <th>A20EC0191</th>
  </tr>
    <tr>
    <th>KELVIN EE</th>
    <th>A20EC0195</th>
  </tr>
    <tr>
    <th>LEE MING QI</th>
    <th>A20EC0064</th>
  </tr>
    <tr>
    <th>LEE JIA XIAN</th>
    <th>A20EC0191</th>
  </tr>
    <tr>
    <th>ONG HAN WAH</th>
    <th>A20EC0129</th>
  </tr>
</table>
</p>

## Contents📝
- 📑[Report](#)
- 💻[Code](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-scraping/submission/part1/Gadgeteen/FlickrScraping.ipynb)
- 📂[CSV](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-scraping/submission/part1/Gadgeteen/flickr_scraping.csv)

## 1. Introduction

Web scraping multimedia content refers to the process of automatically extracting and collecting images, videos, audio, and other types of multimedia data from websites. This type of data can be extremely valuable for research and analysis in various fields such as computer vision, natural language processing, marketing, and social media analysis.

Web scraping multimedia content can help researchers and analysts gain insights into visual and audio trends, sentiment analysis, and image recognition. For example, marketers can use image and video data to identify popular product trends or advertising strategies. Computer vision researchers can use large amounts of image data to train and improve machine learning models. Social media analysts can use multimedia content to monitor brand mentions and public opinion on social media platforms.


## 2. Web Scraping Flickr
<a href="https://www.flickr.com/">Flickr</a> is a popular photo-sharing website and online community that provides a large collection of user-generated images and videos. 

### Why should we use Flickr?

#### a. Large collection of images
Flickr has a vast collection of user-generated images and videos, making it a great source for web scraping.

#### b. User-friendly search functionality
Flickr has a powerful search engine that allows users to search for multimedia content based on keywords, tags, dates, and more, making it easy to find relevant content for web scraping.

#### c. API access
Flickr provides an API (Application Programming Interface) that allows developers to access and interact with the site's multimedia content.

## 3. Process Of Web Scraping

#### a.Identifying the website or web page to be scraped.

#### b.Inspecting the HTML code of the webpage to understand its structure and identify the relevant data to be scraped.

#### c.Using a web scraping tool or library to extract the data from the webpage. This may involve writing code to navigate through the page's HTML structure and locate the desired data.

#### d.Parsing the data to ensure that it is in a usable format, such as a CSV or JSON file.

#### e.Storing the data in a database or other storage medium for later use or analysis. This may involve cleaning or preprocessing the data to remove any irrelevant or inaccurate information.

## 4. Storing Data in MongoDB

MongoDB is a popular NoSQL database that allows for the storage of unstructured data. In this case, we can use MongoDB to store the metadata for the images we scraped from Flickr.

#### The process for storing data in MongoDB involves the following steps:

#### a.Install the MongoDB driver for Python using pip install pymongo.

#### b.Connect to the MongoDB server using a URI string that includes the username, password, and database name.

#### c.Define the database and collection to store the data in.

#### d.Use the insert_one() or insert_many() method to insert the data into the collection.

#### e.Once the data is stored in MongoDB, we can easily query and analyze it using tools like MongoDB Compass or Python's PyMongo library.






