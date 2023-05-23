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
![Capture](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/f3a63977-e6de-46ce-88ab-6bd75aba29cb)



### 3. Implement your data integration plan
We have decided to pick Azure Data Factory as our ETL tool for loading data from each data source and mapping the data onto a common schema.

#### 1. Create and Setup Data Factory
Go to ![Azure Data Factory Portal](https://portal.azure.com/#home) > Create a Resource > Select Data Factory > Review & create. A data factory will be created once all the required fields (Subscriptions, Resource group, Name and Region) are filled in. 
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/04afa6ea-ac5f-4522-a275-bd4b89392d14)

#### 2. Create and Setup Azure SQL Database and Server
Go to ![Azure Data Factory Portal](https://portal.azure.com/#home) > Create a Resource > Select SQL Database > Review & create. A server must be created for the database. It can be create when you are creating the SQL database by clicking on Create New

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/337c06cc-c86b-41bd-af56-7d6f3d4af43b)
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/4054f9cd-ee03-408b-a70a-e0aed9145a3b)

#### 3. Create Storage Account
Go to ![Azure Data Factory Portal](https://portal.azure.com/#home) > Storage accounts > + Create > Review & create. A storage account will be created once all the required fields (Subscriptions, Resource group, Name, Region, Redundancy and Performance) are filled in. 
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/58307867-00ab-4e14-a4a7-bae8d214e826)

#### 4. Create Container to upload files
Select the storage account that you have just created > Containers > + Container
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/c06d8914-1bb0-4bb5-94a1-67fa717c0ac1)

After creating a container, select the container > upload files
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/23049ebf-a5c1-4c9a-b34d-b4603d9e65aa)

#### 5. Create New Table (Azure SQL Database)
Go to ![Azure Data Factory Portal](https://portal.azure.com/#home) > Select your SQL database that you have created (Under Resources pane) > Query editor.
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/75134063-9878-4a50-8c63-21eda1408754)

Code for creating dbo.twitter
```
CREATE TABLE twitter(
	date_time datetime,
	tweet_id int,
	tweet_text varchar(500),
	username varchar(100),
	permalink varchar(300),
	tweet_user varchar(300),
	reply_count int,
	retweet_count int,
	like_count int,
	quote_count int,
	conversational_id int,
	tweet_language varchar(5),
	tweet_source varchar(500),
	media varchar(500),
	quoted_tweet varchar(500),
	mentioned_user varchar(500),
	hashtag varchar(500),
	hashtag_count int,
)
```

### 4. Evaluate the success of your data integration plan. 
This should include a qualitative assessment of the quality and completeness of the integrated dataset, as well as any quantitative metrics that are relevant to your project.

**Example:**<br>
We will evaluate the success of our data integration plan by comparing the integrated dataset to our original data sources, and by analyzing the quality of the data using standard metrics such as mean, median, and standard deviation. We will also assess the completeness of the integrated dataset by comparing it to our expected schema, and by identifying any missing or incomplete data that was not addressed by our data cleaning and transformation steps.

### 5. Write a report summarizing your data integration plan and your results. 
This report should include a description of your data sources, a detailed explanation of your data integration plan, and an analysis of the success of your plan.

**Example:**<br>
Our report summarizes our data integration plan for integrating customer transaction data with other data sources for a data science project analyzing customer behavior over time. We identified three different data sources, and developed a plan for mapping the data onto a common schema, handling missing or incomplete data, and cleaning and transforming the data as needed. We implemented our plan using Python, and evaluated the success of our plan by comparing the integrated dataset to our original data sources and assessing the quality and completeness of the integrated dataset. Our analysis shows that our data integration plan was successful, and that the integrated dataset is suitable for use in our data science project.

By using a real-world example and providing step-by-step instructions, this assignment can help students understand the importance of data integration in data science and how it can be applied in practical scenarios. It also provides an opportunity for students to practice using data integration tools and applying machine learning techniques to gain insights from the data.

### Others
- Collaborate effectively with your group members to complete the task.
- Ensure to send the report in **mark down** format and **source code**.
- Please submit the assignments in the submission [**Data integration submission**](https://github.com/drshahizan/special-topic-data-engineering/tree/main/assignment/data-integration/submission/) folder. It would be best if you create a folder using your group name.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)




