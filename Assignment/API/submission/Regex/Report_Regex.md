<h1> Malaysia Daily Vaccination Registration API </h1>

<h2>Retrieve Data From API & Save in CSV Format</h2>
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
<h2>Store the CSV file in MongoDB</h2>
<h3>Step 1: Import the libraries</h3>

```python
!pip install pymongo
import pymongo
import csv
```

<h3>Step 2: Connect to MongoDB</h3>

```python
# Create a new MongoDB client
client = pymongo.MongoClient(URL)

# Select the database
db = client["<database>"]

# Select the collection
collection = db["<collection>"]
```

<h3>Step 3: Save the CSV file to MongoDB</h3>

```python
# Open CSV file and read data
with open('vaccination.csv', 'r') as csvfile:
    reader = csv.DictReader(csvfile)
    # Iterate through each row of the CSV file and insert it into MongoDB
    for row in reader:
        collection.insert_one(row)
        
print('CSV data uploaded to MongoDB successfully.')
```
