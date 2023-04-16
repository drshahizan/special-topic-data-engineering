
# Youtube Search (Malaysia) API
 API stands for Application Programming Interface. In the context of APIs, the word Application refers to any software with a distinct function. Interface can be thought of as a contract of service between two applications. This contract defines how the two communicate with each other using requests and responses. 

## Part 1: Getting API Key
### Step 1: Go to Youtube Data API websites
Go to Youtube Data API websites: https://developers.google.com/youtube/v3/

### Step 2: Click on "Guides"
![Screenshot (457)](https://user-images.githubusercontent.com/92329710/230888013-273cbf33-201e-4afc-8a9a-85a385f7ec1a.png)


### Step 3: Click on "obtain authorization credentials"
![Screenshot (458)_LI](https://user-images.githubusercontent.com/92329710/230888059-7cb675cf-09e1-49ec-a18d-05adc943b221.jpg)

### Step 4: Click on "Credentials page"
![Screenshot (459)_LI](https://user-images.githubusercontent.com/92329710/230888474-45317bcb-3449-481f-9bf2-98bc073e4709.jpg)

### Step 5: Lastly, click on "Create Credentials" and select "API key". Done!
![Screenshot (463)](https://user-images.githubusercontent.com/92329710/230888723-0e8f9b92-26c4-4ce9-a7f8-93344b5cf2ee.png)


## Part 2: Extract data from API 
### Step 1: Import libraries
We use `Google Colab` platform to execute all codes


The libraries involved are

 - **request**
 - **google-api-python-client**

```python
#import and install requests
pip install requests
import requests

#install google-api-python-client 
pip install google-api-python-client
```

### Step 2: Define the API key
API keys verify the program or application making the API call. They identify the application and ensure it has the access rights required to make the particular API call. The API key can be retrieved from the YouTube API website
```python
#insert key API
api_key = *AIzaSyDpQxJ9j8qIE6CeotHF5cyxecV8iIucGJE*
```
### Step 3: Create YouTube Data API
 allows us to easily query YouTube’s database of videos like is normally done in the search bar
```python
youtube = build('youtube', 'v3', developerKey=api_key)
```

### Step 4: Search request on the YouTube Data API 
Use the `search().list()` method of the youtube client instance that was created in the previous code. The topic searcher at `q` and since this project focused on 'Malaysia', we set "q = 'Malaysia'". `maxResults` is used to specified the number of search result per API key. It is ranged from 1 to 50, and since we want to get as much data as possible, we set it as 50.

```python
search_response = youtube.search().list( 
    q='malaysia', 
    type='video', 
    part='id,snippet', 
    maxResults=50 ).execute()
```

### Step 5: Fetch output title, description, channel name
This will produce more than 500 results
```python
for item in search_response['items']: 
    title = item['snippet']['title'] 
    description = item['snippet']['description'] 
    channel_name = item['snippet']['channelTitle'] 
    print(f'Title: {title}\nDescription: {description}\nChannel Name: {channel_name}\n')
```

### Step 6: Save in .csv file
The code section below will save output into [netflix_search_results](https://github.com/drshahizan/special-topic-data-engineering/blob/11957597cbe0d791eefc634dbe4a2b8c3b9506c3/Assignment/API/submission/CodeX/youtube_search_results.csv)
```python
with  open('Netflix_results.csv', mode='w', newline='', encoding='utf-8') as csv_file: 
    fieldnames = ['Title', 'Description', 'Channel Name'] 
    writer = csv.DictWriter(csv_file, fieldnames=fieldnames) 
    writer.writeheader() 
for item in search_response['items']:
    title = item['snippet']['title'] 
    description = item['snippet']['description'] 
    channel_name = item['snippet']['channelTitle'] 
    writer.writerow({'Title': title, 'Description': description, 'Channel Name': channel_name})
```

## Part 3: Upload .csv file into MongoDB 
### Step 1: Open and connect MongoDB compass
> Install [MongoDB Compass](https://www.mongodb.com/try/download/shell) 

Open MongoDB Compass and create `New Connection`. Insert the URL of the local host.

<img height='200px' src='https://user-images.githubusercontent.com/96984290/230783928-1fe10a85-dd6e-43b2-8397-a29c0f03658d.jpg'/>


### Step 2: Create new database
Create Database by inserting `Database Name` and `Collection Name` 

<img height='350px' src='https://user-images.githubusercontent.com/96984290/230783967-e43ebd9a-7e2d-4296-8231-5249137b2dde.jpg'/>

### Step 3: Add .csv file
In the new database created, click on `ADD DATA` and select `Import JSON or CSV file`.

<img height='150px' src='https://user-images.githubusercontent.com/96984290/230783986-27fef5d2-81b6-4ce2-8858-4f5fd721b4d1.jpg'/>


Choose the file [netflix_search_results](https://github.com/drshahizan/special-topic-data-engineering/blob/11957597cbe0d791eefc634dbe4a2b8c3b9506c3/Assignment/API/submission/CodeX/youtube_search_results.csv) 

Then, click on `Import`

<img height='300px' src='https://user-images.githubusercontent.com/96984290/230784004-63817cab-f6f0-451f-bd8f-7088bb2a6e3f.jpg'/>

A database based on the csv uploaded will be shown as below picture

<img height='300px' src='https://user-images.githubusercontent.com/96984290/230784034-2d26ea95-b369-47c2-8a21-635f9cc0689b.jpg'/>





