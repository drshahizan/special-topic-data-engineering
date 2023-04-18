## Retrieve data using API and save as .csv file
### Library used

The library we have used is `requests`, `json` and `pandas`

- `requests` is used to send a HTTP to server and retrieve data from it,
- `json` is used to manipulate json file,
- `pandas` is used to convert json to csv

```python
import requests
import json
import pandas as pd
```

### Fetching data from holidayapi using their api
```python
year = "2022"
country = "MY"
api_key = "ce9d976d-726c-4eaa-b304-07cbc741d647"
url = "https://holidayapi.com/v1/holidays?pretty&country="+country+"&year="+year+"&key="+api_key
r = requests.get(url)
```

### Getting value in json format
```python
value = r.json()
value = value['holidays']
```

### Writing data into file
```python
json_file = open("data.json", "w")
json.dump(value, json_file, indent = 6)  
json_file.close()
```

### Converting data to CSV file
```python
df = pd.read_json (r'/content/data.json')
df.to_csv (r'/content/data.csv', index = None)
```

---
There are two alternatives of importing the data to MongoDB:

## Alternative 1:
### Creating Database in MongoDB
Database is created by entering the name of the database and the name of the collection.

<div align = "center"><img width=500 height=350 src ="https://github.com/drshahizan/special-topic-data-engineering/blob/main/Assignment/API/submission/StaticIP/Create%20database.png"></div>


### Importing data to MongoDB
Data.csv file is selected to store the data in MongoDB.

<div align = "center"><img width=500 height=350 src ="https://github.com/drshahizan/special-topic-data-engineering/blob/main/Assignment/API/submission/StaticIP/Database%20in%20MongoDB.png" ></div>

## Alternative 2:
### Library used
- `pymongo` is used to interact with MongoDB database
- `csv` is used to import .csv file

```python
!pip install pymongo
import pymongo
import csv  
```  

### Connecting to MongoDB
To start connecting to the MongoDB, we must specify three things:
- Mongo URL
- Database name
- Collection name

```python
# Create a new MongoDB client
cstring = "mongodb://localhost:27017/"
client = pymongo.MongoClient(cstring)

# Select the database
db = client["StaticIP"]

# Select the collection
collection = db["MalaysiaHolidayAPI"]
```  

### Importing data to MongoDB
```python
# Open CSV file and read data
with open('/content/data.csv', 'r') as csvfile:
    reader = csv.DictReader(csvfile)
    # Iterate through each row of the CSV file and insert it into MongoDB
    for row in reader:
        collection.insert_one(row)
```
