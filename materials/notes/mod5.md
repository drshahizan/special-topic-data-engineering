<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

<!---
Module X: XXX

Group XXXX
1. XXXX
2. XXXX
3. XXXX
4. XXXX

-->
<h1 align='center'>GROUP RIVERTION</h1>
<table align='center'>
  <tr>
    <th>Name</th>
    <th>Matric</th>
  </tr>
  <tr>
    <td>ADAM WAFII BIN AZUAR</td>
    <td>A20EC0003</td>
  </tr>
  <tr>
    <td>AHMAD MUHAIMIN BIN AHMAD HAMBALI</td>
    <td>A20EC0006</td>
  </tr>
    <tr>
    <td>FARAH IRDINA BINTI AHMAD BAHARUDIN</td>
    <td>A20EC0035</td>
  </tr>
    <tr>
    <td>MUHAMMAD DINIE HAZIM BIN AZALI</td>
    <td>A20EC0084</td>
  </tr>
  <tr>
    <td>MIKHEL ADAM BIN MUHAMMAD EZRIN</td>
    <td>A20EC0237</td>
  </tr>
</table>

# Module 5: Data Wrangling

### Contents:
- [What is Data Wrangling?](#What-is-Data-Wrangling?)
- [Importance of Data Wrangling](#Importance-of-Data-Wrangling)
- [Steps in Data Wrangling](#Steps-in-Data-Wrangling)
- [Benefits of Data Wrangling](#Benefits-of-Data-Wrangling)
- [Data Wrangling Tools](#Data-Wrangling-Tools)
- [Data Wrangling Examples](#Data-Wrangling-Examples)

### Others
- [Let’s Understand All About Data Wrangling!](https://www.analyticsvidhya.com/blog/2021/08/lets-understand-all-about-data-wrangling/)
- [Mastering the Art of Data Wrangling: A Comprehensive Guide](https://www.projectpro.io/article/data-wrangling/806)


## What is Data Wrangling?
<p align='center'>
<img src= "https://y6h4c7e5.rocketcdn.me/wp-content/uploads/2018/09/What-is-Data-Wrangling-1024x538.jpg" height=200 width=400/>
</p>

  Data wrangling, also referred to as data munging, involves the manipulation, cleaning, and restructuring of raw data to make it more accessible and suitable for analysis. With the ever-expanding volume and diversity of available data sources, the need to store and organize large amounts of data for analysis has become increasingly important.

  The process of data wrangling entails tasks such as reorganizing data, transforming its structure, and mapping it from its initial raw form to a more usable and valuable format for various downstream applications, including analytics.

  In essence, data wrangling can be described as the process of refining and preparing raw data by eliminating errors, organizing it effectively, and converting it into the desired format. This enables analysts to utilize the data efficiently for timely decision-making. Data wrangling, also known as data cleaning or data munging, offers several benefits to businesses, including the ability to handle complex data more efficiently, produce more accurate results, and make better-informed decisions. The specific methods employed in data wrangling may vary depending on the project requirements and the nature of the data involved. Increasingly, organizations are turning to data wrangling tools to streamline the preparation of data for downstream analytics.


## Importance of Data Wrangling
The use of data wrangling software has become indispensable in data processing. The primary importance of employing data wrangling tools can be summarized as follows:

1. ``Making raw data usable``: Accurate data wrangling ensures that high-quality data is fed into downstream analysis.
2. ``Centralizing data from various sources``: Data wrangling facilitates the consolidation of data from different sources into a centralized location for effective utilization.
3. ``Transforming raw data into the required format``: Data wrangling involves restructuring raw data according to the desired format while considering the business context.
4. ``Leveraging automated data integration tools``: These tools enable data wrangling techniques that clean and convert source data into a standardized format, allowing for repeated usage based on end requirements. Businesses rely on this standardized data for essential cross-data set analytics.
5. ``Cleansing data from noise, errors, or missing elements``: Data wrangling plays a crucial role in preparing the data for the subsequent data mining process, which involves gathering and making sense of the data.
6. ``Facilitating concrete and timely decision-making for business users.``
7. ``Following a structured data wrangling process``: Typically, data wrangling software goes through iterative steps of discovery, structuring, cleaning, enriching, validating, and publishing the data before it is deemed ready for analytics.


## Steps in Data Wrangling
Data wrangling is an iterative process, much like other data analytics processes, where data engineers go through several steps to achieve the desired outcomes. The data wrangling process typically consists of six broad steps:

<p align='center'>
<img src= "https://favtutor.com/resources/images/uploads/mceu_10803305011610341935795.jpg" height=300 width=600/>
</p>

<table>
  <tr>
    <th>Steps</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Discovering</td>
    <td>In this initial step, the data is analyzed to identify criteria for dividing and categorizing the data. It involves exploring and understanding the data before proceeding with any transformations or imputations.</td>
  </tr>
  <tr>
    <td>Structuring</td>
    <td>Raw data often lacks a structured format, especially when it comes to user information. In this step, the data is restructured to align with the analytical methods employed. It may involve splitting columns, creating new features, or rearranging rows to facilitate easier analysis. This step is sometimes referred to as feature engineering.</td>
  </tr>
  <tr>
    <td>Cleaning</td>
    <td>Processed datasets often contain outliers or inconsistencies that can affect the accuracy of analysis. The cleaning step involves thoroughly addressing these issues to ensure high-quality data. It includes handling null values, standardizing formatting, and performing any necessary data cleansing operations.</td>
  </tr>
  <tr>
    <td>Enriching</td>
    <td>After processing and cleaning the data, there might be a need to enrich it further. This step involves assessing the data and deciding whether to upscale, downsample, or apply data augmentation techniques. Resampling methods can be used to adjust the data distribution, such as downsampling to reduce the data size or upsampling to create synthetic data.</td>
  </tr>
  <tr>
    <td>Validating</td>
    <td>Validation refers to the iterative process of verifying the consistency and quality of the processed data. It includes checking the accuracy of field values, validating data integrity, and assessing whether the attributes follow a normal distribution or meet predefined criteria. Validation steps ensure that the data is reliable and suitable for analysis.</td>
  </tr>
  <tr>
    <td>Publishing</td>
    <td>The final step of data wrangling involves making the processed and transformed data available for further use. The wrangled data is published or shared, allowing it to be utilized in downstream applications or analysis. It may involve documenting the entire data wrangling process for easy reference by users and clients.</td>
  </tr>
</table>

## Benefits of Data Wrangling
Data wrangling offers several benefits that can help organizations to derive insights and value from their data. Here are some of the key benefits of data wrangling:

1. ``Improve data usability (converts data into a compatible format)``: By performing tasks such as removing duplicates, handling missing data, and converting data types, it helps to ensure that the data is in a format that is compatible with the end system, making it easier to work with and analyze. This can help to improve the accuracy and reliability of any insights or conclusions drawn from the data.
2. ``Quickly build and automate data-flow process``: Data wrangling tools often come with an intuitive user interface that enables users to quickly build data flows. With an intuitive user interface, users can easily visualize and modify the data flows as needed. Additionally, data wrangling tools often provide the ability to schedule and automate data flows, which can save time and effort.
3. ``Integrate various types of information and their sources``: Data wrangling handles a variety of data sources, including databases, web services, files, and more. This means that users can easily integrate data from different sources and combine it into a single dataset. For example, a user may want to combine sales data from a database with customer data from a web service. With a data wrangling tool, this can be easily accomplished.
4. ``Help users to process very large volumes of data``: With data wrangling tools, users can easily handle large datasets and perform complex operations on them. Additionally, data wrangling tools often provide the ability to share data-flow techniques with others, which can help to promote collaboration and knowledge sharing among team members. This can be especially helpful in organizations where multiple people are working with the same data.


## Data Wrangling Tools
Data wrangling typically involves using a variety of tools to transform, clean, and prepare data for analysis. Here are some of the key tools used in data wrangling:

<table>
  <tr>
    <th>Tools</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Excel Power Query / Spreadsheets</td>
    <td>Basic manual structure wrangling tool.</td>
  </tr>
  <tr>
    <td>OpenRefine</td>
    <td>Contains more sophisticated solutions, requires programming.</td>
  </tr>
  <tr>
    <td>Google DataPrep</td>
    <td>Suitable for data exploration, cleaning, and feature engineering.</td>
  </tr>
  <tr>
    <td>Tabula</td>
    <td>Suitable for all kinds of data.</td>
  </tr>
  <tr>
    <td>DataWrangler</td>
    <td>Suitable for data cleaning and transformation.</td>
  </tr>
  <tr>
    <td>CSVKit</td>
    <td>Suitable for converting data.</td>
  </tr>
</table>


## Data Wrangling Examples
Data wrangling techniques are used for various use-cases. The most commonly used examples of data wrangling are for:

<ul>
  <li>Merging several data sources into one data-set for analysis</li>
  <li>Identifying gaps or empty cells in data and either filling or removing them</li>
  <li>Deleting irrelevant or unnecessary data</li>
  <li>Identifying severe outliers in data and either explaining the inconsistencies or deleting them to facilitate analysis</li>
</ul>

Businesses also use data wrangling tools to:

<ul>
  <li>Detect corporate fraud</li>
  <li>Support data security</li>
  <li>Ensure accurate and recurring data modeling results</li>
  <li>Ensure business compliance with industry standards</li>
  <li>Perform Customer Behavior Analysis</li>
  <li>Reduce time spent on preparing data for analysis</li>
  <li>Promptly recognize the business value of your data</li>
  <li>Find out data trends</li>
</ul>


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)


