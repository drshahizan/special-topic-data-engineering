<h1 align="center">Food Influencer Tiktok Analytics Dashboard <br></br<a href="#" target="_blank" rel="noreferrer">  </a>   <br>
</h1>
<img src=''/>

<table align=center>
  <tr>
    <th>Name</th>
    <th>Matric No.</th>
  </tr>
  <tr>
    <td>MYZA NAZIFA BINTI NAZRY</td>
    <td>A20EC0219</td>
  </tr>
  <tr>
    <td>NUR IZZAH MARDHIAH BINTI RASHIDI</td>
    <td>A20EC0116</td>
  </tr>
    <tr>
    <td>AMIRAH RAIHANAH BINTI ABDUL RAHIM</td>
    <td>A20EC0182</td>
  </tr>
    <tr>
    <td>RADIN DAFINA BINTI RADIN ZULKAR NAIN</td>
    <td>A20EC0135</td>
  </tr>
</table>

# Table of Content
* [Introduction](#-introduction)
* [Background](#️-background)
* [Objectives](#-objectives)
* [Methodology](#️-methodology)
* [Data Analysis](#️-data-analysis)
* [Fodler Structure](#️-folder-structure)
* [Visualization](#️-visualization)
* [Insight](#️-insight)
* [Conclusion](#️-conclusion)

## Introduction
In today's dynamic digital landscape, social media platforms have become influential stages for creators and influencers to captivate audiences and make a mark in their respective industries. Among these platforms, TikTok has emerged as a powerhouse, offering a vibrant space for food influencers to showcase their culinary prowess and engage with millions of viewers.

The purpose of this report is to provide a comprehensive analysis of the performance and impact of Top 22 Food Influencer on TikTok. By leveraging data-driven insights and analytics, we aim to gain a deeper understanding of Food Influencer's audience demographics, engagement metrics, content trends, and overall growth. Through this report, we seek to provide valuable information to help Food Influencer optimize their content strategy and enhance their influence in the realm of food-centric TikTok content.
## Background
## Objective
* Caption Analysis: By analyzing Food Influencer's caption usage, we aim to evaluate the effectiveness of their content narratives and storytelling techniques. This includes examining factors such as caption length, tone, language style, and call-to-action elements. Understanding the impact of captions will enable Food Influencer's to craft engaging and compelling narratives that resonate with their audience.

* Hashtag Evaluation: Assessing Food Influencer's hashtag usage is crucial in optimizing content discoverability and increasing reach. We will analyze the types of hashtags utilized, their relevance to the content, and their popularity among TikTok users. This analysis will help Food Influencer's identify effective hashtag strategies and ensure their content is reaching the intended target audience.

* Engagement and Reach: By correlating caption and hashtag usage with engagement metrics such as likes, comments, shares, and video views, we can evaluate the impact of captions and hashtags on audience engagement and content reach. This analysis will uncover patterns and trends that contribute to higher engagement rates, enabling Food Influencer's to refine their approach and maximize the impact of their content.
## Methodology
<h4>1. Data Scraping using TiktokPy API</h4>

Firstly, to gather the data for our Data Science project we use TiktokPy API to get live data from Tiktok. Data retrieved includes Username, Caption, Video Duration, Upload Date, Comment, Plays, Shares, Likes and Hashtags. API used is from 📂[TiktokPy](https://my-tailwind-nextjs-starter-blog.vercel.app/blog/how-to-use-tiktokpy-for-beginner-programmers-indepth-guide).
* Steps :
1. Open Visual Studio and create quicklogin.py.
   
<div align = "center"><img width="1120" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/d57585f9-2749-4ad3-8852-cbb3546dd875"> </div>
2. Create quickstart.py that contains attributes to be fetch from TikTok.

<div align = "center"> <img width="1120" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/3545a35d-a4a4-4620-a276-3911637dbb2e">  </div>
3. In terminal run this command.

<div align = "center"> <img width="618" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/d2bb5d93-377b-4050-9469-2115e006683e">  </div>

4. The command will redirect to TikTok page and sign in required.
   
<div align = "center"> <img width="962" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/15674542-0227-4a4a-a53a-ffe6231219d0">  </div>
6. Next, run this command.

<div align = "center"> <img width="559" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/dd5330b3-121e-4d47-9c06-7b9bc828ab82">  </div>
7. Then, it will retrieve the data like below and save it to CSV file.
<div align = "center"> <img width="814" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/eba37ebe-f289-4be6-b0db-75f4846ef5d5">  </div>
8. Data scraping using TiktokPy API done.

<h4>2. Data Integration using Azure Data Factory</h4>
Next, since the API scraping require multiple times of scraping so the data are saved into different CSV files. Hence, integration of files need to be done for further analysis on the data. We used Azure Data Factory to integrate our CSV files.
<div align = "center"> <img width="816" alt="image" src="images/azure.jpeg"></div>

<h4>3. Data Cleaning and Transformation</h4>
After data integration, now the data need to be clean and transformed to gain better analytics from it. We used Python to clean the data and Google Collab as our text editor.

1.  Open Google Collab

2. Upload the CSV file of the data into Google Drive.
   
3. Import the file into Google Collab as below.
<img width="816" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/f3e080c8-3a5f-4172-b02e-cdc296b593fd">

4. Transform the data into python dataframe.
<img width="861" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/2f955c2f-acb5-40f3-a8be-cde21d68a5f2">

5. Begin the cleaning by checking duplicates, null values, remove emojis, drop null values and remove undefined characters.
* Check null and remove duplicates.
<img width="805" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/5b1ebd51-b3e1-46e3-b6bd-a7b89c2e563f">

* Drop null values.
<img width="499" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/2cf0384f-0c83-452e-a572-16156d23221c">

* Remove emoji.
<img width="1027" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/85e73548-5882-49f1-93df-bf497da0563f">

* Remove undefined characters.
<img width="724" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/4fa9ea0c-1ede-4786-81c1-976a4deea6fa">

6. Change datatype of Upload Date from seconds to datetime format.
<img width="680" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/5e15e5bf-6bf9-4d88-a055-9c1fb164e4fe">

7. Extract hashtags from captions to another column.
<img width="694" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/0eff1378-bbeb-4288-918e-25ebb3216219">

8. Export clean data to CSV files.
<img width="529" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/73205963/de76a543-5ae1-486d-92d5-ecf7c87a6e16">

By following these steps, we successfully retrieved data from TikTok using the TiktokPy API, integrated the data using Azure Data Factory, and performed data cleaning and transformation using Python and Google Colab. This prepared the data for further analysis and insights in our Data Science project.

<h4>4. Data Visualization</h4>
Importing Data into Power BI:

1.  Open Power BI Desktop.
* Click on "Get Data" and choose the appropriate data source (e.g., Excel, CSV, or a database).
* Connect to the dataset that contains the scraped attributes of the food influencers.
* Perform any required data transformations using the Power Query Editor.

2. Designing Visualizations

* Choose the appropriate visualizations to represent the data (e.g., bar charts, line charts, pie charts, etc.).
* Create visualizations to showcase engagement metrics by username, video duration, upload date, or other relevant attributes.
* Customize the appearance, labels, and formatting of the visualizations to enhance clarity and aesthetics.

3. Create a Dashboard for each users (Content Creator, Marketing Agency, Administrator):

* Add the visualizations to a new or existing dashboard.
* Arrange the visualizations to create an intuitive and visually appealing layout.
* Add any additional elements, such as titles, text boxes, or images, to provide context or branding.

<h5>Content Creator Dashboard</h5>
<div align = "center"> <img width="816" alt="image" src="images/dashboard_contentcreator.jpg"></div>

<h5>Marketing Agency Dashboard</h5>
<div align = "center"> <img width="816" alt="image" src="images/dashboard_marketing.jpg"></div>

<h5>Admin Dashboard</h5>
<div align = "center"> <img width="816" alt="image" src="images/dashboard_admin.jpg"></div>

4. Publish the Dashboard to Power BI Service

* Click on "Publish" in Power BI Desktop.
* Sign in to Power BI account using @live.utm email.
<div align = "center"> <img width="816" alt="image" src="images/powerbi.jpeg"></div>

<h4>5. Embed the Dashboard into Website</h4>
* Open the Power BI service and navigate to the workspace where you published the dashboard.
* Click on the ellipsis (...) next to the dashboard and select "Embed".
* Configure the embed options, such as the size, filtering options, and interaction settings.
* Generate the embed code.
* Copy the generated embed code and paste it into the appropriate section of our website's HTML code.

## Insight
## Conclusion




