<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

# Twitter API Data

## Introduction
Twitter API data refers to the structured and unstructured data that can be obtained through the Twitter API (Application Programming Interface). The Twitter API provides access to a vast amount of data about tweets, users, hashtags, mentions, and more. The data includes both metadata (data about the data, such as date and time of the tweet, location, and user information) and content (the actual text, images, and videos in the tweet).


Important data that can be accessed through the Twitter API includes:

1. Tweets: The text content of tweets, along with metadata such as timestamp, location, and author information.
2. Users: Information about Twitter users, including their profile information, follower/following relationships, and tweet history.
3. Trends: Information about popular topics and hashtags on Twitter.
4. Streaming data: Real-time data streams of tweets that match specified search criteria.
5. Ads insights: Information about Twitter ad campaigns, including performance metrics such as impressions, clicks, and engagement rates.

Overall, the Twitter API provides a powerful source of data for data science applications and can be used in conjunction with other data sources to gain deeper insights into user behavior, sentiment, and trends.

## Metadata in the Twitter API
Metadata in the Twitter API refers to the additional information associated with a tweet beyond its text content. This information can include details such as the tweet's author, timestamp, location, and any media attachments (such as images, videos, or links).

When you retrieve tweets using the Twitter API, the response includes a variety of metadata fields that provide additional context and information about the tweet. Some common metadata fields that you may encounter when working with the Twitter API include:

- `id`: A unique identifier for the tweet.
- `created_at`: The date and time that the tweet was created.
- `text`: The actual text content of the tweet.
- `user`: Information about the user who posted the tweet, including their username, display name, and bio.
- `entities`: Information about any URLs, hashtags, or mentions included in the tweet.
- `coordinates`: If available, the precise geolocation of the tweet.
- `place`: Information about the location associated with the tweet, such as the name of a city or point of interest.
- `retweeted_status`: If the tweet is a retweet, information about the original tweet and its author.
- `favorite_count`: The number of times the tweet has been liked by other users.
- `retweet_count`: The number of times the tweet has been retweeted by other users.
- `lang`: The language of the tweet.

This metadata can be useful when analyzing tweets for various purposes, such as sentiment analysis, geospatial analysis, or network analysis. By incorporating metadata into your analysis, you can gain a more comprehensive understanding of the context and meaning behind each tweet.

## Code
How to retrieve tweet data using the Twitter API in Python using the Tweepy library:

```python
import tweepy

# Authenticate with your Twitter API credentials
auth = tweepy.OAuthHandler("consumer_key", "consumer_secret")
auth.set_access_token("access_token", "access_token_secret")

# Initialize the API client
api = tweepy.API(auth)

# Search for tweets containing a specific keyword
tweets = api.search(q="data science", count=10)

# Print the tweet text and metadata
for tweet in tweets:
    print("Tweet Text: ", tweet.text)
    print("User Name: ", tweet.user.name)
    print("User Location: ", tweet.user.location)
    print("Tweet ID: ", tweet.id_str)
    print("Tweet Created At: ", tweet.created_at)
    print("Retweet Count: ", tweet.retweet_count)
    print("Favorite Count: ", tweet.favorite_count)
    print("-----------------------------")
```
This code snippet retrieves the 10 most recent tweets containing the keyword "data science" and prints their text and metadata, including the user name, location, tweet ID, creation date, retweet count, and favorite count.

Note that you'll need to replace "consumer_key", "consumer_secret", "access_token", and "access_token_secret" with your own Twitter API credentials, which you can obtain from the Twitter Developer Portal.

Python code to save Twitter API data in a CSV file with the desired format:

```python
import csv
import tweepy

# Set up Twitter API credentials
consumer_key = 'your_consumer_key'
consumer_secret = 'your_consumer_secret'
access_token = 'your_access_token'
access_token_secret = 'your_access_token_secret'

# Authenticate with Twitter API
auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token, access_token_secret)

# Create API object
api = tweepy.API(auth)

# Define search query
query = 'data science'

# Set up CSV file and header row
with open('tweets.csv', mode='w', encoding='utf-8', newline='') as file:
    writer = csv.writer(file)
    writer.writerow(['Tweet Text', 'User Name', 'User Location', 'Tweet ID', 'Tweet Created At', 'Retweet Count', 'Favorite Count'])

    # Retrieve tweets and write to CSV file
    for tweet in tweepy.Cursor(api.search_tweets, q=query, lang='en', tweet_mode='extended').items(10):
        writer.writerow([tweet.full_text, tweet.user.name, tweet.user.location, tweet.id_str, tweet.created_at, tweet.retweet_count, tweet.favorite_count])

print('Data saved to tweets.csv')
```

This code uses the csv module to create a new CSV file and write each tweet's text, user name, location, ID, created time, retweet count, and favorite count in a row with the corresponding headers. The tweepy.Cursor object is used to retrieve the tweets matching the specified search query and language. Finally, the code prints a message indicating that the data has been saved to the CSV file.

## Sample data from Twitter API
10 tweets in CSV format:

```perl
"tweet_text","user_name","user_location","tweet_id","created_at","retweet_count","favorite_count"
"RT @elonmusk: Dogecoin is the people’s crypto","Joe Smith","San Francisco, CA","1381645365401705984","2021-04-12 17:52:20",100,200
"Just tried the new coffee shop on Main St, amazing latte!","Jane Doe","New York, NY","1381632902844738049","2021-04-12 17:02:55",5,10
"Excited to announce our new product launch next week!","Acme Corp","Los Angeles, CA","1381609371602316802","2021-04-12 15:29:23",50,100
"Great to see so many people at the rally today! #BLM","John Johnson","Washington, D.C.","1381584639822476801","2021-04-12 13:50:05",20,50
"Can't believe it's already April, time flies!","Sara Lee","Chicago, IL","1381582737890161153","2021-04-12 13:42:31",2,5
"Amazing performance by @Beyonce at Coachella last night!","David Kim","Houston, TX","1381568738025341445","2021-04-12 12:47:00",30,60
"Happy Birthday to my amazing wife! Love you!","Mike Thompson","Miami, FL","1381563491488389634","2021-04-12 12:26:10",10,25
"Just got my second vaccine shot, feeling relieved!","Emily Chen","Seattle, WA","1381539308136984065","2021-04-12 10:50:00",15,30
"Congratulations to @SpaceX on the successful launch!","Tom Brown","Denver, CO","1381522180665212420","2021-04-12 09:42:00",40,80
```

Each line represents a tweet, and the values are separated by commas. The first line contains the headers for each column, which are "tweet_text", "user_name", "user_location", "tweet_id", "created_at", "retweet_count", and "favorite_count". The remaining lines contain the values for each tweet.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
