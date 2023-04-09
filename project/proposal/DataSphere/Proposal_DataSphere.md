<div>
<h1 align = 'center'><b> 🥣 A Sentiment Analysis Study: </b></h1>
  <h2 align = 'center'> Exploring the Emotional Response of Malaysians towards Menu Rahmah</h2>
</div>

## Table of Contents
* [Executive Summary](#-executive-summary)
* [Background](#️-background)
* [Goals and Objectives](#-goals-and-objectives)
* [Scope](#-scope)
* [Methodology](#️-methodology)
* [System Architecture](#-system-architecture)
* [Risks and Limitations](#-risks-and-limitations)
* [Deliverables and Milestones](#-deliverables-and-milestones)
* [Resources](#-resources)
* [Technical Specifications](#-technical-specifications)
* [Timeline and Deliverables](#-timeline-and-deliverables)
* [Conclusion](#️-conclusion)


## 📖: Executive Summary 
To comprehend the feelings, thoughts, and attitudes that individuals have towards a certain subject, good, service, or brand, sentiment analysis is a technique that involves mining and analysing huge volumes of data. It is an effective tool that may be utilised to understand consumer behaviour, forecast trends, and guide corporate decisions. Sentiment analysis is a cutting-edge field that effectively classifies and interprets the sentiment of text, speech, and video data by utilising cutting-edge technology like machine learning and natural language processing. Sentiment analysis is being used by businesses to track consumer feedback, social media trends, brand reputation, and enhance the overall customer experience. Despite its many advantages, sentiment analysis has certain drawbacks, such as the potential for bias, the difficulty of deciphering sarcasm, and the problem of maintaining accuracy across diverse languages and cultures. Sentiment analysis will be a crucial tool for companies looking to stay on the cutting edge of customer knowledge and requirements fulfilment as technology develops.

## 🖼️: Background
Menu Rahmah is a government initiative in Malaysia that aims to provide affordable meals to Malaysians, particularly those affected by the COVID-19 pandemic. Participating restaurants and food establishments are incentivized to offer meals priced under RM5 to help alleviate the cost of living for Malaysians. This program is part of the National Economic Recovery Plan (PENJANA) launched in 2020 in response to the economic impact of the COVID-19 pandemic.
<br><br>
As Menu Rahmah has been implemented for some time now, it is essential to understand how Malaysians perceive the initiative. This study aims to explore the emotional response of Malaysians towards Menu Rahmah through sentiment analysis of tweets. Sentiment analysis is a computational technique used to analyze opinions, emotions, and attitudes expressed in written language. It has gained popularity in recent years as social media platforms become increasingly prevalent and a vast source of unstructured data.
<br><br>
By conducting sentiment analysis on tweets related to Menu Rahmah, we can gain insights into how Malaysians feel about the initiative. This information can help policymakers and participating organisations to understand the success of Menu Rahmah and identify areas for improvement. Not to mention, help reassure the citizens of Malaysia that their voices are being heard and being taken into consideration.
<br><br>
The study will use a combination of natural language processing (NLP) and machine learning techniques to analyze a large dataset of tweets related to Menu Rahmah. The results will be presented in the form of visualizations, highlighting the overall sentiment towards Menu Rahmah and identifying key themes and topics mentioned by users. Overall, this study aims to provide valuable insights into how Malaysians perceive the Menu Rahmah initiative and the emotional response it elicits.

## 🔎: Goals and Objectives
 The goal of this project is to identify and extract the subjective information from text data, such as opinions, attitudes, emotions, and feelings expressed by Malaysians about the government's latest initiative, Menu Rahmah. The objective of sentiment analysis is to classify the sentiment of the text as positive, negative, or neutral. This information can be used to understand the public opinion towards a specific product, service, brand, or event, and can be helpful in making informed decisions and improving customer satisfaction. It can also be useful in identifying potential issues or areas of improvement for businesses or organizations.

Goals:

1) To learn more about customer opinions and preferences, participating groups can use sentiment analysis to learn about what people think about Menu Rahmah. They may better understand what customers like and dislike, as well as what drives their brand loyalty, by monitoring customer feedback and sentiment.

2)``To enhance the client experience``: Sentiment analysis can assist companies in enhancing the client experience related to Menu Rahmah. Businesses can improve customer happiness by addressing sources of consumer dissatisfaction by recognising them.

3)``To monitor brand reputation``: Businesses can monitor their brand reputation with the aid of sentiment analysis. Businesses can spot possible reputation concerns and take proactive measures to remedy them by monitoring customer opinion across social media, review sites, and other channels.

4)``To inform product development``: Businesses can use sentiment analysis to inform product development. Businesses can find ways to enhance their goods and services by looking at client feedback and sentiment.

5)``To inform marketing campaigns``:Businesses can use sentiment analysis to inform marketing initiatives. Businesses can better target their marketing messages and efforts to resonant with their target audience by assessing customer sentiment.

Objectives:

1.``Identify key themes and topics``: Determine the main themes and subjects (Menu Rahmah) that consumers are talking about in relation to a company, a product, or a service.

2.``Determine sentiment polarity``: Obtain the polarity (positive or negative) of consumer opinion of a company, its goods, or its services.

3.``Monitor sentiment over time``: Monitor alterations in consumer opinion over time to spot trends and potential problems.

4.``Identify influencers and detractors``: Determine the proponents and opponents who are influencing consumer opinion of a company, its goods, or its services.

5.``Inform decision making``: Provide information about client sentiment that can help businesspeople make judgements about developing products, providing customer service, running marketing campaigns, and managing their reputations.




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

| No. | Components | Description |
| ------------- | ------------- | ------------- |
| 1. | Data Acquisition | To acquire data, we will use the Twitter API to collect tweets on "Menu Rahmah." We will connect with the Twitter API using Python's **Snscrape** package and save the collected data in JSON format. |
| 2. | Data Storage | For storing the acquired data, we will use **MongoDB** as our primary database. MongoDB is a NoSQL database that works well with massive amounts of unstructured data, such as tweets. To interface with the database, we will use PyMongo, a Python library for MongoDB. |
| 3. | Data preprocessing | We will clean and preprocess the data before evaluating it. To normalize the text data, we will remove stop words, punctuation, and URLs, as well as perform stemming and lemmatization. For text preparation and feature engineering, we will use Python's **NLTK** module. |
| 4. | Data analysis and modeling | We will train a sentiment analysis model using the preprocessed data. We will train the model using labeled data using a supervised learning approach. For model training and evaluation, we will employ Python's Scikit-Learn package. We will also investigate additional models, such as deep learning approaches, utilizing frameworks such as TensorFlow and PyTorch. |
| 5. | Model deployment |**Django**, a Python-based web framework, will be used by the model deployment component to deploy machine learning models to a web server. Predictions based on user input will be provided via API endpoints. Setting up a continuous integration and delivery pipeline will also be part of the deployment to ensure that the models are up to date and accurate. |
| 6. | Model monitoring and maintenance | The model monitoring and maintenance component will continuously monitor the models' performance and retrain them as needed. MongoDB's change stream feature, which provides real-time notifications when data changes, will be used for monitoring. Updating the models to account for new data sources and changing customer behaviour will be part of the maintenance. |
| 7. | Visualization and reporting | We will use **Streamlit**, a Python library for building interactive web applications, to visualize the sentiment analysis results. We will also use **Power BI or Tableau** to create reports and dashboards that can be shared with stakeholders. |
| 8. | Workflow and collaboration | To track progress, assign tasks, and collaborate with team members, the workflow and collaboration component will use project management tools like **Trello** or **Asana**. In addition, the team will use version control software such as Git to ensure that all changes to the codebase are tracked and easily reversible. |

<img src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/proposal/DataSphere/DataSphere%20System%20Architecture.png" alt="SystemArchitecture"></img>

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
      <td>Django for model deployment</td>
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
- Django: This is where the machine learning models will be deployed to a web server.
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
| Data visualization tools | Streamlit, Power BI/Tableau, Python visualization libraries (Matplotlib, Seaborn, and Plotly) |
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
    title Sentiment Analysis Study: Exploring the Emotional Response of Malaysians towards Menu Rahmah
    dateFormat  YYYY-MM-DD

    section Planning and Requirements Gatherings
    Requirements Gatherings   :2023-03-19 , 14d
  
    section Data Collection and Preprocessing
    Data Collection            :2023-04-02  , 14d
    Data Preprocessing         :2023-04-16 , 7d
    Data Analysis              :2023-04-23 , 7d
  
    section Sentiment Analysis Development
    Features Extraction        :2023-04-30 , 7d
    Model Selection & Evaluation :2023-05-07 , 7d
 
    section Data Visualization and Insights
    Data Visualization        :2023-05-14 , 7d
    Insights                  :2023-05-21 , 7d
  
    section Model Deployment and Testing
    Model Deployed             :2023-05-28 , 7d
    Testing                    :2023-06-04 , 7d
  
    section Final Report and Presentation
    Final report      :2023-06-11  , 7d
    Presentation     :2023-06-18 , 7d
  
  ```
  </div>

Week 1-2: Planning and Requirements Gatherings
- Determine the problem to be solved on Twitter regarding 'Menu Rahmah' tweets.
- Finalized proposal outlining system architecture, methodology and other related requirements. 
> Resources: Github, ChatGPT

Week 3-6: Data Collection and Preprocessing
- Collect Twitter data related to the Menu Rahmah project using the Twitter API or appropriate keywords.
- Preprocess the data by cleaning, filtering, and transforming it into a suitable format for analysis.
- Store the preprocessed data in a MongoDB database.
> Resources: Python/Social Media Monitoring Tools, MongoDB, Alteryx

Week 7-8:  Sentiment Analysis Development
- Do feature extraction of the meaningful features of the text. 
- Select, train and evaluate the model for sentiment analysis using NLP technique.
> Resources: Python, Alteryx

Week 9-10:  Data Visualization and Insights
- Visualize the sentiment analysis results using appropriate charts, graphs, and dashboards.
- Extract insights from the analysis, such as the most common sentiments expressed, the most frequently mentioned topics, and the overall sentiment trend over time.
> Resources: Python, Tableau

Week 11-12: Model Deployment and Testing
- After the analysis is completed, deploy and test the application to a production environment.
> Resources: Python, Django

Week 13-14: Final Report and Presentation
- Write a final report summarizing the project findings and recommendations.
- Prepare a presentation to communicate the key insights and results to the stakeholders.
> Resources: Tableau

<br></br>
Quality assurance and testing procedures:
For the Sentiment Analysis Study titled "Exploring the Emotional Response of Malaysians towards Menu Rahmah," we have implemented quality assurance and testing procedures to ensure the accuracy and validity of our findings. We have set specific deliverables and milestones to monitor the progress of the project, including Planning and Requirements Gatherings, Data Collection and Preprocessing, Sentiment Analysis Development, Data Visualization and Insights, Model Deployment and Testing, and Final Report and Presentation. These milestones are expected to be completed by the end of weeks 2, 6, 8, 10, 12, and 14, respectively. To ensure the quality of the project, we will conduct regular testing and validation of our sentiment analysis model and data visualization techniques, as well as ensuring that the data collection and preprocessing procedures are accurate and comprehensive. We will also perform a final review of the entire project before submitting the final report and presentation.


## #️⃣: Conclusion

In conclusion, the primary goal of the proposed project is to identify and extract the subjective information from text data, such as opinions, attitudes, emotions, and feelings expressed about a particular topic or entity and in this case, the aim is  to explore the emotional response of Malaysians towards Menu Rahmah through sentiment analysis. The suggested system analyses a dataset of customers and generates predictions using machine learning methods. The team has developed a meticulous schedule and resource plan for the project. As for the project's scope, methodology, and expected results are all well specified. The project's outcomes might enable organisations to extract the information from various sources like social medias and able to provide them insights/ overview to their products.There are, however some risk and limitations for us in carrying out this project like technical, financial and legal risk. In the end of this project, we hope that this will be beneficial to other policymakers, citizens of Malaysia and organisations participating in this programs to help them predict trends and inform business decisions.

