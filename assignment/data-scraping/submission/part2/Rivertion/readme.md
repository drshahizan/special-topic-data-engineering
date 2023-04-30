
<h1 align='center'>🎓 Web Scraping Google Scholar using SerpAPI</h1>
<table align='center'>
  <tr>
    <th>Name</th>
    <th>Matric</th>
  </tr>
  <tr>
    <td>ADAM WAFII BIN AZUAR</td>
    <td>A20EC0003</td>
  </tr>
  <tr>
    <td>AHMAD MUHAIMIN BIN AHMAD HAMBALI</td>
    <td>A20EC0006</td>
  </tr>
    <tr>
    <td>FARAH IRDINA BINTI AHMAD BAHARUDIN</td>
    <td>A20EC0035</td>
  </tr>
    <tr>
    <td>MUHAMMAD DINIE HAZIM BIN AZALI</td>
    <td>A20EC0084</td>
  </tr>
  <tr>
    <td>MIKHEL ADAM BIN MUHAMMAD EZRIN</td>
    <td>A20EC0237</td>
  </tr>
</table>

## 1. Introduction

Web scraping is the process of extracting data from websites, and it has become increasingly popular for research and analysis purposes. One type of data that is particularly valuable is publication content, as it provides insights into academic research and trends. In this assignment, we will explore web scraping publication content from a relevant website, such as Google Scholar.

## 2. Web Scraping Google Scholar

Google Scholar is a popular search engine for academic publications, making it an excellent source for web scraping data related to the Faculty of Computing at Universiti Teknologi Malaysia. To scrape data from Google Scholar, we used Python and several libraries, including [google-search-results](https://pypi.org/project/google-search-results/) and [SerpAPI](https://serpapi.com/search-api). A challenge that we've encountered is that there are lots of metadata hidden which are not scrapable at the moment using SerpAPI.

## 3. Choosing a Library for Web Scraping

There are several libraries available for web scraping publication content, including Beautiful Soup, Scrapy, and Selenium. We chose to use SerpAPI because it's very intuitive and user friendly and overall is alot easier to use than the other libraries since there are alot of built-in functions that are readily available to us.

SerpApi is a third-party tool that provides a simplified way to extract search engine results pages (SERPs) and other data from Google, Bing, Yahoo, Baidu, and other search engines. Here are some of the benefits of using SerpApi for web scraping:

1.  Easy to Use: SerpApi provides an easy-to-use API that requires no setup or configuration, making it accessible to both experienced and novice users.
    
2.  Saves Time and Effort: With SerpApi, you can retrieve search results and other data with just a few lines of code, which saves you time and effort compared to manually scraping web pages.
    
3.  Reliable and Scalable: SerpApi uses smart algorithms to bypass search engine blocks and provides a reliable and scalable solution for scraping search engines, reducing the risk of getting blocked or flagged.
    
4.  Handles Captchas: SerpApi automatically handles CAPTCHAs and other anti-scraping measures, making it easier to scrape search engines without getting blocked.
    
5.  Cost-Effective: SerpApi offers affordable pricing plans that suit both small-scale and enterprise-level web scraping needs, which can help you save on infrastructure and development costs.
    

Overall, SerpApi is a reliable and user-friendly solution for scraping search engines that can save you time, effort, and costs while providing a scalable and reliable way to extract data from search engines.
## 4. Storing Data in MongoDB
Once we have scraped the data we wanted, we stored it in MongoDB using the [pymongo](https://pymongo.readthedocs.io/en/stable/) library. The steps to do so are as follows.

 1. Install pymongo library and import a few modules

```python
!pip install pymongo
from pymongo import MongoClient
from pymongo.mongo_client import MongoClient
from pymongo.server_api import ServerApi
```

 2. Test the connection to see if Google Colab can connect to the database
```python
uri = "mongodb+srv://mikhel:admin@cluster0.kwav8pt.mongodb.net/?retryWrites=true&w=majority"
# Create a new client and connect to the server
client = MongoClient(uri, server_api=ServerApi('1'))
# Send a ping to confirm a successful connection
try:
client.admin.command('ping')
print("Pinged your deployment. You successfully connected to MongoDB!")
except Exception as e:
print(e)
```
3. Finally, upload the data to the database by using the code below
```python
# Connect to MongoDB

client = pymongo.MongoClient('mongodb+srv://mikhel:admin@cluster0.kwav8pt.mongodb.net/test')
db = client['GoogleScholar']
collection = db['FacultyOfComputingUTM']
data = df_foc_utm.to_dict(orient='records')
collection.insert_many(data)
```

## 5. Conclusion
In conclusion, we successfully managed to use SerpAPI to web scrape Google Scholar with the search query "faculty of computing, universiti teknologi malaysia" and save the results to MongoDB. 

Web scraping publication content is important for data analysis as it provides a way to extract large amounts of data quickly and easily. This data can then be used to identify trends, patterns, and insights that can inform decision-making and research.

Given the constraints we had when completing this assignment, we still managed to scrape relevant data needed for this task. However, moving forward, there are several suggestions for future research or analysis using the data set obtained from Google Scholar. For example, we could explore the most cited authors and publications in the field of computing at Universiti Teknologi Malaysia, or analyze the topics and themes of the publications to identify areas of research that are currently receiving the most attention. Additionally, we could compare the research output of the Faculty of Computing at Universiti Teknologi Malaysia to other institutions in the region to identify strengths and weaknesses in research capacity. Overall, there is a wealth of information that can be extracted from web scraping publication content, and this data can provide valuable insights for researchers and decision-makers alike. 
