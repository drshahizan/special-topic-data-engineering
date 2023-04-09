# Spotify API
## Part 1: Retrieving the data using the API
### Step 1: Importing libraries
First, we `import` the necessary library needed to start retrieving data which in this case is the `requests` library which is used for making HTTP requests. It allows the code to interact with the Spotify API to retrieve information

```python
import requests
```
### Step 2: 
## Part 2: Uploading .csv file to MongoDB
### Step 1: Install database library
This is the most significant stage since it will provide us with a list of libraries that we will need to link our database. 
```python
!pip install pymongo
from pymongo import MongoClient
```

### Step 2: Create database
In this stage, we set a new database in MongoDB Compass and name it, followed by the creation of a collection within the database.
<br>
![image](https://user-images.githubusercontent.com/95215371/230786607-e1642e27-d9f8-42c0-9773-034642a07efb.png)


### Step 3: import library and declare Variable
In this step, we import the library we just loaded and define three key variables: client (connection string), database, and collection.

```python
import pymongo
client = pymongo.MongoClient('<connection string>')
db = client['<database name>']
collection = db['<collection name>']
```

### Step 4: Insert the record into MongoDB
declare variable names based on csv table columns

```python
 # Insert the record into MongoDB
            collection.insert_one({
                'name': row['name'],
                'popularity': int(row['popularity']),
                'album': row['album'],
                'track_url': row['track_url']
            })
```

### Step 5: Check the data

![image](https://user-images.githubusercontent.com/95215371/230786861-33b004fc-a131-43ce-b937-e5cc8f2f27f3.png)
