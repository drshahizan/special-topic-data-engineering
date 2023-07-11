<h1 align="center"> A Sentiment Analysis Study: <br></br>Exploring the Response of 'Mental Health' Tweets <a href="#" target="_blank" rel="noreferrer">  </a>   <br>
</h1>
<img src='https://monkeylearn.com/static/6700dcab9bcc691104dd0d794f6e7ef4/Sentiment-analysis-of-Twitter-Social.png'/>

# Table of Content
* [Introduction](#Introduction)
* [Background](#️Background)
* [Objectives](#Objectives)
* [Methodology](#️Methodology)
* [Data Analysis](#️Data-Analysis)
* [Fodler Structure](#️Folder-Structure)
* [Visualization](#️Visualization)
* [Insights](#️Insights)
* [Conclusion](#️Conclusion)

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

## Objectives
1.``Identifying Emotional States``: Sentiment analysis can help determine the emotional state of individuals discussing mental health topics on Twitter. It can reveal whether tweets express positive emotions or negative emotions related to mental health.

2.``Assessing Stigma and Awareness``: By analyzing sentiments in mental health-related tweets, sentiment analysis can provide insights into the level of stigma, awareness, and acceptance surrounding mental health issues. It can identify negative or stigmatizing language, misconceptions, or barriers that individuals may face when discussing or seeking help for mental health concerns.

3.``Monitoring Public Discourse``: Sentiment analysis can track the sentiment and attitudes of the general public towards mental health topics. It helps understand societal perceptions, opinions, and discussions around mental health issues, such as depression, anxiety, or therapy.

4.``Early Detection and Intervention``:Twitter sentiment analysis can potentially assist in early detection and intervention for mental health issues. By identifying tweets with negative sentiments indicative of distress or crisis, it may be possible to reach out to individuals with appropriate resources or support.



## Methodology
1.``Data Collection``: assemble a dataset of tweets about mental health. This was accomplished by using the Twitter API to gather tweets with pertinent mental health hashtags or keywords. There are enough different tweets in the dataset to guarantee a representative sample.

2.``Data Preprocessing``: Clean the collected tweets to remove noise and irrelevant information. This involves removing URLs, mentions, special characters, and emojis. Additionally, perform text normalization techniques like lowercase conversion, removing stopwords, and handling abbreviations or slang to standardize the text.

3.``Sentiment Labeling``: Apply the trained model to classify the sentiment of each tweet in the dataset. The model assigns a sentiment label (positive, negative, or neutral) to each tweet based on its learned patterns and the extracted features.

4.``Sentiment Analysis``:Extracted the relevant features from the preprocessed tweets.

5.``Visualization and Analysis``:Analyzed the sentiment distribution and patterns in the dataset. Generate visualizations using Power BI sofware to produce related intrepretation. 

6.``Interpretation and Insights``:Interpreted the results to extract meaningful insights from the sentiment analysis. Also, identifies prevalent sentiment patterns, explore the relationship between sentiment and specific mental health issues, and detect influential voices or communities. This information can provide valuable insights for mental health organizations, policymakers, and individuals seeking support.



## Data Analysis
1.``Data Scraping ``: Data Scraping was made using snscrape. To scrape data from Twitter, access to the Twitter API (Application Programming Interface) was required. The API provides developers with access to Twitter's data, allowing them to retrieve tweets based on specific criteria, such as keywords, hashtags, or user profiles. We also determined the search parameters for collecting tweets related to mental health. This includes identifying relevant keywords, hashtags, or user profiles associated with mental health topics. For example, keywords like "mental health was used to retrieve tweets related to mental health discussions.

2.``Data Cleaning and Preprosessing``: Data Cleaning and Preprosessing such as  text cleaning, tokenization, stopword, lemmatization. Removed the irrelevant information from the collected tweets, such as URLs, mentions, hashtags, special characters, or emojis. These elements do not contribute to sentiment analysis and can introduce noise into the data. Tokenize the tweet text by breaking it down into individual words or tokens. Tokenization is a crucial step in natural language processing (NLP) that enables further analysis at the word level.

3.``Exploratory Data Analysis (EDA) and Visualization``: Exploratory Data Analysis (EDA) and Visualization using pandas, plotly. Analyzed the distribution of sentiments in the dataset. Generate visualizations, such as bar charts or pie charts, to display the proportions of positive, negative, and neutral sentiments. This provides an overview of the sentiment landscape surrounding mental health discussions on Twitter. Conduct word frequency analysis to identify the most frequently used words or terms in the dataset. Generate word clouds or bar charts displaying the top words to understand the prevalent topics and themes associated with mental health. This analysis can highlight common concerns, keywords, or hashtags that resonate with Twitter users.

4.``Sentiment Analysis``:Extracted the relevant features from the preprocessed tweets. Once the text is preprocessed, sentiment classification models are used to assign sentiment labels to each tweet. The sentiment labels typically include positive, negative, or neutral, indicating the sentiment expressed in the tweet. After the sentiment classification model is applied to the tweets, sentiment scores can be assigned to quantify the intensity or polarity of the sentiment expressed in each tweet. Sentiment scores can range from -1 (most negative) to 1 (most positive). These scores provide a more nuanced understanding of sentiment variations within the dataset.

## Folder Structure
For DataSphere Project, the folder structure is as follows:

```
📁group_id
├── 📄index.php
├── 📁css
│   └── 📄core.css
│   └── 📄font-awesome.min.css
│   └── 📄icon-font.min.css
│   └── 📄ie.css
│   └── 📄loader.css
│   └── 📄normalize.css
│   └── 📄style.css
│   └── 📄style1.css
├── 📁js
│   ├── 📄jquery.js
│   ├── 📄core.js
│   ├── 📄plugins.js
│   ├── 📄process.js
│   ├── 📄layout-settings.js
│   ├── 📄main.js
│   └── 📄script.min.js
│   └── 📄jquery.countdown.min.js
├── 📁includes
│   ├── 📄dbconnect.php
│   ├── 📄adminSession.php
│   ├── 📄userSession.php
│   ├── 📄logout.php
│   ├── 📄loginprocess.php
│   ├── 📄registerprocess.php
│   └── 📄headerAdmin.php
│   └── 📄headerUser.php
│   └── 📄footerAdmin.php
│   └── 📄footeruser.php
├── 📁images
│   ├── 📁flakes
│   │   ├── 📁depth1
│   │   │   ├── 📄comment.png
│   │   │   ├── 📄heart.png
│   │   │   ├── 📄share.png
│   │   ├── 📁depth2
│   │   │   ├── 📄comment.png
│   │   │   ├── 📄heart.png
│   │   │   ├── 📄share.png
│   │   ├── 📁depth3
│   │   │   ├── 📄comment.png
│   │   │   ├── 📄heart.png
│   │   │   ├── 📄share.png
│   │   ├── 📁depth4
│   │   │   ├── 📄comment.png
│   │   │   ├── 📄heart.png
│   │   │   ├── 📄share.png
│   │   ├── 📁depth5
│   │   │   ├── 📄comment.png
│   │   │   ├── 📄heart.png
│   │   │   ├── 📄share.png
│   ├── 📄background.jpg
│   └── 📄admin.svg
│   └── 📄cancel.svg
│   └── 📄github.svg
│   └── 📄person.svg
│   └── 📄DataSphere Box Logo light.svg
│   └── 📄DataSphere Box Logo.svg
│   └── 📄page-icon.svg
│   └── 📄menu-icon.svg
│   └── 📄DataSphere Logo.ico
│   └── 📄tweetBackground.png
│   └── 📄DataSphere Logo.png
│   └── 📄DataSphereProfil.png
├── 📁fonts
├── 📁pages
│   ├── 📄admin.php
│   ├── 📄login.php
│   ├── 📄loginError.php
│   ├── 📄register.php
│   ├── 📄user.php
├── 📁reporting
│   ├── 📄report.md
└── 📁database
    ├── 📄db_stde.sql

```

## Visualization
1. ``Landing Page:``
Users will be led to the landing page when they visit the website.  A landing page is a standalone web page designed to entice a specific audience to take action. Users can register an account to access the system or log in to their existing accounts.
<p align="center">
   <img width="947" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/submission/DataSphere/Interfaces/Landing%20Page.png">
</p>
<br></br>

2. ``User Registration Page:``
A user registration page is a web page where users can create a new account on a website. The page typically asks for the user's name, email address, password, and other personal information. Once the user has submitted the form, their account is created and they can log in to the website. 
<p align="center">
   <img width="947" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/submission/DataSphere/Interfaces/User%20Registration%20Page.png">
</p>
<br></br>

3. ``User Login Page:``
A user login page is a web page where users can enter their username and password to access a website. The page typically also has a link to the user registration page for users who do not yet have an account
<p align="center">
   <img width="947" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/submission/DataSphere/Interfaces/User%20Login%20Page.png">
</p>
<br></br>

4. ``User Dashboard & Page:``
Once the designated user has logged in, they will be directed to a dashboard. The dashboard contains the embedded Tableau Dashboard that we have created for data visualization.
<p align="center">
   <img width="947" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/submission/DataSphere/Interfaces/Admin%20Page%20%26%20Dashboard.png">
</p>
<br></br>

5. ``Embedded Tableau Dashboard:``
<p align="center">
   <img width="947" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/submission/DataSphere/Interfaces/Embedded%20Tableau%20Dashboard.png">
</p>
<br></br>

## Insights
1.``Stigma and Discrimination``: The sentiment analysis reveals that there is still a sizable level of discrimination and stigma surrounding mental health. Social exclusion and discrimination are common experiences for people with mental health issues, which can hinder their recovery and development.

2.``Awareness and Acceptance``: Positively, there has been a rise in understanding and acceptance of mental health issues in recent years. People are seeking professional assistance and are more open about their experiences with mental illness. As a result, attitudes in favour of mental health have elevated.

3.``Emotional Support``: People who seek mental health therapy benefit greatly from the emotional support of their communities. The atmosphere surrounding mental health is changing as friends and family become more conscious of the value of assistance when it comes to mental health.

4.``Treatment Options``: More people are becoming aware of the various ways to manage mental health issues. People are more inclined to seek professional assistance than to self-medicate, which has increased public support for mental health care.

5.``Stressed Work Environments``: The workplace is one place where there has been a rise in unfavourable attitudes. Long working hours and high levels of pressure have become increasingly common, which has increased the prevalence of mental health issues. As a result, there is now more disapproval of concerns with workplace mental health.

6.``Peer Pressure``: Based on the sentiment analysis, a huge number of individuals feel pressured to fit in with others or conform to social norms.The pressure to interact and blend in with the society has been increasing and this led to the increasing negative comments and tweets about their mental health.


## Conclusion

<p align="justify">
In conclusion, Twitter sentiment analysis focused on mental health provides valuable insights into public sentiment, attitudes, and perceptions, shedding light on prevailing sentiments, prevalent topics, temporal trends, influential voices, and regional variations. By leveraging these insights, we can reduce stigma, improve support networks, and foster a more compassionate society. This analysis allows us to develop targeted interventions, guide awareness campaigns, and make informed decisions to promote mental well-being. While acknowledging the limitations, Twitter sentiment analysis holds immense potential for creating positive change by fostering understanding, supporting individuals, and driving impactful initiatives for mental health in our society.
</p>



