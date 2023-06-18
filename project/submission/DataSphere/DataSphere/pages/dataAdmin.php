<?php 
include '../includes/adminSession.php'; 
if(!session_id())
{
  session_start();
}

include '../includes/dbconnect.php';
include '../includes/headerAdmin.php'; 

?>              
               
                
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>About Data</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Data</li>
                </ol>
            </nav>
        </div>
        
    </div>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div>
        <h4>Background</h4>
    </div>
    <br />
    <div style="text-align: justify;">
        <p>
            The sentiment analysis project focused on analyzing mental health-related discussions and 
            sentiments expressed on Twitter. Twitter serves as a valuable platform for individuals to 
            share their thoughts, experiences, and emotions related to mental health. By scraping and analyzing 
            tweets from Twitter, this project aimed to gain insights into the sentiment and attitudes surrounding mental 
            health topics on the platform.
        </p>
        <p>
            Mental health is a critical aspect of overall well-being, and it has garnered increased attention in recent years. 
            Understanding the sentiments expressed by individuals on social media platforms like Twitter provides a unique 
            opportunity to explore public perceptions, experiences, and reactions to mental health issues.
        </p>
        <p>
            By leveraging sentiment analysis techniques, this project sought to uncover important insights. 
            These insights include identifying prevalent sentiment trends, understanding the emotional impact of specific 
            mental health topics, detecting influential or viral tweets, and observing how sentiment evolves over time. 
            These findings can contribute to a more comprehensive understanding of public sentiment towards mental health, 
            help identify areas where support may be lacking, and inform efforts aimed at destigmatizing mental health and promoting well-being.
        </p>
        <p>
            The data for this project was collected using web scraping techniques, specifically utilizing tools such as Snscrape to retrieve tweets 
            based on mental health-related keywords or hashtags. The collected tweets were then preprocessed, 
            removing irrelevant information and normalizing the text, before being subjected to sentiment analysis algorithms.
        </p>
    </div>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div>
        <a href="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/submission/DataSphere/Cleanedtweets_df.csv">Download Cleanedtweets_df.csv</a>
    </div>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div>
        <table class="table">
            <tr>
            <th>Attribute</th>
            <th>Description</th>
            </tr>
            <tr>
            <td>User</td>
            <td>Description of the Twitter user who posted the tweet related to mental health.</td>
            </tr>
            <tr>
            <td>Date Created</td>
            <td>Date and time when the tweet related to mental health was posted.</td>
            </tr>
            <tr>
            <td>Number of Likes</td>
            <td>The count of likes or favorites received by the tweet related to mental health.</td>
            </tr>
            <tr>
            <td>CleanedTweet</td>
            <td>The processed version of the tweet, after removing unnecessary characters or noise.</td>
            </tr>
            <tr>
            <td>Sentiment</td>
            <td>The sentiment analysis result of the tweet, indicating whether it is positive, negative, or neutral.</td>
            </tr>
            <tr>
            <td>Polarity</td>
            <td>The polarity score of the tweet's sentiment, representing the degree of positivity or negativity.</td>
            </tr>
        </table>
    </div>
</div>


<?php include '../includes/footeruser.php'; ?>