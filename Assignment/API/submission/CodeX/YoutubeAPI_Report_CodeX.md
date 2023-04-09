
# Youtube API
## Part 1: Extract data from API 
### Step 1: Import libraries
The libraries involve are

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
the API key can be retrieved from the website(insert link)
```python
#insert key API
api_key = *AIzaSyDpQxJ9j8qIE6CeotHF5cyxecV8iIucGJE*
```
### Step 3: Create YouTube Data API
```python
youtube = build('youtube', 'v3', developerKey=api_key)
```

### Step 4: Search request on the YouTube Data API 
Use the search().list() method of the youtube client instance that was created in the previous code. Enter the number of output in maxResults

```python
search_response = youtube.search().list( 
	q='malaysia', 
	type='video', 
	part='id,snippet', 
	maxResults=500 ).execute()
```

### Step 5: Fetch output title, description, channel name
This will produce 500 results
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

## Part 2: Upload .csv file into MongoDB 
### Step 1: Open and connect MongoDB compass
### Step 2: Create new database
### Step 3: Add .csv file




