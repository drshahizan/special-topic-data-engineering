<h1> Malaysia Daily Vaccination Registration API </h1>

<h2>Part 1: Retrieve Data From API & Save in CSV Format</h2>
<h3>Step 1: Import the libraries</h3>

The libraries we have used are `requests`, `json` and `pandas`

- `requests` is used to send a HTTP to server and retrieve data from it,
- `json` is used to manipulate json file,
- `pandas` is used to convert json to csv

```python
import requests
import json
import pandas as pd
```

<h3>Step 2: Fetching data using Vaccination Registration API</h3>

```python
response_API = requests.get('https://myvaccination-backend.vercel.app/api/vacc_reg')
data = response_API.text
```

<h3>Step 3: Load data in json format</h3>

```python
dic = json.loads(data)
dic = dic['modifiedData']
```

<h3>Step 4: Save in DataFrame</h3>

```python
df = pd.DataFrame(dic)
```

<h3>Step 5: Save the vaccination data to a CSV file</h3>

```python
df.to_csv('vaccination.csv',index=False)
```
<h2>Part 2: Store the CSV file in MongoDB</h2>

<h3>Step 1: Import the libraries</h3>
Install and import pymongo library to interact with the MongoDB database. csv library is used for import csv file.

```python
!pip install pymongo
import pymongo
import csv
```

<h3>Step 2: Connect to MongoDB</h3>
Create a connection to the MongoDB database using the pymongo library and MongoDB database credentials including the Mongo URI, database name and collection name.

```python
# Create a new MongoDB client
client = pymongo.MongoClient(URL)

# Select the database
db = client["<database>"]

# Select the collection
collection = db["<collection>"]
```

<h3>Step 3: Save the CSV file to MongoDB</h3>
Open the csv that created in part 1 and convert the csv file to dictionary format then use insert_one() method to insert the document into the collection of the database.

```python
# Open CSV file and read data
with open('vaccination.csv', 'r') as csvfile:
    reader = csv.DictReader(csvfile)
    # Iterate through each row of the CSV file and insert it into MongoDB
    for row in reader:
        collection.insert_one(row)
        
print('CSV data uploaded to MongoDB successfully.')
```

<h3>Step 4: Check the data in MongoDB</h3>

Open MongoDB to check whether the data is inserted or not. The image below shows the MongoDB Compass screenshot of documents successfully inserted into the collection of database.

<img width="754" alt="image" src="https://user-images.githubusercontent.com/120556342/230760001-3a5d9784-8921-444f-8360-2b50d6d84b08.png">

