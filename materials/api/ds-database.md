<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

## Database in Data Science

There are several databases that are commonly used in data science, each with their own strengths and weaknesses. Here are four popular databases used in data science, including SQLAlchemy and MongoDB:

1. **SQLAlchemy**: SQLAlchemy is a Python SQL toolkit and Object-Relational Mapping (ORM) library that provides a set of high-level API for connecting and working with relational databases in Python. SQLAlchemy supports a wide range of databases, including MySQL, PostgreSQL, SQLite, Oracle, and Microsoft SQL Server. It allows data scientists to write SQL queries in Python, and provides a convenient way to work with data from multiple sources.

2. **MySQL**: MySQL is another popular open-source relational database management system that is widely used in web development and data science. It is known for its ease of use, performance, and scalability. MySQL is often used for applications that require fast read and write operations, such as real-time data processing and analytics.

3. **MongoDB**: MongoDB is a popular NoSQL document-oriented database that is known for its flexibility, scalability, and ability to handle unstructured data. MongoDB stores data in JSON-like documents, making it easy to work with for data scientists who are comfortable with JSON. MongoDB is often used for real-time analytics, content management, and mobile applications.

4. **PostgreSQL**: PostgreSQL is a popular open-source relational database management system that is used in many data science applications. It is known for its scalability, reliability, and support for advanced data types like JSON and GIS. PostgreSQL is often used for data warehousing and analytics, and can handle large amounts of data.

In summary, PostgreSQL and MySQL are popular relational databases used in data science, while MongoDB is a popular NoSQL database. SQLAlchemy is a Python library that provides a high-level API for connecting and working with relational databases in Python, and supports a wide range of databases including the ones mentioned above.

## SQLAlchemy
SQLAlchemy is a Python library that provides a set of tools for working with **relational databases**. It is not a NoSQL database, but rather a library that allows you to interact with SQL databases using an object-relational mapping (ORM) layer.

With SQLAlchemy, you can interact with SQL databases using Python objects and methods, which can make it easier to work with databases and more closely integrate database functionality with your Python code. SQLAlchemy also provides a set of tools for working with database schemas, including a schema generator and a schema migrator.

SQLAlchemy supports a wide range of SQL databases, including SQLite, MySQL, PostgreSQL, Oracle, Microsoft SQL Server, and many others. It provides a unified interface to these databases, so you can use the same code to interact with different databases without having to write separate code for each one.

In summary, SQLAlchemy is a Python library for working with SQL databases, not a NoSQL database.


### SQLAlchemy can be used in Django
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
```

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

### Steps using SQLAlchemy as database
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

## MySQL
MySQL is a popular relational database management system that is widely used in data science and other applications. To get data from an API into a MySQL database, you can use the following steps:

1. Create a MySQL database: Create a new MySQL database where you will store the data from the API. You can use a tool like MySQL Workbench to create a new database.

2. Choose an API: Choose an API that you want to access and retrieve data from. There are many APIs available, such as Twitter, Facebook, Google, and weather services, among others.

3. Install a library for accessing the API: There are several libraries available for accessing APIs in Python, such as requests, urllib, and httplib. Choose one and install it using pip.

4. Write a Python script to fetch data from the API: Using the API library, write a Python script that will fetch data from the API and insert it into the MySQL database. You can fetch data such as tweets, user profiles, weather data, or news articles, depending on the API you are using. You can also filter data based on keywords, hashtags, or location.

5. Connect to MySQL database and insert data: In the Python script, use the MySQL Connector library to connect to the MySQL database and insert the data retrieved from the API. You can use SQL queries to create tables and insert data into them.

6. Schedule the script to run periodically: To keep the data in your MySQL database up to date, schedule the Python script to run periodically using a tool like cron.

Overall, using MySQL database to get data from an API can be a powerful way to collect and store large amounts of data for analysis and insights. With the right tools and techniques, you can retrieve data from an API and store it in MySQL database for further analysis and processing.

### Save data from Twitter using the Twitter API and store it in a MySQL database
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

## MongoDB
MongoDB is a popular NoSQL document-oriented database that is widely used in data science and other applications. To get data from an API into a MongoDB database, you can use the following steps:

1. Create a MongoDB database: Create a new MongoDB database where you will store the data from the API. You can use a tool like MongoDB Compass to create a new database.

2. Choose an API: Choose an API that you want to access and retrieve data from. There are many APIs available, such as Twitter, Facebook, Google, and weather services, among others.

3. Install a library for accessing the API: There are several libraries available for accessing APIs in Python, such as requests, urllib, and httplib. Choose one and install it using pip.

4. Write a Python script to fetch data from the API: Using the API library, write a Python script that will fetch data from the API and insert it into the MongoDB database. You can fetch data such as tweets, user profiles, weather data, or news articles, depending on the API you are using. You can also filter data based on keywords, hashtags, or location.

5. Connect to MongoDB database and insert data: In the Python script, use the PyMongo library to connect to the MongoDB database and insert the data retrieved from the API. You can use MongoDB's flexible document-oriented data model to store data as JSON-like documents.

6. Schedule the script to run periodically: To keep the data in your MongoDB database up to date, schedule the Python script to run periodically using a tool like cron.

Overall, using MongoDB to get data from an API can be a powerful way to collect and store large amounts of data for analysis and insights. With the right tools and techniques, you can retrieve data from an API and store it in MongoDB for further analysis and processing.

### Save data from Twitter using the Twitter API and store it in a MongoDB database.

You can follow these general steps:

1. Set up a Twitter API developer account and obtain API credentials (consumer key, consumer secret, access token, access token secret).

2. Install the tweepy Python library, which provides a convenient wrapper for the Twitter API.

3. Install the pymongo Python library, which allows you to interact with a MongoDB database.

4. Connect to the Twitter API using your credentials and use the tweepy library to search for and retrieve tweets. You can filter tweets based on various criteria, such as keywords, hashtags, users, geolocation, and date ranges.

5. For each tweet that you retrieve, extract the relevant information that you want to save to your MongoDB database, such as the text, author, timestamp, location, and any other relevant metadata.

6. Create a connection to your MongoDB database using the pymongo library and insert the tweet data into a collection in your database.

Here's some example Python code that demonstrates these steps:

```python
import tweepy
from pymongo import MongoClient

# Twitter API credentials
consumer_key = 'your_consumer_key'
consumer_secret = 'your_consumer_secret'
access_token = 'your_access_token'
access_token_secret = 'your_access_token_secret'

# MongoDB database credentials
mongodb_uri = 'mongodb://localhost:27017/'
mongodb_database = 'your_mongodb_database_name'
mongodb_collection = 'your_mongodb_collection_name'

# connect to Twitter API
auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token, access_token_secret)
api = tweepy.API(auth)

# connect to MongoDB database
client = MongoClient(mongodb_uri)
db = client[mongodb_database]
collection = db[mongodb_collection]

# search for tweets containing a keyword and save them to MongoDB database
tweets = api.search(q='data science', count=100)

for tweet in tweets:
    tweet_text = tweet.text
    tweet_author = tweet.author.name
    tweet_timestamp = tweet.created_at
    tweet_location = tweet.user.location

    tweet_data = {'text': tweet_text, 'author': tweet_author, 'timestamp': tweet_timestamp, 'location': tweet_location}
    collection.insert_one(tweet_data)

client.close()
```

In this example, we search for 100 tweets containing the keyword "data science", extract the text, author, timestamp, and location information from each tweet, and insert it into a MongoDB collection called "your_mongodb_collection_name" in a database called "your_mongodb_database_name". Note that you will need to replace the database credentials and collection name with your own values.



## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)


