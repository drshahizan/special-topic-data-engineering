# Google Scholar Data Scraping 
## 1. INTRODUCTION
In this task, we are required to perform a web scraping in google scholar to collect and extract all the data from the specific search that we are required to. Web scraping is a very popular method that being used nowadays especially by many IT fields to collect the most accurate data for their different purposes. We shall be able to scrap the important publication contents such as year of publications and author to ensure data ingerity when doing any analysis or research on the collected data later on. 

## 2. Web Scraping on Google Scholar
As being mentioned above, we are required to gather the data based on specific search. Since Google Scholar is veery versatile and well-known as one of the top search engine for academic publications, it will be the best to extract from this website as the topic that we need to search is related to 'Faculty of Computing at the University of Technology Malaysia'. 

<table>
  <tr>
    <th>Metadata</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Title</td>
    <td>Title of the published paper</td>
  </tr>
  <tr>
    <td>Author</td>
    <td>Author who wrote the paper</td>
  </tr>
  <tr>
    <td>Year</td>
    <td>Year of publication</td>
  </tr>
  <tr>
    <td>Link</td>
    <td>Link of where the paper was citated</td>
  </tr>
</table>

## 3. Choosing a Library for Web Scraping
When it comes to choosing libraries for web scraping, there are way too many libraries that are able to do so and each library has their strengths and weakness. Some of the common libraries that always being used in web scraping are Scrapy, PyQuery, BeautifulSoup and Selenium.

In this assignment we choose to use SerpApi as it is an API service provider that usually used in search engine. Not only that, it also can scrapped the website functionalities which makes it more versatile.

SerpApi makes it easier to send the HTTP requests to SerpApi server which can manage to save more time as it handles the parsing search result, managing proxies and handling the complexity of captchas, makes it requires less time to get the same or even better results than using other libraries. That is why we choose to use this library.



## 4. Storing Data in MongoDB
To store data in mongodb, you need to have mongodb compass, and an account.

### Step 1: Create a connection to mongodb compas.
  ![image](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/3503f0c2-a974-4ebc-b2eb-bb12ad9cb78d)


### Step 2: Create a new database and collection. Name the database and collection appropriately.
  ![image](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/c79c181b-7407-4328-8123-507125f091ce)


### Step 3: Upload the csv file. The database will automatically be created by mongodb.
  ![image](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/68ba2a1c-a9c0-479c-a768-f4bbc186eb02)
  ![image](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/855aadc2-9e58-43e6-9110-6029c2f822ec)

