# Report: Malaysia News API Report
## Introduction

The purpose of this report is to document the process of extracting data from an Application Programming Interface (API) using a client library (SDK) and subsequently storing the data in a CSV file. The extracted data will then be uploaded into a MongoDB database for further analysis and utilization. In addition, the primary goal of this project is to demonstrate the retrieval of data from a Malaysia News API using a client library. The data obtained from the API will be saved into a CSV file, providing a structured format for easy storage and analysis. Additionally, the report will cover the steps involved in uploading the CSV data into a MongoDB database, enabling efficient querying and manipulation of the dataset.

## Step by Step

<h3>Step 1: Get API key</h3>
We're interested in extracting Malaysia Today's News, hence we make use of the News API. This API extracts the news from Google News and we obtained the API key upon registering to the platform. 

<br>
<blockquote>Registration complete

Your API key is: 83bd643d7f9a468dabb080d927f260b3</blockquote>

<h3>Step 2: Choose Client Library</h3>
Since we have experiences in writing Python, we thought it would be easier to use Python for our client library (SDK). SDK helps us to quickly and easily get started with News API without having to make HTTP requests directly. To celebrate the collaboration within team members, we use Google Colab.

<h3>Step 3: Code</h3>

1. Import libraries
```python
import requests
import csv
from newsapi import NewsApiClient
```
2. Install News API package
```python
pip install newsapi-python
```
3. Fetch data from News API
```python
url = ('https://newsapi.org/v2/top-headlines?country=my&apiKey=83bd643d7f9a468dabb080d927f260b3')
response = requests.get(url)
```
4. Save data to csv
```python
with open('/content/drive/MyDrive/news.csv', mode='w', newline='', encoding='utf-8') as file:
    writer = csv.writer(file)
    writer.writerow(['ID','Name', 'Author', 'Title', 'Description', 'URL', 'URL To Image', 'Published At', 'Content'])
    for article in data['articles']:
        writer.writerow([article['source']['id'], article['source']['name'], article['author'], article['title'], article['description'], article['url'], article['urlToImage'], article['publishedAt'], article['content']])
```

<h3>Step 4: Import Data to MongoDB</h3>

  1. Connect to database using MongoDB Compass.
  <div align = "center"><img width="600" alt="image" src="https://user-images.githubusercontent.com/73205963/230782197-8a34f52b-aa10-47ca-9111-245598606798.png"></div>

  3. Add data through csv.
<div align = "center"><img width="595" alt="image" src="https://user-images.githubusercontent.com/73205963/230782131-a5158ca4-f124-4f20-b40e-da1f35e934fb.png"></div>


  4. Output shown as below.

<div align = "center"><img width=600 height=300 src ="https://github.com/drshahizan/special-topic-data-engineering/blob/907c6ec43fc98feb2bb4319979d3ab820538a071/Assignment/API/submission/DataAce/mongodb.png" ></div>




