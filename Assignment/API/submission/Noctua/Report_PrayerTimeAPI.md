<div align='center'><h1>Report Prayer Time API</h1></div>


## 📖Introduction

---

Welcome to our group dedicated to web/app API search and data scraping from Malaysia! Our team of experts focuses on finding and prioritizing the best APIs that Malaysia has to offer. We use Python in Google Collab to scrape the data, ensuring accurate and comprehensive results. Once we have the data, we then import it into mongoDB, making it easily accessible and organized for further analysis. With our specialized skills and dedication to find the best APIs, we are committed to deliver high-quality results to meet your needs.</p>

## 📏Steps by step:

---
   
### Step 1: Finding API

> Finding a suitable web API prioritize in Malaysia which we manage to find Prayer Time API on [Prayer Time](https://aladhan.com/prayer-times-api#GetCalendar)

The Prayer Time API on GitHub is a RESTful API that provides accurate prayer times for various Malaysian cities. The API is based on the calculation methods of the Islamic University, Karachi, and is updated daily. The API is open-source and available on GitHub, which eases access and usage.

### Step 2: Installing libraries 

Google Colaboratory (also known as `Google Colab`) is a free online platform provided by Google that allows users to write and execute Python code in a web browser. It is a popular tool for collaborative coding, as multiple users can work on the same code simultaneously and see each other's changes in real-time.

We import some useful libraries including `requests`, `json`, `pandas` and `files`

<dl>
  <dt> requests library</dt>
  <dd>Python library used for making HTTP requests. The library is useful when we want to interact with web APIs. It allows us to make HTTP requests and receive responses from APIs. .</dd>

  <dt> json library  </dt>
  <dd>Provides methods to parse JSON data and convert Python objects into JSON data. In Google Colab, the JSON library can be used to parse JSON data received from web APIs and convert it into Python objects such as lists or dictionaries.</dd>
   
  <dt> pandas library   </dt>
  <dd>Python library used for data manipulation and analysis. In Google Colab, the pandas library can be used to load data from CSV files or JSON data received from web APIs, manipulate the data, and analyze it to gain insights or make decisions.</dd>

  <dt> files library   </dt>
  <dd>The `google.colab` module provides a files module which allows us to interact with local files on the user's computer. The files module provides methods for uploading and downloading files to and from the Colab environment. This library is useful when we want to load data from the user's computer or save data to the user's computer.</dd>
</dl>

By importing these libraries in our Google Colab notebook, we can leverage the functionality provided by these libraries to perform various tasks in our project, such as making HTTP requests to web APIs, parsing JSON data, manipulating and analyzing data using Pandas, and uploading or downloading files using the files library. These libraries can significantly simplify our coding process and allow us to achieve our goals faster and with greater efficiency.

```python
import requests
import json
import pandas as pd
from google.colab import files
  ```
  
> We import files from google colab because the API that we used need to receive an input about the City/District prayer times that we need.

```
city = input("Enter your city: ")

  ```
In google colab:

<img src='Figures/City Input.jpg'/>

### Step 3: Create URL for prayer time API

```python

url = "http://api.aladhan.com/v1/calendarByCity/2023?city="+ city + "&country=Malaysia&method=11"
response = requests.get(url)
data = response.json()

  ```
  
### Step 4: Retrieve/Fetch/Request Data
> The data that will be retrieved are: `City`, `Date`, `Islamic Date`, `Fajr`, `Sunrise`, `Dhuhr`, `Asr`, `Magrib`, and `Isya`.
```python

month_count = 1
rows = []

while month_count <= len(data["data"]):
    for day in data['data']["%s" % month_count]:
        date = day['date']['readable']
        islamicdate = day['date']['hijri']['date']
        fajr = day['timings']['Fajr']
        sunrise = day['timings']['Sunrise']
        dhuhr = day['timings']['Dhuhr']
        asr = day['timings']['Asr']
        maghrib = day['timings']['Maghrib']
        isha = day['timings']['Isha']
        
    month_count += 1

  ```
 > Change the index name for each data to put into row
  
 ```python
 
 row = {'City': city, 'Date': date, 'Islamic Date': islamicdate, 'Subuh': fajr, 'Syuruk': sunrise, 'Zohor': dhuhr, 'Asar': asr, 'Maghrib': maghrib, 'Isya': isha}
 rows.append(row)
  ```
  
### Step 5: Insert data into dataframe.

  ```python
  
  df = pd.DataFrame(rows, columns=['City', 'Date', 'Islamic Date', 'Subuh', 'Syuruk', 'Zohor', 'Asar', 'Maghrib', 'Isya'])
  
   ```
   
 ### Step 6: Convert, Export & Download data. 
 
 ```python
 print(df)

df.to_csv('Waktu_Solat_'+ city + '.csv', index=False)
files.download('Waktu_Solat_'+ city + '.csv')
 
  ```
  
### Step 7: Export to MongoDB
1) Install & import pymongo

PyMongo is a Python library that provides tools for working with MongoDB databases. It is essential for accessing and manipulating data stored in a MongoDB database using Python. To install PyMongo in Google Colab, we can simply use the following command:

```python
! pip install pymongo
from pymongo import MongoClient
  ```
  
2) Set collection & database name according to MongoDB

The `MongoClient` class in PyMongo is used to establish a connection to a MongoDB instance or cluster. Once a connection is established, we can use the client object to perform operations on the MongoDB database. In the context of Google Colab, we can use the MongoClient class to connect to a MongoDB instance hosted on a remote server.

```python 
# Create a Mongo DB client
client = MongoClient('mongodb+srv://user1:60XRzCr4mubxCPC5@cluster0.evngzba.mongodb.net/test')

# Select the existing database to store the csv files
db = client["prayer_times_data"]

# Select the existing database collection to group the csv files
collection = db["Penang"]
```

> Collection should be change based on city prayer time.

3) Change data to dictionary

```python 

df.reset_index(inplace = True)
Data_dictionary=df.to_dict('records')

print(Data_dictionary)

   ```
4) Insert data into collection made in MongoDB.

``` python
collection.insert_many(data)
```
   
5) Final product in MongoDB Compass and Atlas.


   <img height='300px' src='Figures/MongoDBCompass.png'/>
   <img height='300px' src='Figures/MongoDb.jpg'/>
  
  
  
  
