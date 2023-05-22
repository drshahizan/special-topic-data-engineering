<h1 align=center>Web scraping Malaysia Photo Collection</h1>

## 1. Introduction

<p align=justify>Multimedia web scraping is a sophisticated procedure of extracting different forms of multimedia data from various websites. This method incorporates the procurement of images, videos, audio files, and animations, amplifying the dimensions and volume of information available for exploration and analysis. Such data is widely utilized across an array of sectors such as media research, digital marketing, social media analytics, and artificial intelligence. The rich and diverse nature of multimedia data supersedes the conventional text-based data, offering deeper and more intricate insights into areas like consumer behavior, sentiment analysis, and brand visibility. Moreover, in the realm of machine learning, multimedia data serves as a valuable resource for training models specializing in image and speech recognition, as well as natural language processing. This signifies the pivotal role multimedia web scraping plays in enhancing the breadth and depth of research and analysis, thereby yielding more comprehensive and insightful outcomes.</p>

## 2. Web Scraping Multimedia Content from Flickr

<p align=justify>Among the multitude of online platforms, Flickr stands out as a rich repository of multimedia content. It boasts over 100 million active users and houses billions of photos and videos, making it an alluring destination for data researchers and analysts. Flickr is celebrated for its vast collection of high-resolution images and videos, a majority of which are conveniently available under the Creative Commons license, thereby making them accessible for research and analytical purposes. Further, Flickr is equipped with an advanced search engine that allows users to effortlessly locate relevant content using tags, keywords, and various other filtering criteria. It is noteworthy that the platform also provides metadata, inclusive of details such as the timestamp, geographical coordinates of the content capture, and even the type of camera utilized. This valuable information enriches the potential of multimedia data for in-depth research and analysis.</p>

<h4> Web Scraping Process </h4>

1. Import all neccesary libraries

<div align="center">
  <img src="https://github.com/drshahizan/special-topic-data-engineering/assets/95403713/f5e361c7-fa79-4c35-ba07-46c37cf3600c">
</div></br>

2. Set up the Flickr API key and secret

<div align="center">
  <img src="https://github.com/drshahizan/special-topic-data-engineering/assets/95403713/8b8bd541-8f78-4f28-ad0c-48db1520a207">
</div></br>

The following explanation discusses our group's interaction with the Flickr API. It involves two key components - the API key and secret. It's crucial to note that our group had to obtain our unique API key and secret from Flickr's App Garden. With the two lines of code, we're authenticating our group's identity with the Flickr API by defining our shared 'api_key' and 'api_secret'. These are unique to each user and serve as our credentials for accessing Flickr's data.

3. Establish the Flickr API client

<div align="center">
  <img src="https://github.com/drshahizan/special-topic-data-engineering/assets/95403713/8f2ab77b-d7d6-4775-94d4-1ddf4824293e">
</div></br>

This line of code sets up the Flickr API client with our group's provided credentials (api_key and api_secret) and also sets the response format. Here, 'parsed-json' signifies that the data we receive from the Flickr API will be in a parsed JSON format, converted into a Python dictionary. This makes the returned data easier for us to manipulate and analyze within our Python environment.

4. Set up Search Parameter

<div align="center">
  <img src="https://github.com/drshahizan/special-topic-data-engineering/assets/95403713/139449a4-a0fc-4b13-86ec-4bb12ca12b15">
</div></br>

 We sets up specific search parameters to guide our interaction with the Flickr API, refining the data we aim to gather.In the above snippet of code, we're specifying the criteria to guide our data extraction from the Flickr API. We're seeking photos related to 'Malaysia', restricting the media type to 'photos', and limiting the search to the 100 most relevant results. Moreover, we're requesting additional metadata including the original URL, description, tags, date taken, owner's name, view count, number of favorites, and count of comments.

5. Conduct the search and download the photos

<div align="center">
  <img src="https://github.com/drshahizan/special-topic-data-engineering/assets/95403713/40c7e3e7-2ae8-491c-ac21-f3e93e2835b0">
</div></br>

Here, our group executes the search operation with our defined parameters and retrieves the photos matching our criteria. The search results are stored in the 'photos' variable for subsequent analysis and processing.

6. Save the CSV file

<div align="center">
  <img src="https://github.com/drshahizan/special-topic-data-engineering/assets/95403713/5a041e4e-68c7-4e63-9010-a106e3344f40">
</div></br>

Then, we write the writes the metadata of the downloaded photos, including <b> photo ID, title, description, tags, date taken, owner name, views, favorite count, and comment count</b>, to a CSV file named 'photos_metadata.csv'.

## 3.  Choosing a Library for Web Scraping

In our web scraping project, we have chosen to utilize the following libraries:

<table>
  <tr>
    <th>Library</th>
    <th>Purpose</th>
  </tr>
  <tr>
    <td>flickrapi</td>
    <td>Interact with the Flickr API, search for photos, retrieve metadata, and more</td>
  </tr>
  <tr>
    <td>urllib.request</td>
    <td>Handle downloading of images from URLs</td>
  </tr>
  <tr>
    <td>csv</td>
    <td>Manage CSV files, write metadata to CSV format</td>
  </tr>
</table>

These libraries play essential roles in your web scraping project, enabling functionalities such as connecting to the Flickr API, retrieving image URLs, downloading images, and managing data in CSV format.

## 4.  Storing Data in MongoDB

In our web scraping project, we have selected MongoDB as the data storage solution because its flexible schemaless structure accommodates the evolving nature of scraped data, its scalability ensures efficient handling of large datasets, its robust querying capabilities support complex analysis requirements, its seamless integration with Python facilitates smooth data processing, and its JSON-like document storage aligns well with the structure of our scraped data.

## 5.  Conclusion

In conclusion, our web scraping project utilizing the Flickr API and MongoDB as the data storage solution has provided valuable insights and learning opportunities. Through web scraping, we were able to extract and analyze a vast amount of multimedia data, including images and metadata, from Flickr. This allowed us to gain insights into various research areas such as media studies, marketing, and social media analysis. By employing MongoDB, we learned the benefits of a flexible and scalable NoSQL database for storing and querying scraped data. The project enhanced our understanding of data extraction, manipulation, and analysis, and highlighted the importance of choosing appropriate tools and technologies to effectively manage and derive insights from large datasets.
