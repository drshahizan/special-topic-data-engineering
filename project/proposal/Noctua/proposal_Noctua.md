<div>
<h1 align = 'center'><b>Cafe Satisfactory	:pizza: <br> Monitor google review about customer satisfaction on cafes in Johor.</b></h1>
  </div>

---

## Table of Contents
- [Executive Summary](#executive-summary)
- [Background](#background)
- [Goals and Objectives](#goals-and-objectives)
- [Scope](#scope)
- [Methodology](#methodology)
- [System Architecture](#system-architecture)
- [Risks and Limitations](#risks-and-limitations)
- [Deliverables and Milestones](#deliverables-and-milestones)
- [Resources](#resources)
- [Technical Specifications](#technical-specifications)
- [Timeline and Deliverables](#timeline-and-deliverables)
- [Conclusion](#conclusion)
---

## Key components
The following are the key components of a data science project proposal:

## Executive Summary

Restaurant reviews from Google are often used to survey places for customers that want to try that place out. We will perform an analysis on the reviews to determine whether it is positive or the opposite. From the analysis, we can conclude if a customer was satisfied with the service that was offered by the restaurant. Users who are searching for restaurants or places to eat will be able to find one not only by the ratings, but also with added criterias and information given or extracted from the review. 

---

## Background
<p align="center">
<img src="https://i.pinimg.com/originals/aa/a6/84/aaa684fc7767831dde31a5b7e855565a.jpg" alt="Paris" height="250"></img>
</p>
In today's fast-paced society, people are constantly on the go and looking for convenient places to grab a quick meal or drink. Cafes have become a popular choice for people who want to relax, work, or socialize while enjoying a cup of coffee or a tasty treat. However, with so many cafes to choose from, it can be challenging for customers to find the right one that meets their needs and expectations.

Other problem include rating systems that usually do not tell the whole story, sentiment and feeling of reviewer towards the cafe. With this system, we will extract more information to users through text analysis algorithms.

As a result, `customer satisfaction` has become a crucial factor in the success of cafes. In this project, we aim to monitor the Google reviews about customer satisfaction on cafes in Johor using NLP. NLP is a subfield of `artificial intelligence` that deals with the interaction between computers and human language.

However, existing rating systems that usually do not tell the whole story, sentiment and feeling of reviewer towards the cafe. With this system, we will extract more information to users through text analysis algorithms.

By analyzing the text data from Google reviews, we can `identify the common themes and sentiments` expressed by customers, such as the quality of food and beverages, the level of service, the ambiance, and the value for money. We can also `extract insights` on specific aspects of customer satisfaction, such as the frequency of positive and negative reviews, the average rating, and the most common keywords used.

Overall, this project aims to provide insights into the customer satisfaction of cafes in Johor and help cafe owners and managers make data-driven decisions to `improve their services and offerings`.

---

## Goals and Objectives

Problem Statement:
Customer reviews do not always show the true meaning. It can make other customers misunderstand the views of those customers who might want to try the cafe. Newer customers might find some reviews unreliable after trying out themselves. There are also some people who wanted to downgrade the cafe by intentionally giving negative reviews. The cafe owner also might want to improve their services thus, a reliable review might help them. 

The significance of this project lies in its potential to provide valuable insights into the customer satisfaction of cafes in Johor. Cafe owners and managers can use these insights to improve their services and offerings, such as by addressing specific complaints or negative feedback, enhancing the quality of their products, and improving the overall customer experience.

- To determine whether the reviews were positive or negative. 
- To determine the most ordered and recommended meal from each cafe.
- To analyze the percentage used word based on the reviews. 
- To train a model that can successfully identify a positive or negative review
- To ensure the review made by users is reliable based on our model’s outcome 

In this project, we aim to monitor the Google reviews about customer satisfaction on cafes in Johor using Natural Language Processing (NLP). .

---

## Scope: 
The aim of this project is to monitor Google reviews of cafes in Johor Bharu, Malaysia to gain insights into customer satisfaction levels and identify common themes in customer feedback. To achieve this, we will collect data from Google My Business, which will provide access to a large volume of reviews for cafes in the Johor Bharu area. To achieve the result in question, here are the project scope statement that we will be using to our aid.

- 1. `Data Sources` Collect Google reviews of cafes in Johor Bharu, Malaysia using the `Enter data source here`
- 2. `Tools and Technologies` Use web scraping tools like BeautifulSoup or Scrapy to scrape the reviews from `Enter data source here`, and then utilize Natural Language Processing (NLP) techniques to perform sentiment analysis on the reviews
- 3. `Research Objectives` The objective of the research is to monitor customer satisfaction in cafes in Johor Bharu, Malaysia through analyzing the sentiment of the Google reviews, identifying the most commonly mentioned aspects of customers' experiences, and measuring overall customer satisfaction levels for each cafe.
- 4. `Sampling` Collect reviews of cafes that are located in Johor Bharu, Malaysia, and only include reviews that have been posted within the last `Enter duration here`.
- 5. `Data Cleaning and Preparation` Clean the data by removing any irrelevant or duplicate reviews, correcting any spelling or grammar errors, and standardizing the format of the data.
- 6. `Analysis methods` Analyze the data using descriptive statistics, topic modeling, and sentiment analysis to identify common themes and patterns in customer feedback and to measure overall customer satisfaction levels.
- 7. `Reporting` Present the findings of the analysis in a report that includes charts and graphs to visualize the data, as well as a written summary of the key findings and recommendations for improving customer satisfaction in the cafes in Johor Bharu, Malaysia.
- 8. **If the format is wrong, change it at will** 

---

## Methodology:
- Methodology and the techniques that will be used
  1. `Data Collection:` The first step is to collect data on Google reviews about cafes in Johor. This can be done by using web scraping techniques to extract reviews from Google's API. Another option is to manually extract data by browsing Google reviews of cafes in Johor.

  2. `Data Cleaning:` Once the data is collected, it needs to be cleaned to remove any irrelevant or duplicate data. This can be done using data cleaning techniques such as removing punctuation, converting text to lowercase, and removing stop words.
  3. `Data Analysis:` After the data is cleaned, the next step is to analyze the data using descriptive statistics and exploratory data analysis techniques. This will help to identify patterns and trends in the data.
  4. `Machine Learning Algorithms:` Next, machine learning algorithms can be used to predict customer satisfaction based on the data collected. This can be done by building a model using supervised learning techniques such as regression or classification.
  5. `Data Visualization:` The final step is to present the results of the analysis and machine learning algorithms using data visualization techniques. This can be done using tools such as Tableau or Python libraries such as Matplotlib or Seaborn.

- `Data Collection and Processing:`
  For data collection, the project will utilize web scraping techniques to extract reviews from Google's API.  The data will then be cleaned using data cleaning techniques such as removing punctuation, converting text to lowercase, and removing stop words. The cleaned data will then be analyzed and machine learning algorithms will be applied to predict customer satisfaction based on the data collected.
  
- `Software and Hardware Resources:` 
  The software resources required for this project include Python programming language, web scraping libraries such as Selenium, data analysis libraries such as Pandas, machine learning libraries such as Scikit-learn or  any libraries learnt in the previous semester. Data visualization tools such as Tableau or Python libraries such as Matplotlib or Seaborn can be used to present the results. The hardware resources required for this project include a computer with sufficient processing power and memory to handle the data.
---

## System Architecture:
- Provide a detailed overview of the proposed system architecture including the tools and technologies that will be used to develop and deploy the system
- Explain how the data will be stored, managed, and analyzed using MongoDB, as well as the hardware and software requirements needed to support the system.
- Discuss the tools and frameworks that will be used for data visualization and analysis.
- Provide a flowchart or block diagram of the system architecture.

---

## Risks and Limitations:
- Identify potential risks and limitations associated with the proposed data science project, including technical, financial, and legal risks. 
- Provide a clear plan for mitigating these risks and limitations. This should include a risk management plan and contingency strategies.

- Potential Risks and Limitations:
  1. `Technical risks:` The data collected from Google reviews may not be accurate, complete, or up-to-date. Also, the analysis of such data requires expertise in data analytics and statistical techniques. There may be issues with data privacy, such as sensitive customer information being exposed.
  2. `Financial risks:` The cost of collecting, processing, and storing data may be higher than anticipated. There may also be unexpected expenses, such as the need for additional hardware or software.
  3. `Legal risks:` These actions may be infringing on intellectual property rights or data privacy laws while collecting and using the data. It is essential to ensure that these actions are compliant with local regulations and that you have obtained the necessary permissions.

- Plan for Mitigating Risks and Limitations:
  1. `Technical:` Mitigate technical risks by ensuring that the data collected is from reliable sources, and validated the data by cross-checking it against other sources. It is best to engage experts in data analytics and statistical techniques to help with the analysis. It would help if you also implemented data privacy measures to protect sensitive customer information.
  2. `Financial:` Mitigate financial risks by setting a realistic budget and having contingency plans for unexpected expenses. Also, explore open-source tools and resources that can help you reduce costs.
  3. `Legal:` Mitigate legal risks by ensuring that these works comply with local regulations and obtain the necessary permissions before collecting and using the data. Working with legal experts to understand any potential legal risks and to develop strategies to mitigate them.


---

## Deliverables and Milestones:
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
    <td>Week 3-5</td>
  </tr>
  <tr>
    <td>Feature Extraction</td>
    <td>Week 6-8</td>
  </tr>
  <tr>
    <td>Machine Learning Algorithms</td>
    <td>Week 9-10</td>
  </tr>
  <tr>
    <td>Data Visualizations</td>
    <td>Week 11-12</td>
  </tr>
  <tr>
    <td>Report</td>
    <td>Week 13-14</td>
  </tr>
</table>

---

## Resources:
- Provide a detailed breakdown of the resources required for the proposed data science project, including staff, equipment, software, and other expenses.

---

## Technical Specifications:
- Discuss the technical specifications of the proposed data science project, including data sources, data schema, data transformations, machine learning algorithms, data visualization tools, and other technical details.
- Mention the programming languages, frameworks, and libraries that will be used in the project.
- Provide details about the hardware and software requirements for the proposed system.
- Explain the data security measures that will be implemented.

---

## Timeline and Deliverables: 
<div class="mermaid">
  
  ```mermaid
gantt
    title Project Timeline
    dateFormat  YYYY-MM-DD
    section Project Tasks
    Task 1           :a1, 2023-04-01, 30d
    Task 2           :after a1  , 20d
    Task 3           :after a1  , 20d
    section Other Tasks
    Task 4          :2023-04-15  , 10d
    Task 5          :2023-04-25 , 10d
    Task 6          :2023-05-05 , 10d
  ```
  </div>
- Provide a detailed timeline for the project, including milestones and deadlines.

- Specify the deliverables that will be provided at each milestone. It should also specify the expected time frame for each deliverable and the resources that will be required to complete the project.

- Explain the quality assurance and testing procedures that will be followed.

---

## Conclusion:
- Conclude your proposal with a call to action, highlighting the benefits of your proposed solution and urging the decision-makers to take action.
- Summarize the proposal and reiterate the importance of the project.
- Mention any potential limitations or challenges that may arise during the project.
- Provide a call to action for the client to approve the proposal and proceed with the project.
