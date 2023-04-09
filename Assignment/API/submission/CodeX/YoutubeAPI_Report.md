
# Youtube API
## Part 1: Extract data from API 
### Step 1: Import libraries
The libraries involve are

 - **request**
 - **google-api-python-client**

### Step 2: Define the API key
```python
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
```python
with  open('search_results.csv', mode='w', newline='', encoding='utf-8') as csv_file: 
	fieldnames = ['Title', 'Description', 'Channel Name'] 
	writer = csv.DictWriter(csv_file, fieldnames=fieldnames) 
	writer.writeheader() 
for item in search_response['items']:
	title = item['snippet']['title'] 
	description = item['snippet']['description'] 
	channel_name = item['snippet']['channelTitle'] 
	writer.writerow({'Title': title, 'Description': description, 'Channel Name': channel_name})
```






