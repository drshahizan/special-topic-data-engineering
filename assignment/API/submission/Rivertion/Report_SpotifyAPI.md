# Spotify API

## Part 1: Retrieving the data using the API

### Step 1: Importing libraries
First, we `import` the necessary library needed to start retrieving data which in this case is the `requests` library which is used for making HTTP requests. It allows the code to interact with the Spotify API to retrieve information

```python
import requests
```

### Step 2: Getting access token from Spotify API
Next, to use the Spotify API, we need to authenticate the requests by providing an access token. This access token is a credential that will be used to access the Spotify API. To get this access token, we need to insert client_id and client_secret which we can get from Spotify web developer into the coding below.

![WhatsApp Image 2023-04-10 at 12 25 46 AM](https://user-images.githubusercontent.com/95232008/230788934-320de1b1-4737-42a4-bb7d-42b9e1d80d4a.jpeg)


```python
url = 'https://accounts.spotify.com/api/token'
data = {
    'grant_type': 'client_credentials',
    'client_id': '39d34046ceb846029127453746e14629',
    'client_secret': 'c263ba986458411fbd24c41fd3b504e3'
}
headers = {
    'Content-Type': 'application/x-www-form-urlencoded'
}

response = requests.post(url, data=data, headers=headers)

print(response.json())
```

### Step 3: Getting top track's data from Spotify
Here, we use Taylor Swift as our artist to get her top track. First, enter 'Taylor Swift' as the artist, then enter access token and token type as its authorization.

```python
url = 'https://api.spotify.com/v1/search?type=track&q=artist:Taylor Swift'
headers = {
    'Authorization': 'Bearer BQCg1QL1zKvt741T7kDn93tECz4IxaIzKqbbFZJg7CByhk9bc8an4mlwDYCdyOKxtUPCLCZFWTluCO3OYSOLVsAB-FanoEFPgf5qsgrHs6PTW4SKUQd5'
}

response = requests.get(url, headers=headers)

data=response.json()

print(data)
```

### Step 4: Saving as csv file
Lastly, with all the data that we got, we need to save it as csv file so that we can upload it into MongoDB. We have narrowed down the data that we want to keep which are name, popularity, album_name and track_url.

```python
with open('/content/drive/MyDrive/Taylor_Swift.csv', 'w', newline='', encoding='utf-8') as csvfile:
    writer = csv.writer(csvfile)
    # Write the header row
    writer.writerow(['name', 'popularity', 'album', 'track_url'])
    # Write each track to a new row
    for track in data['tracks']['items']:
        name = track['name']
        popularity = track['popularity']
        album_name = track['album']['name']
        track_url = track['external_urls']['spotify']
        writer.writerow([name, popularity, album_name, track_url])

print('Taylor_Swift.csv')
```


## Part 2: Uploading .csv file to MongoDB
### Step 1: Install database library
This is the most significant stage since it will provide us with a list of libraries that we will need to link our database. 
```python
!pip install pymongo
from pymongo import MongoClient
```

### Step 2: Create database
In this stage, we set a new database in MongoDB Compass and name it, followed by the creation of a collection within the database.
<br/>

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
Open MongoDB to see if the data has been added. The snapshot below displays a MongoDB Compass screenshot of documents successfully added into a database collection.

![image](https://user-images.githubusercontent.com/95215371/230786861-33b004fc-a131-43ce-b937-e5cc8f2f27f3.png)
