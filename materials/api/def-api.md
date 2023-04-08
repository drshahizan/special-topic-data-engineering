<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.
# Application Programming Interface (API)

## Introduction
An API (Application Programming Interface) is a set of protocols, tools, and standards for building software applications. It provides a way for software programs to interact with each other and exchange data. In simple terms, an API acts as a messenger between two applications, allowing them to communicate and share information.

In data science, APIs are used to access data from external sources, such as databases, web services, or other applications. This data can be used for various purposes, such as data analysis, machine learning, or data visualization.

APIs can provide structured data in real-time, which can be useful for tasks such as sentiment analysis of social media, weather forecasting, or real-time traffic analysis. They can also be used to access data from government agencies, financial institutions, or other organizations that maintain large datasets.

APIs can also be used to build data-driven applications, such as mobile apps or web applications. For example, an app that provides real-time weather updates might use an API to access weather data from a weather service provider.

Overall, APIs are a critical tool for data scientists, as they provide a convenient and efficient way to access and work with data from a wide range of sources.

## API for data science projects
There are many APIs that can be useful for data science projects. Here are some popular ones:

1. Google Cloud APIs: Google Cloud APIs provide access to a wide range of services, such as Natural Language Processing, Speech-to-Text, and Vision APIs.

2. Twitter API: The Twitter API provides access to the Twitter data in real-time. This API can be useful for sentiment analysis and social media analytics.

3. Facebook Graph API: The Facebook Graph API provides access to the Facebook social graph, which can be useful for data analysis and visualization.

4. OpenWeatherMap API: The OpenWeatherMap API provides weather data for any location on the planet, making it useful for weather forecasting and analysis.

5. Spotify API: The Spotify API provides access to music data, such as track metadata, audio features, and user data, which can be used for music recommendation and analysis.

6. GitHub API: The GitHub API provides access to data on software development projects, such as repositories, issues, and pull requests. This can be useful for software development analytics.

7. Census Bureau API: The U.S. Census Bureau API provides access to a wide range of demographic data, such as population, income, and education statistics.

8. Reddit API: The Reddit API provides access to data on user-generated content, such as posts and comments, which can be useful for sentiment analysis and social media analytics.

These are just a few examples, but there are many more APIs out there that can be useful for data science projects. The choice of API will depend on the specific project and the type of data required.

## APIs from Malaysia
Sure! Here are some APIs from Malaysia that can be used for data science projects:

1. Malaysia Open Data Portal: This portal provides access to a wide range of datasets from various government agencies in Malaysia. These datasets cover various topics, including demographics, education, economy, health, and transportation.

2. Knoema API: Knoema is a data platform that provides access to a wide range of datasets from various sources. The platform has an API that can be used to access and integrate the data into data science projects.

3. Islamic Prayer Time API: This API provides accurate Islamic prayer times for cities in Malaysia. It can be used for various applications, such as building prayer time reminders or analyzing patterns of prayer times across different regions.

4. Bank Negara Malaysia API: Bank Negara Malaysia is the central bank of Malaysia, and it provides an API that can be used to access financial data, such as exchange rates, interest rates, and monetary statistics.

5. Air Quality API Malaysia: This API provides real-time air quality data for various cities in Malaysia. It can be used for applications such as air pollution analysis and forecasting.

These are just a few examples of APIs from Malaysia that can be useful for data science projects. As always, the choice of API will depend on the specific project and the type of data required.

## What is different between API and web scraping?
API and web scraping are two different methods of accessing and retrieving data from websites or web services.

API stands for Application Programming Interface, which is a set of protocols, tools, and standards for building software applications. APIs are designed to provide a structured way for developers to access data from external sources. APIs typically provide a set of pre-defined methods or endpoints that allow developers to retrieve data in a specific format. APIs are often provided by the owners of the data, and they are usually designed to be used by developers who have permission to access the data.

Web scraping, on the other hand, is the process of extracting data from websites using automated tools or scripts. Web scraping involves parsing the HTML code of a web page and extracting specific information from it. Web scraping can be done using various tools and libraries, such as BeautifulSoup, Scrapy, or Selenium. Web scraping can be useful when there is no API available for the data that is required or when the data is not structured in a way that can be easily accessed using an API.

The key difference between API and web scraping is that APIs are a structured way of accessing data that is provided by the owners of the data, while web scraping is a method of extracting data from websites using automated tools. APIs are typically more reliable and efficient than web scraping, as they provide a standardized way of accessing data, while web scraping can be more prone to errors and can require more maintenance over time. However, web scraping can be useful in situations where APIs are not available or when the data is not structured in a way that can be easily accessed using an API.

## Integrate APIs and web scraping
It is possible to integrate APIs and web scraping together to retrieve data from different sources. This approach can be useful when the required data is not available through an API or when the API does not provide all the data that is required.

Here is an example of how to integrate APIs and web scraping together:

1. First, check if the required data is available through an API. If the data is available through an API, use the API to retrieve the data.

2. If the required data is not available through an API, or if the API does not provide all the data that is required, use web scraping to retrieve the remaining data.

3. Combine the data retrieved through the API and web scraping into a single dataset.

4. Clean and preprocess the data as needed for analysis.

5. Analyze the data using data science techniques such as machine learning, data visualization, or statistical analysis.

6. To implement this approach, you can use programming languages such as Python, which provide libraries for both APIs and web scraping. For example, you can use the Requests library to make API calls, and the BeautifulSoup library to scrape data from websites.

It is important to note that when integrating APIs and web scraping, you should ensure that you have the necessary permissions and rights to access the data, and that you comply with any terms and conditions set by the owners of the data.

## SQLAlchemy
SQLAlchemy is a Python library that provides a set of tools for working with **relational databases**. It is not a NoSQL database, but rather a library that allows you to interact with SQL databases using an object-relational mapping (ORM) layer.

With SQLAlchemy, you can interact with SQL databases using Python objects and methods, which can make it easier to work with databases and more closely integrate database functionality with your Python code. SQLAlchemy also provides a set of tools for working with database schemas, including a schema generator and a schema migrator.

SQLAlchemy supports a wide range of SQL databases, including SQLite, MySQL, PostgreSQL, Oracle, Microsoft SQL Server, and many others. It provides a unified interface to these databases, so you can use the same code to interact with different databases without having to write separate code for each one.

In summary, SQLAlchemy is a Python library for working with SQL databases, not a NoSQL database.

## SQLAlchemy can be used in Django
SQLAlchemy can be used in Django, although it is not the default database backend for Django. Django has its own ORM layer, called the Django ORM, which is tightly integrated with the framework and provides a lot of convenience features out-of-the-box.

However, if you prefer to use SQLAlchemy instead of the Django ORM, you can do so by configuring Django to use SQLAlchemy as the database backend. This can be done by installing the sqlalchemy package and adding the following lines to your Django settings file:


```python
DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': 'mydatabase',
    },
    'extra': {
        'ENGINE': 'django.db.backends.postgresql',
        'NAME': 'mydatabase',
        'USER': 'mydatabaseuser',
        'PASSWORD': 'mypassword',
        'HOST': '127.0.0.1',
        'PORT': '5432',
    },
    'another': {
        'ENGINE': 'django.db.backends.mysql',
        'NAME': 'mydatabase',
        'USER': 'mydatabaseuser',
        'PASSWORD': 'mypassword',
        'HOST': '127.0.0.1',
        'PORT': '3306',
    },
}

DATABASE_ROUTERS = ['path.to.your.CustomRouter']
```

This configuration specifies three databases: SQLite, PostgreSQL, and MySQL, and a custom database router to route queries to the appropriate database.

You can then use SQLAlchemy to interact with the databases as you normally would, using the create_engine function to connect to the database and the sessionmaker function to create a session for interacting with the database:

```python
from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker

engine = create_engine('postgresql://mydatabaseuser:mypassword@localhost/mydatabase')
Session = sessionmaker(bind=engine)
session = Session()

# do some database queries using SQLAlchemy
result = session.query(MyModel).filter(MyModel.field == value).all()

session.close()
```python

Note that using SQLAlchemy with Django is an advanced topic and may not be suitable for all use cases. It may also require additional configuration and setup, such as defining models using SQLAlchemy syntax instead of Django models.

## Save content in Twitter using API?
To save content from Twitter using the API, you can use the Twitter API's GET search/tweets endpoint, which allows you to retrieve tweets that match a particular query. Here are the steps to save content from Twitter using the API:

1. Create a Twitter Developer account and obtain the necessary authentication credentials, which include the consumer key, consumer secret, access token, and access token secret.

2. Install the necessary Python libraries, such as tweepy, which is a popular library for working with the Twitter API.

3. Authenticate your API client using the authentication credentials obtained in step 1.

```python
import tweepy

consumer_key = "YOUR_CONSUMER_KEY"
consumer_secret = "YOUR_CONSUMER_SECRET"
access_token = "YOUR_ACCESS_TOKEN"
access_token_secret = "YOUR_ACCESS_TOKEN_SECRET"

auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token, access_token_secret)

api = tweepy.API(auth)
```

4. Use the `search` method of the API object to search for tweets that match a particular query. The `search` method returns a list of `Status` objects, which represent individual tweets.

```python
tweets = api.search(q="your_query_here")
```

Iterate over the list of tweets and extract the content that you want to save. For example, you may want to save the text of the tweets, the user who posted the tweet, the date and time of the tweet, and any relevant hashtags or mentions.

```python
for tweet in tweets:
    text = tweet.text
    user = tweet.user.screen_name
    created_at = tweet.created_at
    hashtags = tweet.entities['hashtags']
    mentions = tweet.entities['user_mentions']

    # Save the content in a database or a file
```    

6. Save the extracted content in a database or a file, depending on your requirements.

Note that the search method of the Twitter API has some limitations, such as the maximum number of tweets that can be retrieved in a single request and the maximum number of requests that can be made in a given time period. You should also ensure that you comply with Twitter's terms of service and any applicable laws and regulations when using the API to save content from Twitter.

## Save data from Twitter using the API and store it in a database
To save data from Twitter using the API and store it in a database, you can use the following steps:

1. Create a Twitter Developer account and obtain the necessary authentication credentials, which include the consumer key, consumer secret, access token, and access token secret.

2. Install the necessary Python libraries, such as tweepy for accessing the Twitter API and a database connector library such as SQLAlchemy for connecting to a database.

3. Authenticate your API client using the authentication credentials obtained in step 1.

```python
import tweepy
from sqlalchemy import create_engine

consumer_key = "YOUR_CONSUMER_KEY"
consumer_secret = "YOUR_CONSUMER_SECRET"
access_token = "YOUR_ACCESS_TOKEN"
access_token_secret = "YOUR_ACCESS_TOKEN_SECRET"

auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token, access_token_secret)

api = tweepy.API(auth)
```

4. Connect to your database using SQLAlchemy, which provides a unified interface to various database management systems.

```python
db_uri = "DATABASE_URI_HERE"
engine = create_engine(db_uri)
```

5. Define a table schema that matches the data you want to store. For example, if you want to store tweets, you might define a table with columns for the tweet ID, text, user, created date, and any other relevant metadata.

```python
from sqlalchemy import Column, Integer, String, DateTime

class Tweet(Base):
    __tablename__ = "tweets"

    id = Column(Integer, primary_key=True)
    text = Column(String)
    user = Column(String)
    created_at = Column(DateTime)

```python

Iterate over the tweets retrieved from the API and insert them into the database using SQLAlchemy's `session` object.

```python
from datetime import datetime
from sqlalchemy.orm import sessionmaker

Session = sessionmaker(bind=engine)
session = Session()

for tweet in tweepy.Cursor(api.search_tweets, q="your_query_here").items():
    t = Tweet(
        id=tweet.id,
        text=tweet.text,
        user=tweet.user.screen_name,
        created_at=datetime.strptime(tweet.created_at, '%a %b %d %H:%M:%S %z %Y')
    )
    session.add(t)

session.commit()
```
7. Close the database connection when you are done.

```python
session.close()
```

Note that you should be aware of Twitter's API limits and ensure that you are not exceeding them. You should also ensure that you comply with Twitter's terms of service and any applicable laws and regulations when using the API to save data from Twitter.

## Save data from Twitter using the Twitter API and store it in a MySQL database
You can follow these general steps:

1. Set up a Twitter API developer account and obtain API credentials (consumer key, consumer secret, access token, access token secret).

2. Install the tweepy Python library, which provides a convenient wrapper for the Twitter API.

3. Install the mysql-connector-python Python library, which allows you to interact with a MySQL database.

4. Connect to the Twitter API using your credentials and use the tweepy library to search for and retrieve tweets. You can filter tweets based on various criteria, such as keywords, hashtags, users, geolocation, and date ranges.

5. For each tweet that you retrieve, extract the relevant information that you want to save to your MySQL database, such as the text, author, timestamp, location, and any other relevant metadata.

6. Create a connection to your MySQL database using the mysql-connector-python library and execute SQL queries to insert the tweet data into your database.

Here's some example Python code that demonstrates these steps:

```python
import tweepy
import mysql.connector

# Twitter API credentials
consumer_key = 'your_consumer_key'
consumer_secret = 'your_consumer_secret'
access_token = 'your_access_token'
access_token_secret = 'your_access_token_secret'

# MySQL database credentials
db_host = 'localhost'
db_user = 'your_mysql_username'
db_password = 'your_mysql_password'
db_database = 'your_mysql_database_name'

# connect to Twitter API
auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token, access_token_secret)
api = tweepy.API(auth)

# search for tweets containing a keyword and save them to MySQL database
tweets = api.search(q='data science', count=100)
db = mysql.connector.connect(host=db_host, user=db_user, password=db_password, database=db_database)
cursor = db.cursor()

for tweet in tweets:
    tweet_text = tweet.text
    tweet_author = tweet.author.name
    tweet_timestamp = tweet.created_at
    tweet_location = tweet.user.location

    sql = "INSERT INTO tweets (text, author, timestamp, location) VALUES (%s, %s, %s, %s)"
    val = (tweet_text, tweet_author, tweet_timestamp, tweet_location)
    cursor.execute(sql, val)

db.commit()
db.close()
```

In this example, we search for 100 tweets containing the keyword "data science", extract the text, author, timestamp, and location information from each tweet, and insert it into a MySQL database table called "tweets". Note that you will need to replace the database credentials and table name with your own values.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
