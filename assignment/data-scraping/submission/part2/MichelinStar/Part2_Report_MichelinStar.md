<h1 align=center>Web scraping Google Scholar Content</h1>

## 1. Introduction

<p align=justify>
Web scraping is a automated data extraction process from websites using various kind of tools, libraries and softwares. Publication content is defined as the published information through mediums like academic journals, books, newspapers, websites, blogs, and etc. Thus, web scraping publication content indicates the process of extracting data from online publication sources using suitable tools. In this assignment, we will be performing web scraping publication content on Google Scholar by extracting the related data to Faculty of Computing at University of Technology Malaysia. 

The importance of web scraping publication content can be discussed from a few perpectives, including research insights, literature reviews, data-driven analysis, text mining and natural language processing, and to keep updated with latest information. 
</p>
<table>
<tr>
<td>
<b>Research insights</b>
</td>
<td>
Researchers can obtain information such as title, abstracts, keywords, authors, publication dates, and citation counts through web scraping which is significant in observing trends of emerging topics, and performing robust analysis. 
</td>
</tr>

</table>


## 2. Web Scraping Search Results from Google Scholar

<p align=justify></p>

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
