<h1 align="center"> A Sentiment Analysis Study: <br></br>Exploring the Emotional Response of Mental Health <a href="#" target="_blank" rel="noreferrer">  </a>   <br>
</h1>
<img src='https://monkeylearn.com/static/6700dcab9bcc691104dd0d794f6e7ef4/Sentiment-analysis-of-Twitter-Social.png'/>

# Table of Content
* [Introduction](#-introduction)
* [Background](#️-background)
* [Objectives](#-objectives)
* [Methodology](#️-methodology)
* [Data Analysis](#️-data-analysis)
* [Visualization](#️-visualization)
* [Conclusion](#️-conclusion)

## Introduction
<p align="justify">
In recent years, social media platforms like Twitter have become a rich source of data for understanding public sentiment and opinions on various topics. When it comes to mental health, Twitter sentiment analysis holds immense potential to uncover the prevailing attitudes, emotions, and experiences shared by users in this digital space. By harnessing the power of natural language processing (NLP) techniques and machine learning algorithms, sentiment analysis on Twitter can provide valuable insights into the sentiment distribution surrounding mental health discussions.
</p>

<p align="justify">
The importance of understanding public sentiment towards mental health cannot be overstated. Mental health is a topic that affects millions of individuals worldwide, and reducing stigma and improving support networks are critical for promoting well-being and enabling individuals to seek help when needed. By examining the sentiment expressed in tweets about mental health, we can gain valuable insights into public opinion, awareness levels, and societal perceptions.
</p>

<p align="justify">
Through this analysis, we aim to address key questions such as: What are the prevalent sentiments associated with mental health discussions on Twitter? Are there specific mental health issues or topics that elicit more positive or negative sentiments? How does sentiment evolve over time in response to various events or initiatives related to mental health? By answering these questions, we can identify patterns, trends, and potential areas for intervention and improvement.
</p>


## Background
<p align="justify">
The sentiment analysis project focused on analyzing mental health-related discussions and sentiments expressed on Twitter. Twitter serves as a valuable platform for individuals to share their thoughts, experiences, and emotions related to mental health. By scraping and analyzing tweets from Twitter, this project aimed to gain insights into the sentiment and attitudes surrounding mental health topics on the platform.
</p>

<p align="justify">
Mental health is a critical aspect of overall well-being, and it has garnered increased attention in recent years. Understanding the sentiments expressed by individuals on social media platforms like Twitter provides a unique opportunity to explore public perceptions, experiences, and reactions to mental health issues.
</p>

<p align="justify">
By leveraging sentiment analysis techniques, this project sought to uncover important insights. These insights include identifying prevalent sentiment trends, understanding the emotional impact of specific mental health topics, detecting influential or viral tweets, and observing how sentiment evolves over time. These findings can contribute to a more comprehensive understanding of public sentiment towards mental health, help identify areas where support may be lacking, and inform efforts aimed at destigmatizing mental health and promoting well-being.
</p>

<p align="justify">
The data for this project was collected using web scraping techniques, specifically utilizing tools such as Snscrape to retrieve tweets based on mental health-related keywords or hashtags. The collected tweets were then preprocessed, removing irrelevant information and normalizing the text, before being subjected to sentiment analysis algorithms.
</p>

## Objective
1.``Identifying Emotional States``: Sentiment analysis can help determine the emotional state of individuals discussing mental health topics on Twitter. It can reveal whether tweets express positive emotions or negative emotions related to mental health.

2.``Assessing Stigma and Awareness``: By analyzing sentiments in mental health-related tweets, sentiment analysis can provide insights into the level of stigma, awareness, and acceptance surrounding mental health issues. It can identify negative or stigmatizing language, misconceptions, or barriers that individuals may face when discussing or seeking help for mental health concerns.

3.``Monitoring Public Discourse``: Sentiment analysis can track the sentiment and attitudes of the general public towards mental health topics. It helps understand societal perceptions, opinions, and discussions around mental health issues, such as depression, anxiety, or therapy.

4.``Early Detection and Intervention``:Twitter sentiment analysis can potentially assist in early detection and intervention for mental health issues. By identifying tweets with negative sentiments indicative of distress or crisis, it may be possible to reach out to individuals with appropriate resources or support.



## Methodology
1.``Data Collection``: Obtain a dataset of tweets related to mental health topics. This was done by utilizing the Twitter API to collect tweets containing relevant hashtags or keywords of mentalhealth. The dataset includes a sufficient number of diverse tweets to ensure a representative sample.

2.``Data Preprocessing``: Clean the collected tweets to remove noise and irrelevant information. This involves removing URLs, mentions, special characters, and emojis. Additionally, perform text normalization techniques like lowercase conversion, removing stopwords, and handling abbreviations or slang to standardize the text.

3.``Sentiment Labeling``: Apply the trained model to classify the sentiment of each tweet in the dataset. The model assigns a sentiment label (positive, negative, or neutral) to each tweet based on its learned patterns and the extracted features.

4.``Sentiment Analysis``:Extracted the relevant features from the preprocessed tweets.

5.``Visualization and Analysis``:Analyzed the sentiment distribution and patterns in the dataset. Generate visualizations using Power BI sofware to produce related intrepretation. 

6.``Interpretation and Insights``:Interpreted the results to extract meaningful insights from the sentiment analysis. Also, identifies prevalent sentiment patterns, explore the relationship between sentiment and specific mental health issues, and detect influential voices or communities. This information can provide valuable insights for mental health organizations, policymakers, and individuals seeking support.



## Data Analysis
1.``Data Scraping ``: Data Scraping was made using snscrape

2.``Data Cleaning and Preprosessing``: Data Cleaning and Preprosessing such as  text cleaning, tokenization, stopword, lemmatization - nltk

3.``Exploratory Data Analysis (EDA) and Visualization``: Exploratory Data Analysis (EDA) and Visualization using pandas, plotly

4.``Sentiment Analysis``:Extracted the relevant features from the preprocessed tweets.


## Visualization

## Conclusion

<p align="justify">
In conclusion, Twitter sentiment analysis focused on mental health provides valuable insights into public sentiment, attitudes, and perceptions, shedding light on prevailing sentiments, prevalent topics, temporal trends, influential voices, and regional variations. By leveraging these insights, we can reduce stigma, improve support networks, and foster a more compassionate society. This analysis allows us to develop targeted interventions, guide awareness campaigns, and make informed decisions to promote mental well-being. While acknowledging the limitations, Twitter sentiment analysis holds immense potential for creating positive change by fostering understanding, supporting individuals, and driving impactful initiatives for mental health in our society.
</p>



