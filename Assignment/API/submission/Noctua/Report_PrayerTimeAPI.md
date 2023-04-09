<div align='center'><h1>Report Prayer Time API</h1></div>


## 📖Introduction
Welcome to our group dedicated to web/app API search and data scraping from Malaysia! Our team of experts focuses on finding and prioritizing the best APIs that Malaysia has to offer. We use Python in Google Collab to scrape the data, ensuring accurate and comprehensive results. Once we have the data, we import it into mongoDB, making it easily accessible and organized for further analysis. With our specialized skills and dedication to finding the best APIs, we are committed to delivering high-quality results to meet your needs.</p>

---

## 📏Steps by step:
   
### Step 1: Finding API
> Finding a suitable web API prioritize in Malaysia which we manage to find Prayer Time API on [Prayer Time](https://aladhan.com/prayer-times-api#GetCalendar)

### Step 2: Installing libraries 

We used `Google Collab` for all the coding for easier collaboration between team members.

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
> The data that will retrieve are: `City`, `Date`, `Islamic Date`, `Fajr`, `Sunrise`, `Dhuhr`, `Asr`, `Magrib`, and `Isya`.
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

```python
! pip install pymongo
from pymongo import MongoClient
  ```
  
2) Set collection & database name according to MongoDB 

```python 

client = MongoClient('mongodb+srv://user1:60XRzCr4mubxCPC5@cluster0.evngzba.mongodb.net/test')

db = client["prayer_times_data"]
collection = db["Penang"]

```

> Collection should be change based on city prayer time.

3) Change data to dictionary

```python 

df.reset_index(inplace = True)
Data_dictionary=df.to_dict('records')

print(Data_dictionary)

   ```
   
4) Final product
  <img height='300px' src='Figures/MongoDb.jpg'/>
  
  
  
  
