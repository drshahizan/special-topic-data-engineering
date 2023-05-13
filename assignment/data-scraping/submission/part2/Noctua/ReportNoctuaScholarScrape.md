<div align='center'><h1>Google Scholar Scraping</h1></div>

## 📖Introduction

---

In this assignment, we will be using Serp API to scrape data from Google Scholar. We will be extracting all publications from our desired author and its metadata. Let's go through some of the steps to scrape the data.

---

## 📏Steps to Scrape Data from One Author:

### Step 1 : Installing library

Using pip, install `google-search-results library`. Do as follow.

```
!pip install google-search-results
```

### Step 2: Import SERP API library.

Write the parameters that include `engine`, `author_id` and `api_key`. As for `author_id`, go to Google Scholar, search for author and copy the id at the end of the link as shown.

![image](https://user-images.githubusercontent.com/120614405/236659555-d2981462-8ab1-4ae5-aa20-7640b4af041a.png)


To obtain the `api_key`, head to https://serpapi.com/google-scholar-api and click on sign in. You will get your private API key.

![image](https://user-images.githubusercontent.com/120614405/236659436-301bc20f-3d7e-4418-b82b-03bb42d787f9.png)


```
from serpapi import GoogleSearch

params = {
  "engine": "google_scholar_author",
  "author_id": "QzgVq24AAAAJ",  #Author ID for Mohd Shahizan Othman
  "num": 100,
  "api_key": "c0eeb12894f66eb81c039cef78dcaac1b562867bf4230d226f45840c5a2fd62b"
}

search = GoogleSearch(params)
results = search.get_dict()
author = results["author"]
```

### Step 3: Appending information into a list.

The next step is to append the extracted information into a list.

```
data = []
for response in results['articles']:
    title = response['title']
    author = response['authors']
    # pub_info = response['publication_info']
    # journal = response['journal']
    year = response['year']
    citations = response['cited_by']
    
    data.append({
        'Title': title,
        'Author': author,
        # 'Publication Info': pub_info,
        # 'Journal': journal,
        'Year': year,
        'Citations': citations
    })
```

### Step 4: Convert into DataFrame.

```df = pd.DataFrame(data)
# df.to_csv('google_scholar_data.csv', index=False)
df
```

![image](https://user-images.githubusercontent.com/120614405/236659754-0950b2c0-45ff-4812-a005-932938c336de.png)

---

## 📏Steps to Scrape Data from People in an Organization:

### Step 1 : Installing library

Using pip, install `google-search-results library`. Do as follow.

```
!pip install google-search-results
```

### Step 2: Import SERP API library and write the parameters.

Write the parameters that include `engine`, `m_authors` and `api_key`. Use `google_scholar_profiles` for `engine`.

As for `m_authors`, insert the name of organizations you want the publisher's author from. In this example, we want to find all the people of Faculty of Computing in UTM.

To obtain the `api_key`, head to https://serpapi.com/google-scholar-api and click on sign in. You will get your private API key.

![image](https://user-images.githubusercontent.com/120614405/236659436-301bc20f-3d7e-4418-b82b-03bb42d787f9.png)

```
from serpapi import GoogleSearch
from urllib.parse import urlsplit, parse_qsl

params = {
  "engine": "google_scholar_profiles",
  "mauthors": "faculty of computing, universiti teknologi malaysia",
  "api_key": "c0eeb12894f66eb81c039cef78dcaac1b562867bf4230d226f45840c5a2fd62b"
}

search = GoogleSearch(params)

data = []
```
### Step 3: Appending information into a list.

The next step is to append the extracted information into a list.

```
profiles_is_present = True
while profiles_is_present:

    results = search.get_dict()
    for response in results['profiles']:
    
        data.append({
            'Name': response['name'],
            'Author ID': response['author_id'],
            'Email': response.get('email', 'N/A')
        })
   
    
    # if next page in SerpApi pagination -> update params to new a page results.
    # if no next page -> exit the while loop.
    if "next" in results.get("pagination", []):
        search.params_dict.update(dict(parse_qsl(urlsplit(results.get("pagination").get("next")).query)))
    else:
        profiles_is_present = False
```

### Step 4: Convert into DataFrame.

```
df = pd.DataFrame(data)
# df.to_csv('google_scholar_data.csv', index=False)
df
```

![image](https://user-images.githubusercontent.com/120614405/236660019-e9568185-b9b6-405a-9028-a8a45b480e75.png)

---

## 📏Steps to Scrape Data of Publications from All Authors in Organizations:

### Step 1 : Installing library

Using pip, install `google-search-results library`. Do as follow.

```
!pip install google-search-results
```

### Step 2: Import SERP API library and write the parameters.

Write the parameters that include `engine`, `m_authors` and `api_key`. Use `google_scholar` for `engine`. Do not that the `engine` parameter is different from scraping profiles.

As for `m_authors`, insert the name of organizations you want the publisher's author from. In this example, we want to find all the people of Faculty of Computing in UTM.

To obtain the `api_key`, head to https://serpapi.com/google-scholar-api and click on sign in. You will get your private API key.

![image](https://user-images.githubusercontent.com/120614405/236659436-301bc20f-3d7e-4418-b82b-03bb42d787f9.png)

```
from serpapi import GoogleSearch
from urllib.parse import urlsplit, parse_qsl

params = {
  "engine": "google_scholar",
  "q": "faculty of computing, universiti teknologi malaysia", 
  "api_key": "c0eeb12894f66eb81c039cef78dcaac1b562867bf4230d226f45840c5a2fd62b"
}

search = GoogleSearch(params)
data_foc_utm = []
```
### Step 3: Appending information into a list.

The next step is to append the extracted information into a list.

```
profiles_is_present = True
while profiles_is_present:

    results = search.get_dict()
    for response in results['organic_results']:
    
        data_foc_utm.append({
            'Title': response.get('title', 'N/A'),
            'Link': response.get('link', 'N/A'),
            'Snippet': response.get('snippet', 'N/A'),
            'Resources': response.get('resources', 'N/A'),
            'Publication Info': response.get('publication_info', 'N/A')
        })
   
    
    # if next page in SerpApi pagination -> update params to new a page results.
    # if no next page -> exit the while loop.
    if "next" in results.get("pagination", []):
        search.params_dict.update(dict(parse_qsl(urlsplit(results.get("pagination").get("next")).query)))
    else:
        profiles_is_present = False
        
#There will be error since the API key only can search up to 100 for free users
```

### Step 4: Convert into DataFrame.

```

import pandas as pd
df_gs = pd.DataFrame(data_foc_utm)
df_gs
```

![image](https://user-images.githubusercontent.com/120614405/236660193-1aba26b3-8437-41aa-adde-e069aa0ac5a6.png)

---

## Export Data into MongoDB.

### Step 1: Install `pymongo` library.

```
!pip install pymongo
from pymongo import MongoClient

```

### Step 2: Install `pyngrok` library.

```
!pip install pyngrok
```

### Step 3: Importing library and connecting to Database.

```
import pymongo

client = pymongo.MongoClient("mongodb+srv://afifhazmiearsyad:abc123456789@noctua.bw9bvzx.mongodb.net/test")
db = client['Noctua']
collection = db['Google Scholar']

data = df_gs.to_dict(orient='records')
collection.insert_many(data)
```

For more complete MongoDB documentations, refer to [our steps of connecting to MongoDB](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/API/submission/Noctua/Report_PrayerTimeAPI.md/#steps-by-step).

