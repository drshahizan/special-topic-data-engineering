<div>
<h1 align = 'center'><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUIwD84MUO1g9n6U0VWNJKRK0pPFVGTXsBeQ3KTeeGTpxX7VKB3-rMoW1J2bvU2blIFiM&usqp=CAU"  width="40" height="40"/><b> SENTIMENT ANALYSIS IN SOCIAL MEDIA: A STUDY ON CHATGPT IN MALAYSIA</b> </h1>
</div>



## Table of content
- [Table of content](#table-of-content)
- [📒 Executive Summary](#-executive-summary)
- [🧱 Background](#-background)
- [🔬 Goals and Objectives](#-goals-and-objectives)
- [🧿 Scope](#-scope)
- [🔖 Methodology](#-methodology)
- [🖥️ System Architecture (mq)](#️-system-architecture-mq)
- [💣 Risks and Limitations (mq)](#-risks-and-limitations-mq)
  - [💰 Financial Risk](#-financial-risk)
  - [⚙️ Technical Risk](#️-technical-risk)
  - [📑 Legal Risk](#-legal-risk)
- [🗿 Deliverables and Milestones](#-deliverables-and-milestones)
- [🗂️ Resources](#️-resources)
- [🛠️ Technical Specifications](#️-technical-specifications)
- [⏲️ Timeline and Deliverables](#️-timeline-and-deliverables)
- [🔍 Conclusion](#-conclusion)

## 📒 Executive Summary
This proposal outlines a social media monitoring tool to understand public opinion and sentiment on ChatGPT in Malaysia. The main goal of the project is to develop a web application that can identify areas for improvement and potential new features for ChatGPT. The project's scope includes collecting and processing social media data from social medias using APIs, performing sentiment analysis and topic modeling, and developing machine learning algorithms to classify social media data based on sentiment.

## 🧱 Background
<p align="center">
<img src="https://user-images.githubusercontent.com/97009588/228268824-9dc3aa13-493f-4002-b3d4-a82322902244.png" alt="Paris" height="250"></img>
</p>
ChatGPT is an artificial intelligence language model developed by OpenAI that is designed to generate human-like text in response to natural language inputs. As ChatGPT hits the market, it becomes crucial for us to understand public opinion and sentiment towards the platform. However, analyzing this data manually is time-consuming and often impractical. Therefore, there is a need for a platform that can monitor and analyze social media data in real-time to understand public opinion and sentiment on ChatGPT in Malaysia.

## 🔬 Goals and Objectives



## 🧿 Scope
The project will focus specifically on Twitter data, as Twitter is a popular social media platform for discussing technology and current events. By analyzing Twitter data in real-time, the project aims to provide valuable insights into the public's perception of ChatGpt

Scope:
Data Sources:
The primary data source for this project will be Twitter's API, which will provide us with real-time access to tweets related to "ChatGpt." We will use Twitter's streaming API to collect tweets in real-time, using specific keywords and hashtags related to ChatGpt.
Tools and Technologies:
We will use Python as the main programming language for this project, along with several open-source libraries such as Tweepy, Pandas, and MongoDB.
I.	Tweepy: Use to connect to Twitter's API.
II.	Pandas: Use for data manipulation and preprocessing. 
III.	MongoDB:  To store the collected data which allow us to store and query the data efficiently.
IV.	NLTK (Natural Language Toolkit): Use for sentiment analysis
V.	PowerBi: To visualize and explore the data.

Other Relevant Information:
To ensure data privacy and security, we will comply with Twitter's API Terms of Service and any applicable laws and regulations related to data privacy and security. We will also use appropriate measures to secure the data, such as encrypting the database and using secure protocols for data transfer.


## 🔖 Methodology
The project will follow the Agile methodology, with sprints of 2-4 weeks, and regular demos and retrospectives to review progress and plan the next steps.

1. Data Collection: The project will collect Twitter data using the Twitter API, which provides access to a sample of the real-time Twitter stream. The collected data will include tweets that mention "ChatGpt" and related hashtags, keywords, and phrases.

2. Data Pre-processing: The collected data will be pre-processed to remove noise, such as irrelevant tweets and spam, and to extract relevant information, such as the user's sentiment towards ChatGpt. The pre-processing steps will include:
  •	Removing duplicate tweets
  •	Removing retweets
  •	Removing tweets that are not in English
  •	Tokenizing the text and removing stop words
  •	Applying stemming or lemmatization to reduce the text to its base form
  •	Applying part-of-speech tagging to identify noun phrases and named entities
  •	Filtering the text to remove mentions, URLs, and other irrelevant information
  •	Applying sentiment analysis to determine the polarity of the tweets

3. Sentiment Analysis: The project will perform sentiment analysis on the pre-processed data to determine the polarity of the tweets, i.e., positive, negative, or neutral sentiment. The sentiment analysis will be performed using a machine learning model, such as a Naive Bayes or Support Vector Machine (SVM) classifier, trained on a labelled dataset of tweets.

4. Data Visualization: The project will use data visualization techniques to display the sentiment analysis results in a meaningful and informative way, such as bar charts, pie charts, and word clouds. The visualization will provide an easy-to-understand summary of the sentiment distribution and the most common topics and phrases associated with ChatGpt.

5. Real-time Analysis: The project will perform real-time analysis of Twitter data to provide up-to-date insights into public opinion and sentiment about ChatGpt. The real-time analysis will involve continuously collecting and pre-processing Twitter data, performing sentiment analysis, and updating the visualization.

All in all, the methodology of the project is to collect and pre-process Twitter data, perform sentiment analysis, and visualize the results in real-time, using natural language processing and machine learning techniques. The methodology will provide valuable insights into public opinion and sentiment about ChatGpt, and help OpenAI to make data-driven decisions and improve its products and services.



## 🖥️ System Architecture (mq)



## 💣 Risks and Limitations (mq)


### 💰 Financial Risk

### ⚙️ Technical Risk


### 📑 Legal Risk
 

## 🗿 Deliverables and Milestones
<table border="1" align="center">
  <tr>
    <th>Deliverables and Milestones</th>
    <th>Timeframe</th>
  </tr>
  <tr>
    <td>Data Collection</td>
    <td>Week 1-2</td>
  </tr>
  <tr>
    <td>Data Cleaning and Preprocessing</td>
    <td>Week 3-4</td>
  </tr>
  <tr>
    <td>Sentiment Analysis</td>
    <td>Week 5-7</td>
  </tr>
  <tr>
    <td>Build Model</td>
    <td>Week 8-10</td>
  </tr>
  <tr>
    <td>Evaluate Model</td>
    <td>Week 11-12</td>
  </tr>
  <tr>
    <td>Deploy Model</td>
    <td>Week 13-14</td>
  </tr>
</table>


## 🗂️ Resources


## 🛠️ Technical Specifications


## ⏲️ Timeline and Deliverables

## 🔍 Conclusion
