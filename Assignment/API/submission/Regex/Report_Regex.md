<h1> Malaysia Daily Vaccination Registration API </h1>

**Step 1: Connection to the Malaysia Daily Vaccination Registration API**

```ruby
import requests
import pandas as pd

# Set the API endpoint URL
url = 'https://myvaccination-backend.vercel.app/api/vacc_reg'

# Make a GET request to the API endpoint
response = requests.get(url)

# Check if the request was successful (status code 200)
if response.status_code == 200:
    # Get the JSON data from the response
    data = response.json()
    
    # Create a Pandas dataframe from the JSON data
    df = pd.DataFrame(data)

else:
    # Print an error message if the request was unsuccessful
    print(f'Error: {response.status_code} - {response.reason}')
    
#Save data to csv
data = data['modifiedData']
df = pd.DataFrame(data)
df.to_csv('vaccination.csv')

# Install MongoDB in VSC and import necessary libraries
!pip install pymongo
import csv
import pymongo
from pymongo import MongoClient

# Connect to MongoDB
client = pymongo.MongoClient('mongodb+srv://madihahzabri:<pwd>@newcluster.rh45owl.mongodb.net/test')
db = client['vaccination']
collection = db['vaccination']

# Open CSV file and read data
with open('vaccination.csv', 'r') as csvfile:
    reader = csv.DictReader(csvfile)
    # Iterate through each row of the CSV file and insert it into MongoDB
    for row in reader:
        collection.insert_one(row)
        
print('CSV data uploaded to MongoDB successfully.')

```
