<div>
<h1 align = 'center'><b>Cafe Satisfactory	☕: <br> Monitor google review about customer satisfaction on cafes in Johor.</b></h1>
  </div>

---

## Table of Contents
* [📑 Executive Summary](#-executive-summary)
* [🏚️ Background](#-background)
* [🥅 Goals and Objectives](#-goals-and-objectives)
* [🔭 Scope](#-scope)
* [🍄 Methodology](#-methodology)
* [🧮 System Architecture](#-system-architecture)
* [🍡 Risks and Limitations](#-risks-and-limitations)
* [🪃 Deliverables and Milestones](#-deliverables-and-milestones)
* [🛢️ Resources](#-resources)
* [💻 Technical Specifications](#-technical-specifications)
* [⏳ Timeline and Deliverables](#-timeline-and-deliverables)
* [🎓 Conclusion](#-conclusion)
---

## Key components
The following are the key components of a data science project proposal:

## 📑 Executive Summary:

Restaurant reviews from Google are often used to survey places for customers that want to try that place out. We will perform an analysis on the reviews to determine whether it is positive or the opposite. From the analysis, we can conclude if a customer was satisfied with the service that was offered by the restaurant. Users who are searching for restaurants or places to eat will be able to find one not only by the ratings, but also with added criterias and information given or extracted from the review. 

---

## 🏚️ Background:
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

## 🥅 Goals and Objectives

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

## 🔭 Scope: 
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

## 🍄 Methodology:
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

## 🧮 System Architecture:
- Provide a detailed overview of the proposed system architecture including the tools and technologies that will be used to develop and deploy the system
- Discuss the tools and frameworks that will be used for data visualization and analysis.
- Explain how the data will be stored, managed, and analyzed using MongoDB, as well as the hardware and software requirements needed to support the system.
- Provide a flowchart or block diagram of the system architecture.

Components in system architecture:
  1. `Data acquisition:` Collect data using **web scraping** techniques to extract reviews from Google's API or manually extract data by browsing Google reviews of cafes in Johor.
  2. `Data storage:` The collected data may be structured or unstructured data and the storage should capable on handling a high volume of data. This also will allow a fast retrieval of data. Tools that will be used here is a NoSQL database which is **MongoDB**.
  3. `Data preprocessing:` Process of cleaning and transforming data such as handling missing and inconsistent data, removing outliers and data normalization. Tools and technologies that can be use are **Pandas, NumPy, and Scikit-learn** for machine learning.
  4. `Data analysis and modeling:` Process of data analysis and model building to extract insights and make predictions. This process may involve machine learning, deep learning, or some other statistical methods
  5. `Model deployment:` Process of making a trained machine learning model available in a suitable environment for predictions on new data. Tools that will be used is **Django**. Python's Django is a full-stack web framework with support for RESTful APIs, a built-in admin interface, and database connectivity. It is frequently used to create sophisticated web apps with machine learning models.
  6. `Model monitoring and maintenance:` The procedure of keeping track of the models' performance and updating them as necessary. This might entail keeping track of the model's precision, or retraining the model using new data. Tools that can be use is **MLflow**, which is an open-source platform for managing the machine learning lifecycle, including model training, deployment, and monitoring.
  7. `Visualization and reporting:` Process of visualizing insights in a suitable format such as dashboards, reports, or interactive visualizations. Some common tools are **Tableau and PowerBI**.
  8. `Workflow and collaboration:` The procedure for working with team members and managing the workflow. Project management software, issue trackers, and version control systems may be used in this.

MongoDB usage steps:
  1. `Design data schema:` Identifying the relationships of data before storing it in MongoDB
  2. `Create databases and collections:` Create databases and collections based on the data scheme design. 
  3. `Data insertion:` A JSON-like formate of data can be inserted into MongoDB using insert() method or mongoimport.
  4. `Retrive and data query:` Queried data using find() method, and operators such as filter, sort, etc.
  5. `Indexing:` Improve data retrieval for fast lookups. The index contains a list of values and pointers to the location of the records
  6. `Aggregation:` Grouping data based on certain criteria. 

MongoDB requirements:
<table border="1" align="center">
  <tr>
    <th>Hardware</th>
    <th>Software</th>
  </tr>
  <tr>
    <td>Multi-core or higher processor with clock speed of 2.6 GHz or higher</td>
    <td>MongoDB server software</td>
  </tr>
   <tr>
      <td>At least 8 GB of RAM</td>
      <td>Operating system that compatible with MOngoDB such as Windows, Linux, or macOS</td>
    </tr>
    <tr>
      <td>At least 10 GB of free disk space</td>
      <td>MongoDB agent must be installed only on 64-bit architectures</td>
    </tr>
  </table>

<div class="mermaid">
  
 ```mermaid
---
title: System Architecture Flowchart 
---
  
flowchart TB
    A(Start) --> B[Data acquisition\nWeb Scrapping]
    B --> C[(Data storage\n MongoDB)]
    C --> D[Data preprocessing\n Pandas]
    D --> E[Data analysis and modeling\n Machine Learning]
    E --> F[Model deployment\n Django]
    F --> G[Model monitoring and maintenance\n MLflow]
    G --> H[Visualization and reporting\n Tableau or PowerBI]
    H --> I(Stop)
  
  ```
  </div>
 
---

## 🍡 Risks and Limitations:
- Identify potential risks and limitations associated with the proposed data science project, including technical, financial, and legal risks. 
- Provide a clear plan for mitigating these risks and limitations. This should include a risk management plan and contingency strategies.

- Potential Risks and Limitations:
  1. `Technical risks:` The data collected from Google reviews may not be accurate, complete, or up-to-date. Also, the analysis of such data requires expertise in data analytics and statistical techniques. There may be issues with data privacy, such as sensitive customer information being exposed. Moreover, sometimes words cannot fully predict the actual sentiment of a person towards said cafe. For example, a person may make some complaints about what they do not like about the cafe, however they still rate it highly in the rating section.
  2. `Financial risks:` The cost of collecting, processing, and storing data may be higher than anticipated. There may also be unexpected expenses, such as the need for additional hardware or software. For the time being, only free softwares or tools will be used in this project. There are several options to scrap data easily using paid software but we will not go for that route, as for now.
  3. `Legal risks:` These actions may be infringing on intellectual property rights or data privacy laws while collecting and using the data. It is essential to ensure that these actions are compliant with local regulations and that you have obtained the necessary permissions.

- Plan for Mitigating Risks and Limitations:
  1. `Technical:` Mitigate technical risks by ensuring that the data collected is from reliable sources, and validated the data by cross-checking it against other sources. It is best to engage experts in data analytics and statistical techniques to help with the analysis. It would help if you also implemented data privacy measures to protect sensitive customer information.
  2. `Financial:` Mitigate financial risks by setting a realistic budget and having contingency plans for unexpected expenses. Also, explore open-source tools and resources that can help you reduce costs.
  3. `Legal:` Mitigate legal risks by ensuring that these works comply with local regulations and obtain the necessary permissions before collecting and using the data. Working with legal experts to understand any potential legal risks and to develop strategies to mitigate them.


---

## 🪃 Deliverables and Milestones:
<table border="1" align="center">
  <tr>
    <th>Deliverables and Milestones</th>
    <th>Timeframe</th>
  </tr>
  <tr>
    <td>Data Collection</td>
    <td>Week 01</td>
  </tr>
  <tr>
    <td>Data Cleaning and Preprocessing</td>
    <td>Week 02 - 04</td>
  </tr>
  <tr>
    <td>Machine Learning Algorithms</td>
    <td>Week 05 - 06</td>
  </tr>
  <tr>
    <td>Data Visualizations Design</td>
    <td>Week 07 - 08</td>
  </tr>
  <tr>
    <td>User Interface Design</td>
    <td>Week 09 - 12</td>
  </tr>
  <tr>
    <td>Testing & Project Launch</td>
    <td>Week 13 - 14</td>
  </tr>
</table>

---

## 🛢️ Resources:
- Provide a detailed breakdown of the resources required for the proposed data science project, including staff, equipment, software, and other expenses.

1. **Staff**
  - `Data Scientists:` In charge of creating and putting into practise data science models, evaluating data, and offering conclusions and suggestions.
  - `Data Analysts:` In charge for data preparation, conduct exploratory data analysis (EDA), and perform visualizations.
  - `Project Management:` In charge on managing the project, team members, and ensureing the project meat the goals and requirements.

2. **Equipment**
  - Well supported hardware
  - Enough data storage size

3. **Software**
  - `Data science:` Python
  - `Data visualization:` Tableau or PowerBI
  - `Data management:` MongoDB
  - `Web apps with machine learning models:` Django
  - `Machine learning:` MLflow
  - `Project management:` MIRO

4. **Other expenses**
  - Training and development

---

## 💻 Technical Specifications:
- Discuss the technical specifications of the proposed data science project, including data sources, data schema, data transformations, machine learning algorithms, data visualization tools, and other technical details.
- Mention the programming languages, frameworks, and libraries that will be used in the project.
- Provide details about the hardware and software requirements for the proposed system.
- Explain the data security measures that will be implemented.

- Data Source: Google Review
- Data Visualization Tools: Tableau / PowerBI
- Data Transformation: Python, Pandas, Numpy, matplotlib
- Machine Learning Algorithms: MLFlow, TensorFlow 
- Programming language that will be used in this project would be Python, PyScript and json based language MongoDB Query Language (MQL). By using Selenium, we can scrap and extract all the reviews from Google and export it into .csv formatted file.

There are few data security measures that will be implemented in this project including;

- Encryption: Data can be encrypted using a secure algorithm to ensure that only authorized parties can access the information. Reviewer's full name will not be displayed for security reasons.
- Access controls: Access controls can limit who has access to certain data, and what they are able to do with that data. Only 5 of our group members can access the data.
- Password policies: Strong password policies can help prevent unauthorized access to data by requiring users to create complex passwords that are changed regularly. 
- Regular software updates: Regular software updates can patch security vulnerabilities that could be exploited by attackers. Ensuring all software used in this project are up to date.

MongoDB requirements:
<table border="1" align="center">
  <tr>
    <th>Hardware</th>
    <th>Software</th>
  </tr>
  <tr>
    <td>Multi-core or higher processor with clock speed of 2.6 GHz or higher</td>
    <td>MongoDB server software</td>
  </tr>
   <tr>
      <td>At least 8 GB of RAM</td>
      <td>Operating system that compatible with MOngoDB such as Windows, Linux, or macOS</td>
    </tr>
    <tr>
      <td>At least 10 GB of free disk space</td>
      <td>MongoDB agent must be installed only on 64-bit architectures</td>
    </tr>
  </table>

---

## ⏳ Timeline and Deliverables: 
<div class="mermaid">
  
  ```mermaid
gantt
    title Cafe Satisfactory Timeline
    dateFormat  YYYY-MM-DD
  
    section Data Collections
    Data Searching   :2023-04-01 , 5d
  
    section Data Cleaning and Preprocessing
    Data Cleaning            :2023-04-6  , 7d
    EDA                      :2023-04-10 , 10d
    Finalizing               :2023-04-20 , 7d
  
    section Machine Learning Algorithm
    Preparing Model       :2023-04-27 , 7d
    Model Testing         :2023-05-04 , 7d
  
    section Data Visualization
    Simple data chart            :2023-05-11 , 8d
    ML visualization             :2023-05-16 , 9d
  
    section User Interface Design
    Designing User interface  :2023-05-25 , 11d
    Features add-ons          :2023-06-04 , 8d
    Modul insert              :2023-06-11 , 6d
    Finalizing                :2023-06-17 , 5d
  
    section Testing & project launch
    Live Testing      :2023-06-23 , 7d
    Fixing flaws      :2023-06-30 , 7d
  
  ```
  </div>
  
- Data Collection (`Week 1`)

  > Discussing which data source that suit the best for our project objectives and scope. 
  
- Data Cleaning and Preprocessing (`Week 2 - Week 4`)

  > Data Cleaning and preporcessing the data to be used for more advance processing such as EDA, Data Integration, Aggregation and Visualization. This phase is given 3 weeks to complete since we need to remove noisy data and duplications in order to have a completly clean data. 

- Machine Learning Algorithm (`Week 5 - Week 6`)

  > phase where we will be training the data and allow machine learning to use the data to create prediction, classification and clustering. 

- Data Visualizations (`Week 7 - Week 8`)

  > Present all the data collected, data calculated or data trained into graphics such as chart, bar or scales for easier and friendlier interpretations. 
  
- User Interface Design (`Week 9 - Week 12`)

  > A crucial phase as overall project to create a stable and reliable system. Understanding the target audience, developing the interface with their wants and preferences in mind, and taking interactive elements, colour schemes, and typefaces into consideration are just a few of the tasks involved in UI design. For enterprises and organisations, a well-designed user interface may improve the user experience, allow for more effective decision-making, and increase energy efficiency.

- Testing & project launch (`Week 13 - Week 14`)

  > An important phase in this project to test our website/server before launch for several reasons including identifying defects in the system, ensuring all the functions are working and ready to be use, ensuring stability(system is stable and reliable to handle huge amount of user traffic) and Mitigating risk(could reduce the risk of costly downtime)

---

## 🎓 Conclusion:
We believe our data science project is in fact crucial for both business and tourism in Johor. On the business side of things, cafe owners can use our analysis to improve the services if a complaint was made by a customer. It can be done much more efficiently as we could identify an actual helpful review which could be difficult by doing it manually. On the tourism side, tourist can actually recommend the cafes to their friends which could boost tourism even more. However, this can only be done if they actually had an amazing time so a good and reliable review would definitely help. However, we do not expect the project will sailing smoothly as there would be some challenges which we would expect to arise such as the model not working as intended. Fortunately, we could always ask our lecturer for any assistance. 
