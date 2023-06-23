<h1> Malaysia Daily Vaccination Registration API </h1>

- [Part 1: Retrieve Data From API & Save in CSV Format](#part-1-retrieve-data-from-api-and-save-in-csv-format)
- [Part 2: Store the CSV file in MongoDB](#part-2-store-the-csv-file-in-mongodb)

<h2>Part 1: Retrieve Data From API and Save in CSV Format</h2>
In this section, we will gather vaccination registration data through an API provided by Postman MyVaccination Backend APIs and store it in CSV format.

<h3>Step 1: Import the libraries</h3>

The libraries used are `requests`, `json` and `pandas`

- `requests` is used to send a HTTP to server and retrieve data from it,
- `json` is used to manipulate json file,
- `pandas` is used to convert json to csv

```python
import requests
import json
import pandas as pd
```

<h3>Step 2: Fetching data using Vaccination Registration API</h3>

The library `requests` has provided a simple API for interacting with HTTP operations, and the result stored in the data variable.

```python
response_API = requests.get('https://myvaccination-backend.vercel.app/api/vacc_reg')
data = response_API.text
```

<h3>Step 3: Load data in json format</h3>

The next step in the process is to convert and decode the extracted data into the appropriate JSON format. This will ensure that the data is easily readable and usable by any relevant systems or applications. It is important to carefully follow the steps for conversion and decoding in order to avoid any errors or inaccuracies in the final output.
```python
dic = json.loads(data)
dic = dic['modifiedData']
```

<h3>Step 4: Save in DataFrame</h3>

The json file is then saved in DataFrame.

```python
df = pd.DataFrame(dic)
```

<img width="501" alt="image" src="https://user-images.githubusercontent.com/120556342/230760807-78077e69-f464-4273-9e2d-d1755fe41628.png">


<h3>Step 5: Save the vaccination data to a CSV file</h3>

The last step is save the vaccination data to a CSV file. 

```python
df.to_csv('vaccination.csv',index=False)
```
<h2>Part 2: Store the CSV file in MongoDB</h2>
In this part, the steps to store CSV files in MongoDB will be shown.

<h3>Step 1: Import the libraries</h3>
In order to effectively interface with the MongoDB database, it is imperative to first install and import the pymongo library. Furthermore, the csv library is utilized to facilitate the importation of CSV files.

```python
!pip install pymongo
import pymongo
import csv
```

<h3>Step 2: Connect to MongoDB</h3>
To establish a link with the MongoDB database, utilize the pymongo library along with the appropriate credentials such as the Mongo URI, database name, and collection name.

```python
# Create a new MongoDB client
client = pymongo.MongoClient(URL)

# Select the database
db = client["<database>"]

# Select the collection
collection = db["<collection>"]
```
> How to get mongo URL❓<br><br>1. Go to the MongoDB Atlas dashboard (https://cloud.mongodb.com/).<br>2. Click the "Database" option in the left-hand menu.<br>3. Find the desired Cluster and click the "Connect" button.<br>4. Select "Connect Your Application" in the Connection Methods tab.<br>5. Choose your driver and version.<br>6. Add connection string into application code.

<h3>Step 3: Save the CSV file to MongoDB</h3>
Open the CSV file created in part 1 and convert it to dictionary format. Then, use the insert_one() method to insert the document into the database's collection.

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
Open MongoDB to verify if the data has been successfully inserted. The MongoDB Compass screenshot below displays the documents that have been inserted into the database collection.

<img width="754" alt="image" src="https://user-images.githubusercontent.com/120556342/230760001-3a5d9784-8921-444f-8360-2b50d6d84b08.png">
