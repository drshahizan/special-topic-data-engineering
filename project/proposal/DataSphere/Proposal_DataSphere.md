<div>
<h1 align = 'center'><b> 🥣 A Sentiment Analysis Study:	<br>  Exploring the Emotional Response of Malaysians towards Menu Rahmah</b></h1>
  </div>

## Table of Contents
- [Table of Contents](#table-of-contents)
- [📖: Executive Summary](#-executive-summary)
- [🖼️: Background](#️-background)
- [🔎: Goals and Objectives](#-goals-and-objectives)
- [🔬: Scope](#-scope)
- [▶️: Methodology](#️-methodology)
- [💻: System Architecture](#-system-architecture)
- [❎: Risks and Limitations](#-risks-and-limitations)
    - [Technical risks:](#technical-risks)
    - [Financial risks:](#financial-risks)
    - [Legal risks:](#legal-risks)
  - [Plan for Mitigating Risks and Limitations:](#plan-for-mitigating-risks-and-limitations)
    - [Technical risks:](#technical-risks-1)
    - [Financial risks:](#financial-risks-1)
    - [Legal risks:](#legal-risks-1)
- [📝: Deliverables and Milestones](#-deliverables-and-milestones)
- [💰: Resources](#-resources)
- [🧑‍💻: Technical Specifications](#-technical-specifications)
- [📆: Timeline and Deliverables](#-timeline-and-deliverables)
- [#️⃣: Conclusion](#️⃣-conclusion)


## 📖: Executive Summary 
Consumer segmentation that prioritizes product attributes involves categorising customers into groups according to their needs or preferences for particular product features. To find customer groups with comparable traits and preferences, it entails examining data on customer behaviour, purchase history, demographics, and product preferences. Companies can adjust their marketing initiatives and product offers to fit the unique needs of each consumer segment by understanding their needs and preferences, which will boost customer satisfaction and loyalty.

## 🖼️: Background
Menu Rahmah is a government initiative in Malaysia that aims to provide affordable meals to Malaysians, particularly those affected by the COVID-19 pandemic. Participating restaurants and food establishments are incentivized to offer meals priced under RM5 to help alleviate the cost of living for Malaysians. This program is part of the National Economic Recovery Plan (PENJANA) launched in 2020 in response to the economic impact of the COVID-19 pandemic.
<br><br>
As Menu Rahmah has been implemented for some time now, it is essential to understand how Malaysians perceive the initiative. This study aims to explore the emotional response of Malaysians towards Menu Rahmah through sentiment analysis of tweets.
<br><br>
Sentiment analysis is a computational technique used to analyze opinions, emotions, and attitudes expressed in written language. It has gained popularity in recent years as social media platforms become increasingly prevalent and a vast source of unstructured data.
<br><br>
By conducting sentiment analysis on tweets related to Menu Rahmah, we can gain insights into how Malaysians feel about the initiative. This information can help policymakers and participating organisations to understand the success of Menu Rahmah and identify areas for improvement. Not to mention, help reassure the citizens of Malaysia that their voices are being heard and being taken into consideration.
<br><br>
The study will use a combination of natural language processing (NLP) and machine learning techniques to analyze a large dataset of tweets related to Menu Rahmah. The results will be presented in the form of visualizations, highlighting the overall sentiment towards Menu Rahmah and identifying key themes and topics mentioned by users.
<br><br>
Overall, this study aims to provide valuable insights into how Malaysians perceive the Menu Rahmah initiative and the emotional response it elicits.

## 🔎: Goals and Objectives
(to be edited) The goal of sentiment analysis is to identify and extract the subjective information from text data, such as opinions, attitudes, emotions, and feelings expressed about a particular topic or entity. The objective of sentiment analysis is to classify the sentiment of the text as positive, negative, or neutral. This information can be used to understand the public opinion towards a specific product, service, brand, or event, and can be helpful in making informed decisions and improving customer satisfaction. It can also be useful in identifying potential issues or areas of improvement for businesses or organizations.
In order to enhance marketing and sales strategies, boost customer satisfaction and retention, and ultimately spur business growth, it is important to better understand and target certain groups of customers based on their traits, requirements, and habits.

1. Using data from demographics, psychographics, behaviour, and preferences, identify unique client categories.
2. Examine client data to comprehend the requirements and buying habits of each category.
3. Create marketing campaigns and messages that are relevant to each demographic.
4. Design tailored experiences for each group to increase client happiness and adherence.
5. Evaluate and assess segmentation strategies' efficacy to continuously enhance and hone strategies.
6. Understanding and applying MongoDB to develop a recommendation engine 


## 🔬: Scope
The objective of this project is to provide insights to policymakers, citizens of Malaysia and organisations participating in this program, on where Menu Rahmah excels and where it finds the short end of the stick. With this known, the scope of this project will be :

- ``Data Source`` : Scraped tweets and information of their respective *tweeters*. Multiple tools will be used to gather data, including **snscrape**. **snscrape** is a web scraping tool that utilizes the APIs of various social media platforms. It accesses the APIs of social media platforms such as Twitter, Instagram, YouTube, and Reddit to gather data from them.
- ``Tools & Technologies`` : Retrieved data will be stored in MongoDB. Which then will be cleaned and prepared using **Pandas** and **Numpy**. Natural language processing (NLP) will be used to analyse tweets and retrieve information from them, libraries such as **NLTK (Natural Language Toolkit)** will be used for this function. To group tweets with similar sentiments clustering algorithms using **scikit-learn**, **TensorFlow** and **PyTorch** libraries will be applied on the cleaned data. Finally, Findings will be visualised using **Tableau** or **PowerBI**.
- ``Alteryx`` : Alteryx is a data analytics and data science platform that provides a wide range of tools and functionalities for data preparation, blending, and analysis. Alteryx might be used for data preparation and analysis in a sentiment analysis study exploring the emotional response of Malaysians towards Menu Rahmah.
- ``Resources`` : 
  - Team of 5 people.
  - Each team member posses skills from gathering appropriate data to visualising data, using tools and technologies listed.
  - Adequate hardware and software to progress.

## ▶️: Methodology
- ``Data collection`` : Scrape data from Twitter on responses and tweets of Menu Rahmah using twitter API.


- ``Data cleaning and processing`` : The collected data will be cleaned, filtered, pre-processed to remove duplicate data using Alteryx and Python.

- ``Data analysis`` : Data analysis utilizing descriptive statistics and exploratory data analysis methods comes after the data have been cleaned. This will make it easier to spot patterns and trends in the information.

- ``Machine learning algorithms`` : Based on the gathered data, machine learning algorithms can be utilized to anticipate the customer choice. Hence, can build a model utilizing supervised learning methods like regression or classification.

- ``Data visualization`` : Use data visualization approaches to illustrate the relationship between product feature patterns, analysis, and machine learning algorithms. Tools like Tableau and Python packages like Matplotlib and Seaborn can be used for this.


## 💻: System Architecture

The system will consist of the following components:
1. ``Data acquisition: `` Customer information will be gathered from a variety of sources, including marketing campaigns, website analytics, and social media platforms, by the data acquisition component. Real-time data collection and storage in a centralised database will make it simple to obtain the information.

2. ``Data storage:`` **MongoDB** will be the main database used by the data storage component to store and manage the customer data. A NoSQL database called MongoDB offers adaptable data formats and simple scalability. A cloud-based server will host the database to guarantee high availability and data protection.

3. ``Data preprocessing:`` The component of data preprocessing will clean, transform, and prepare the data for analysis. Duplicates, missing values, and irrelevant features will be removed. Preprocessing will also include feature engineering, such as the creation of new variables that extract meaningful information from the data.

4. ``Data analysis and modeling:`` The data analysis and modelling component will identify customer segments based on their behaviour, preferences, and demographics by employing various statistical and machine learning techniques. Python and its data science libraries such as NumPy, Pandas, and Scikit-learn will be used for the analysis. The models will be trained using MongoDB customer data and validated using cross-validation techniques.

5. ``Model deployment:`` **Django**, a Python-based web framework, will be used by the model deployment component to deploy machine learning models to a web server. Predictions based on user input will be provided via API endpoints. Setting up a continuous integration and delivery pipeline will also be part of the deployment to ensure that the models are up to date and accurate.

6. ``Model monitoring and maintenance:`` The model monitoring and maintenance component will continuously monitor the models' performance and retrain them as needed. MongoDB's change stream feature, which provides real-time notifications when data changes, will be used for monitoring. Updating the models to account for new data sources and changing customer behaviour will be part of the maintenance.

7. ``Visualization and reporting`` The visualisation and reporting component will create interactive dashboards and reports using data visualisation tools such as Tableau, Power BI, or Matplotlib. Stakeholders will be able to monitor key performance indicators (KPIs) such as customer retention, acquisition, and engagement using these dashboards.

8. ``Workflow and collaboration:`` To track progress, assign tasks, and collaborate with team members, the workflow and collaboration component will use project management tools like **Trello** or **Asana**. In addition, the team will use version control software such as Git to ensure that all changes to the codebase are tracked and easily reversible.

**Hardware and Software Requirements**

The following hardware and software will be required to support the proposed system architecture:

<table border="1" align="center">
  <tr>
    <th>Hardware</th>
    <th>Software</th>
  </tr>
  <tr>
    <td>Cloud-based server (e.g., AWS EC2, GCP Compute Engine, or Azure VM)</td>
    <td>MongoDB as the primary database</td>
  </tr>
   <tr>
      <td>Adequate storage for the customer data (e.g., AWS S3, GCP Cloud Storage, or Azure Blob Storage)</td>
      <td>Python and its data science libraries (NumPy, Pandas, Scikit-learn, etc.)</td>
    </tr>
    <tr>
      <td></td>
      <td>Flask for model deployment</td>
    </tr>
    <tr>
      <td></td>
      <td>Data visualization tools (Tableau, Power BI, Matplotlib, etc.)</td>
    </tr>
    <tr>
      <td></td>
      <td>Project management tools (Trello, Asana, etc.)</td>
    </tr>
  </table>
  
<div class="mermaid">
  
```mermaid
---
title: System Architecture Flowchart 
---
  
flowchart TB
    A(Start) --> B[Data collection\nWeb Scrapping]
    B --> C[(Data storage\n MongoDB)]
    C --> D[Data preprocessing\n Pandas]
    D --> E[Data analysis and modeling]
    E --> F[Model deployment\n using Django]
    F --> G[Model monitoring and maintenance\n]
    G --> H[Visualization and reporting\n Tableau or PowerBI]
    H --> I(Stop)
  
  ```
  </div>
 
---

## ❎: Risks and Limitations
#### Technical risks:
- Shortage of skills : lack of skills while completing the project 
- Poor quality data : low quality data could impact in the quality of the output at the end of the project
- Collecting meaningful and real-time data: With so much data available, it can be challenging to delve deep and find the insights that are most needed.


#### Financial risks: 
- Cost of cloud computing services and softwares. Extra cost could be expected to subscribe the extra features in the cloud computing services in order to perform the tasks. 

#### Legal risks:
- Data security : A bigger danger of data breach results from larger big data volumes. The larger the concentration of data, the more attractive it is to hackers, and the more serious the implications of the breach.
- Consumer privacy : the privacy of the data provider and their data should be protected. 

### Plan for Mitigating Risks and Limitations: 

#### Technical risks:
- Develop quality skills before and while completing the project. 
- Proper research before selecting dataset and clearly knows what you want kind of data you finding and find from the right place

#### Financial risks: 
- Provide proper funding for completing th project and have a little bit extra budget than the exact amount of budget as cost of software can rise. 

#### Legal risks:
- To reduce the risk of data integrity connected to preserving data assets, security vulnerabilities must be removed. This method of reducing risk requires subject matter expertise for determining known security vulnerabilities and implementing measures to eliminate them. 



## 📝: Deliverables and Milestones

<div align="center">
  
| Deliverables and Milestones | Timeframe  |
|----------|:-------------:|
| Planning and Requirements Gatherings | End of week 2 |
| Data Collection and Preprocessing | End of week 6 |
| Sentiment Analysis Development | End of week 8 |
| Data Visualization and Insights | End of week 10 |
| Model Deployment and Testing | End of week 12 |
| Final Report and Presentation | End of week 14 | 

</div>

Week 1-2: Planning and Requirements Gatherings
Determine the problem to be solved on Twitter regarding 'Menu Rahmah' tweets. Finalized proposal outlining system architecture, methodology and other related requirements. 

Week 3-6: Data Collection and Preprocessing
Collect Twitter data related to the Menu Rahmah project using the Twitter API or appropriate keywords. Then, preprocess the data by cleaning, filtering, and transforming it into a suitable format for analysis.Week 7-8:  Sentiment Analysis Development
Do feature extraction of the meaningful features of the text and select, train and evaluate the model for sentiment analysis using NLP technique.

Week 9-10:  Data Visualization and Insights
Visualize the sentiment analysis results using appropriate charts, graphs, and dashboards. We will extract insights from the analysis, such as the most common sentiments expressed, the most frequently mentioned topics, and the overall sentiment trend over time.

Week 11-12: Model Deployment and Testing
After the analysis is completed, deploy and test the application to a production environment.

Week 13-14: Final Report and Presentation
Write a final report summarizing the project findings and recommendations. Finally, store the preprocessed data in a MongoDB database.

## 💰: Resources

1. **Staff**: 
 
The project will require a team of experienced data scientists and engineers with expertise in the areas such as data analysis and modeling, machine learning, database management, software development, data visualization, and project management.

- Project manager
- Data scientist
- Machine learning engineer
- Database administrator
- Software developer
- Data visualization specialist

2. **Equipment**:
- ``Cloud-based server:`` This will be used to host the MongoDB database and run the web server for model deployment. The cost will depend on the size and configuration of the server.
- ``Workstations:`` The team will require high-performance workstations to run the data analysis and modeling software. The cost will depend on the configuration of the workstations.

3. **Software**:
- MongoDB: This will be the primary database for storing and managing customer information.
- Python: For data analysis and modelling, machine learning, and software development.
- MongoDB: This is where the machine learning models will be deployed to a web server.
- Data visualization tools: These software will be used to create interactive dashboards and reports.
- Project management tools: This will be used to keep track of progress, assign tasks, and collaborate with team members.
- Version control software: This will be used to track code changes and collaborate with team members.
- 
> The cost of the software will depend on whether the team opts for open-source or commercial licenses.

4. **Other Expenses**
- Cloud storage
- Training and development
- Miscellaneous expenses

## 🧑‍💻: Technical Specifications

| Technical Specifications |                                  Details                                  |
|:------------------------:|---------------------------------------------------------------------------|
|       Data sources       | Extracted data from various APIs                                          |
|        Data schema       | The data will be stored in MongoDB, which is a NoSQL database. The data schema will be designed based on the data structure and requirements. The schema will be flexible to allow for changes and updates in the data.  |
|   Data transformations   | Python, Pandas, Numpy, MongoDB aggregation                                                   |
|       ML algorithms      | Django, Python libraries (scikit-learn, TensorFlow, and PyTorch)                                      |
| Data visualization tools | Power BI/Tableau, Python visualization libraries (Matplotlib, Seaborn, and Plotly) |
|   Programming Languages  | SQL, Python, pymongo (Python driver for interacting with MongoDB)    |

Hardware and Software Requirements:
- The project will require a machine with sufficient RAM and CPU power to run the MongoDB server and the machine learning algorithms.
- The recommended hardware specification is a machine with 16GB RAM and an Intel i7 processor or equivalent.
- The software requirements include MongoDB, Python, and the necessary Python libraries.

Data Security Measures:
- The project will implement various security measures to protect the data and prevent unauthorized access.
- The MongoDB server will be configured to use SSL/TLS encryption to encrypt data in transit.
- Access to the MongoDB server will be restricted to authorized users with strong passwords.
- Data backups will be stored off-site in encrypted form.


## 📆: Timeline and Deliverables

<div class="mermaid">

  ```mermaid
gantt
    title Product Feature Project Gantt Chart
    dateFormat  YYYY-MM-DD
    section Planning and Requirements Gatherings
    Requirements Gatherings  :2023-03-19 , 14d
  
    section Data Exploration and Cleaning
    Data Collection            :2023-04-02  , 10d
    Data Cleaning              :2023-04-12 , 6d
    Data Analysis              :2023-04-18 , 5d
  
    section Feature Engineering
    Features identification        :2023-04-23 , 7d
 
    section Model Selection and Training
    Model Selection        :2023-04-30 , 7d
    Model Training     :2023-05-07 , 7d
  
    section Model Deployment and Testing
    Model Deployed               :2023-05-14 , 21d
    Testing     :2023-06-04 , 7d
  
    section Presentation
    Final report      :2023-06-11  , 7d
    Presentation     :2023-06-18 , 7d
  
  ```
  </div>

1. Planning and Requirements Gatherings *(Week 1-2)*
> - **Deliverables** : Project charter and scope and Requirements gathering plan
> - **Resources** : Project Manager, stakeholders

2. Data Exploration and Cleaning *(Week 3-5)*
> - **Deliverables** : Data collection, cleaning, transformation and EDA
> - **Resources** : Python, MongoDB, Data Analyst, database administrator

3. Feature Engineering *(Week 6)*
> - **Deliverables** :  Identify the relevant features for product feature segmentation
> - **Resources** : Data Analyst, Machine learning engineer

4. Model Selection and Training *(Week 7-8)*
> - **Deliverables** : Model selection report, training plan, implementation and evaluation metrics
> - **Resources** : Data Analyst, Machine learning engineer

5. Model Deployment and Testing *(Week 9-12)*
> - **Deliverables** :Deployed machine learning model, tested and validated results
> - **Resources** : Data analyst, machine learning engineer, web developer

6. Presentation *(Week 13-14)*
> - **Deliverables** : Final project report and project presentation 
> - **Resources** : Project manager, data analyst, machine learning engineer, web developer


Quality assurance and testing procedures:
- Throughout the project, our team will follow standard best practices for data science and software engineering, including code review, and documentation.
- The team will also conduct regular testing and validation of the data pipeline, machine learning model, and user interface to ensure accuracy and reliability.
- Quality assurance will be done by comparing the results of the model with the actual data.


## #️⃣: Conclusion

In conclusion, the primary goal of the proposed project is the development of a system that helps company have a better understanding and target certain groups of customers based on their traits, requirements, and habits. The suggested system analyses a dataset of customers and generates predictions using machine learning methods. The team has developed a meticulous schedule and resource plan for the project. As for the project's scope, methodology, and expected results are all well specified. The project's outcomes might enable organisations to more fully comprehend their customers and deliver individualised experiences that may increase customer loyalty, pleasure, and return on investment (ROI).There are, however some risk and limitations for us in carrying out this project like technical, financial and legal risk. In the end of this project, we hope that this will be beneficial to other businesses in improving their sales performance and increase customers' loyalty to the company.


