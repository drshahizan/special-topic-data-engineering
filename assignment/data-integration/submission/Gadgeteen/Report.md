# Report: Data Integration in Data Science Using Azure Data Factory

## Steps:

### 1. Identify three different data sources
In this assignment, we have identified 3 different data sources about ChatGPT. The data sources are:-

1. chatgpt_malaysia_facebook.csv

    The dataset contains ``` 'post_url', 'text', 'time', 'likes_count', 'shares_count', 'comments_count', 'full_comments' ```. This dataset is scraped using <b>facebook_scraper</b> with the following code:

```python 
# call Class from library
from facebook_scraper import FacebookScraper
import pandas as pd

# Create a class object
my_scrapy = FacebookScraper()

# login on facebook
my_scrapy.login(email="<your_email>", password="<your_password>")
scraped_pages = []

# now we do not have problems to get posts from "reidandtaylor"
posts_bk = my_scrapy.get_posts(1869486946739852,group="chatgptmalaysiagroup",pages=100,cookies="cookies.json",options={"comments": True})

#chatgptmalaysiagroup
#1869486946739852

i = 0
for post in posts_bk:
    if i<100:
        scraped_url = post['links'][0]
        scraped_content = post['text']
        scraped_time = post['time']
        scraped_likes = post['likes']
        scraped_shares = post['shares']
        scraped_comments_count = post['comments']
        scraped_comments = post['comments_full']

        scraped_pages.append([scraped_url, scraped_content, str(scraped_time), scraped_likes, scraped_shares, scraped_comments_count,scraped_comments ])
        i = i+1
    else:
        break

df = pd.DataFrame(scraped_pages, columns=['post_url', 'text','time','likes_count','shares_count','comments_count','full_comments'])
#print(df)


# to save to csv
df.to_csv('chatgpt_malaysia_facebook.csv')
```

2. chatgpt-reddit-comments.csv

    This dataset is downloaded from kaggle uploaded by ARMITA RAZAVI at https://www.kaggle.com/datasets/armitaraz/chatgpt-reddit. This dataset contains  50K comments on Reddit website regarding ChatGPT. This data includes ``` comment_id, comment_parent_id, comment_body and subreddit ```

3. chatgpt_twitter.csv

    This dataset is downloaded from kaggle uploaded by MUHAMMAD TARIQ at https://www.kaggle.com/datasets/tariqsays/chatgpt-twitter-dataset. This dataset contains a collection of tweets with the hashtag #chatgpt. This data includes ``` Tweet text, User information (username, user ID, location, etc.), Tweet timestamp, Retweet and favorite count, Hashtags used in the tweet, and URLs ```

    These datasets are relevant because we want to analyze sentiment of ChatGPT users.

### 2. Develop a plan for integrating data sources
We will be handling missing or incomplete data using Alteryx Designer.

**Example:**<br>
We will need to handle cases where likes_count/share_count is missing from the data sources. To do this, we will use data imputation techniques to fill in missing values with the average value using the Data Imputation Tool in Alteryx Designer.
<br>
https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/f3a63977-e6de-46ce-88ab-6bd75aba29cb



### 3. Implement your data integration plan
We have decided to pick Azure Data Factory as our ETL tool for loading data from each data source and mapping the data onto a common schema.

#### 1. Create and Setup Data Factory
Go to [Azure Data Factory Portal](https://portal.azure.com/#home) > Create a Resource > Select Data Factory > Review & create. A data factory will be created once all the required fields (Subscriptions, Resource group, Name and Region) are filled in. 
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/04afa6ea-ac5f-4522-a275-bd4b89392d14)

#### 2. Create and Setup Azure SQL Database and Server
Go to [Azure Data Factory Portal](https://portal.azure.com/#home) > Create a Resource > Select SQL Database > Review & create. A server must be created for the database. It can be create when you are creating the SQL database by clicking on Create New

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/337c06cc-c86b-41bd-af56-7d6f3d4af43b)
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/4054f9cd-ee03-408b-a70a-e0aed9145a3b)

#### 3. Create Storage Account
Go to [Azure Data Factory Portal](https://portal.azure.com/#home) > Storage accounts > + Create > Review & create. A storage account will be created once all the required fields (Subscriptions, Resource group, Name, Region, Redundancy and Performance) are filled in. 
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/58307867-00ab-4e14-a4a7-bae8d214e826)

#### 4. Create Container to upload files
Select the storage account that you have just created > Containers > + Container
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/c06d8914-1bb0-4bb5-94a1-67fa717c0ac1)

After creating a container, select the container > upload files
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/23049ebf-a5c1-4c9a-b34d-b4603d9e65aa)

#### 5. Create New Table (Azure SQL Database)
Go to [Azure Data Factory Portal](https://portal.azure.com/#home) > Select your SQL database that you have created (Under Resources pane) > Query editor.
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/75134063-9878-4a50-8c63-21eda1408754)

Code for creating dbo.twitter
```
CREATE TABLE twitter(
	date_time datetime,
	tweet_id varchar(30),
	tweet_text varchar(8000),
	username varchar(100),
	permalink varchar(300),
	tweet_user varchar(300),
	reply_count int,
	retweet_count int,
	like_count bigint,
	quote_count varchar,
	conversational_id varchar(30),
	tweet_language varchar(5),
	tweet_source varchar(500),
	media varchar(500),
	quoted_tweet varchar(8000),
	mentioned_user varchar(500),
	hashtag varchar(500),
	hashtag_count bigint,
)
```
Code for creating dbo.reddit
```
CREATE TABLE reddit(
	row_number int,
	comment_id varchar(20),
	comment_parent_id varchar(20),
	comment_body VARCHAR(8000),
	subreddit varchar(30)
)
```
Code for creating dbo.facebook
```
CREATE TABLE facebook(
	post_url varchar(500),
	text varchar(8000),
	post_time datetime,
	likes_count int,
	shares_count int,
	comments_count int,
	full_comments varchar(8000)
)
```


#### 6. Create and Setup Linked Service
Go to [Azure Data Factory Portal](https://portal.azure.com/#home) > Data Factory > Select data factory that you have created > Launch Studio > Author > Pipelines (New pipeline)
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/300ed3aa-3011-4fb7-9d40-fdd86a9be017)

Next, Go to Manage > Linked Service (Under Connections) > Create linked services > Choose Azure Blob Storage.
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/987b7d10-8509-4b1e-92c7-824cc3ba9e95)


![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/0ee02d23-12ee-4845-9045-2df5d2bc8252)


#### 6. Create Dataset
Then Go Back to Author > Datasets > New Dataset > Azure Blob Storage > Delimited Text > Debug and select publish
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/0de2f90d-63e8-4277-ba39-1b0cd6330af4)


#### 7. Create Pipeline for copy data
Create pipeline > drag copy data > insert source dataset > sink dataset > mapping (import schemas)
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/14b10567-fcb1-4261-ac45-e3816e2a9202)

### Conclusion

Our report provides a summary of the data integration strategy we used to combine chatgpt data from three different data sources for a data science project that analysed chatgpt users' sentiment. In order to map the data onto a common schema, deal with missing or incomplete data, and clean and transform the data as necessary, we identified three different data sources. This assignment can help us to understand the significance of data integration in data science and how it can be applied in real-world scenarios by using a real-world example and giving step-by-step instructions. Additionally, it gives us a chance to practise using data integration tools and machine learning methods to extract insights from the data.




