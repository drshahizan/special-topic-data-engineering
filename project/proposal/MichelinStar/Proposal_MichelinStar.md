<h1 align='center'> 
  Heart Disease Prediction Using Machine Learning
 </h1>
<p align='center'>
  <img height='400px' width='400px' src='https://github.com/TanYongSheng728/TanYongSheng728/blob/main/medicine.gif'/>
</p>
  
## 📝 Table of Contents
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

## 📄 Executive Summary

From year to year, the more and more disease have been discovered and spread across the world. Some of the diseases are non-communicable causes by bad habits from new generation. The amount of patient suffereing from the disease have been increasing drastically but due to financial status most of them not able to affort expensive healthcare treatment. Early detection and prevention are crucial to reduce the morbidity and mortality associated with the disease.

Therefore, this proposal outlines the development of a heart disease prediction model using machine learning techniques. The model will analyze patient data to predict the likelihood of developing heart disease and will enable healthcare providers to take proactive measures to prevent the disease. By leveraging predictive analytics, healthcare organizations can anticipate patient needs, prevent adverse events, and optimize resource utilization, resulting in better patient outcomes and reduced cost.


## 🌎 Background

Heart disease, also known as cardiovascular disease, refers to a group of conditions that affect the heart and blood vessels. It is a leading cause of death worldwide, accounting for approximately 17.9 million deaths each year. Heart disease is caused by various factors such as smoking, high blood pressure, high cholesterol, obesity, diabetes, and a sedentary lifestyle.

Detecting heart disease early is crucial for improving patient outcomes and reducing the risk of complications such as heart attack and stroke. Traditional risk assessment tools such as the Framingham Risk Score and the ASCVD risk estimator use patient data such as age, gender, blood pressure, cholesterol levels, and smoking status to estimate the risk of developing heart disease. However, these tools have limited accuracy, and many patients with heart disease are not identified until they experience symptoms.

Machine learning techniques offer a promising approach to predicting heart disease risk by analyzing patient data to identify patterns and relationships. By leveraging the power of machine learning algorithms, it is possible to develop predictive models that can accurately identify patients at risk of developing heart disease.

In recent years, there has been a growing interest in using machine learning for heart disease prediction. Researchers have developed various machine learning models to predict heart disease risk using patient data such as electronic health records, medical imaging, and genetic data. These models have shown promising results, outperforming traditional risk assessment tools and improving patient outcomes.

Therefore, the proposed heart disease prediction using machine learning project aims to develop an accurate prediction model that can enable healthcare providers to identify patients at risk of developing heart disease, take proactive measures to prevent the disease, and improve patient outcomes.

## 🎯 Goals and Objectives

The goal of the heart disease prediction platform is to improve patient outcomes, reduce healthcare costs, and optimize resource utilization through predictive analytics. To achieve this goal, the platform will have the following objectives:

- To collect and preprocess patient data such as medical history, demographics, lab results, and other relevant variables.
- Develop predictive models using advanced analytics techniques.
- To develop a user-friendly web-based interface for healthcare providers to input patient data and obtain heart disease risk predictions.
- To identify the most important predictors of heart disease risk using feature selection techniques.
- Monitor and evaluate platform performance to continuously improve outcomes.

Overall, the goals and objectives of this proposal are aimed at developing a reliable and accurate machine learning-based heart disease prediction system. The platform will enable healthcare providers to make informed decisions about patient care and resource allocation and will help healthcare organizations to achieve their strategic goals.
  

## 🔭 Scope

This project will develop an healthcare analytics platform that will leverage predictive analytics and machine learning to provide actionable insights and identify opportunities for cost savings.
- The data that will be used in this project is collected from <a href="https://www.kaggle.com/datasets/aasheesh200/framingham-heart-study-dataset?resource=download">Kaggle - Framingham heart study dataset</a>.

- To ensure a comprehensive and reliable data set, we will utilize data collection methods to streamline the process of data collection from numerous online sources, and ultimately yield insights on patient outcomes and healthcare costs.

- MongoDB represents the future of data storage in the healthcare industry, and its importance in this project cannot be overstated. By leveraging this cutting-edge platform, we can effectively manage and store complex data sets, and extract meaningful insights to drive better health outcomes and increased cost-efficiency.

## 🔍 Methodology

- Data Collection: The first step in the project is to collect relevant healthcare data. This can include electronic health records (EHRs), medical claims data, and other relevant sources. The data will be collected in a secure manner, and all relevant privacy regulations will be adhered to.

- Data Cleaning: Once the data is collected, it needs to be cleaned and preprocessed. This involves removing irrelevant data, handling missing data, and resolving any inconsistencies. The data will also be transformed into a format suitable for analysis.

- Data Analysis: The cleaned data will be analyzed to identify patterns and trends. This can be done using descriptive statistics and data visualization techniques. Exploratory data analysis (EDA) will be performed to gain an understanding of the data and identify potential outliers and anomalies.

- Machine Learning Algorithms: Once the data has been analyzed, machine learning algorithms will be used to build predictive models. This can include supervised and unsupervised learning techniques such as regression analysis, decision trees, and clustering algorithms. The models will be trained and tested using the available data.

- Data Visualization: Finally, the results of the analysis and machine learning models will be visualized using various techniques, including graphs, charts, and dashboards. This will allow stakeholders to easily understand and interpret the results.
  

## 🔧 System Architecture
<b>Flowchart of system architecture:</b><br>
<p align='center'>
<img src='https://github.com/drshahizan/special-topic-data-engineering/blob/bdc3350dc8a21d41a13bde0b8a96b30737f10408/project/proposal/MichelinStar/flowchart_ver4.jpg'>
</p><br>

<b>Overview of system architecture:</b><br>
<table>
<tr>
  <td><b>1. Data acquisition</b></td>
  <td>Collect the healthcare data from Kaggle and download them in <b>csv</b> format. </td>
</tr>
<tr>
  <td><b>2. Data storage</b></td>
  <td>Upload the collected data to the <b>MongoDB</b>, a NoSQL database which is capable in handling various types and high volume of data. </td>
</tr>
<tr>
  <td><b>3. Data preprocessing</b></td>
  <td>Perform data cleaning process using the <b>Pandas</b> and <b>Numpy</b> libraries to remove, modify and format data which is irrelevant, duplicated or incorrect. This is a significant step to ensure data quality of the building of machine learning model later. </td>
</tr>
<tr>
  <td><b>4. Exploratory Data Analysis (EDA)</b></td>
  <td>In this step, we can identify: 
  <li>the relationship between the features through visualisation using <b>Matpoltlib, Seaborn</b> and any other graph plottiong libraries</li> 
  <li>the occurance of outliers</li>
  <li>the summary of the statistics of the dataset using <b>Pandas</b> and <b>Numpy</b></li>
  <li>the hidden correlation between the features which we overlooked </li></td>
</tr>
<tr>
  <td><b>5. Feture engineering</b></td>
  <td>Feature engineering aims to transform the features in EDA into features which is suitable for building machine learning model. <b>Pandas, Numpy</b> and <b>Scikit-learn</b> are used to handle missing values, skewness, outliers, and imbalance data, scaling down the features and creating new features from existing features for the further steps. </td>
</tr>
<tr>
  <td><b>6. Feature selection</b></td>
  <td>Feature selection is a process in choosing the best set of independent features which are required in model training. It is important in improving the machine learning model performance, reducing the training time of the algorithms and enhance the generalization of the model.</td>
</tr>
<tr>
  <td><b>7. Model building</b></td>
  <td>We choose to build a <b>classification</b> model using the selected dataset in order to help medical-related person in predicting the diagonis result according to the patient's symptoms. The dataset will be split into 3 sets which are train set (to train the algorithms), validation set (to optimise the model) and test set (to evaluate the model). </td>
</tr>
<tr>
  <td><b>8. Model evaluation</b></td>
  <td>The model built will then be evaluated using the <b>Scikit-learn</b> library. Since we are doing classification model, we choose to evaluate our model using the confusion matrix, where we can conclude the level of accuracy, precision, and recall. </td>
</tr>
<tr>
  <td><b>9. Model deployment</b></td>
  <td>The <b>Django</b> web framework will be used to built a web application which allows user to enter the symptoms of the patient and obtain prediction from the classification model. </td>
</tr>
<tr>
  <td><b>10. Model monitoring and maintenance</b></td>
  <td>The <b>MLflow</b> platform is chosen for the purpose of monitor and maintenance of the model. We can carry out tracking experiments, package code into reproducible runs, share and deploy the model through MLflow. </td>
</tr>
</table><br>
<b>Storing, managing and analysing data using MongoDB:</b><br>
<table>
<tr>
<td><b>Storing data</b></td>
<td>
The steps to store csv files into MongoDB are shown as below: <br>
1. Install <code>pymongo</code> and <code>csv</code> pacakages using <code>pip install</code>.<br>
2. Connect to the MongoDB server using <code>pymongo</code> package, then create a new database and collection. <br>
3. Use the <code>csv</code> package to read the csv file, converts each row into one dictionary, and insert them into the collection of the database. <br>
4. Verify the inserted data by querying the collection. 
</td>
</tr>
<tr>
<td><b>Managing data</b></td>
<td>
Data can be managed by MongoDB through a few aspects including querying data, backup and restoring data, and ensuring security of data. Data can be queried through the CRUD operations which stands for creating, reading, updating and deleting data. MongoDB supports the creation of indexes which aid in improving query performance. 

Data availability can be ensured by using the backup and restoring tools of MongoDB. MongoDB also provide authentication and authorization process to avoid unauthorized access and data encryption in order to enhance the data security. 
</td>
</tr>
<tr>
<td><b>Analysing data</b></td>
<td>
To analyse the data, we can use the aggregation function in MongoDB which is a pipeline-based framework to carry out complex data analysis through grouping, filtering and tramsforming data in the collection. 
</td>
</tr>
</table><br>

<b>Requirements to support MongoDB: </b><br>
<ul>
<li>
Hardware requirements: <br>
A device with:
<ul>
<li>64-bit processor</li>
<li>at least 4 GB of RAM</li> <li>at least 10 GB of free disk space</li>
</ul>
</li>
</ul>
<ul>
<li>Software requirements: <br>
MongoDB is compatible with:  
<table> 
<tr>
<td>operating system</td> <td>Linux / Windows / macOS</td>
</tr>
<tr>
<td>programming languages</td> <td>Python</td>
</tr>
<tr>
<td>framework</td> 
<td>Django</td>
</tr>
<tr>
<td>Graphical User Interfaces (GUI)</td> 
<td>MongoDB Atlas / MongoDB Compass</td>
</tr>
<tr>
<td>integrated development environment (IDE)</td> <td>VS Code</td>
</tr>
</table>
</li>
</ul><br>



  

## 📊 Risks and Limitations

Here are some potential risks and limitations associated with heart disease prediction platform project:

**1. Technical Risk**

`Data quality and accuracy:` The data collection process cannot ensure the quality of the data as there may be problems with the data's quality. The quality of the outcomes may be impacted by the data's potential for being erroneous, inconsistent, or incomplete.

`Data bias and ethical considerations:` Heart disease prediction platforms can suffer from bias due to the use of historical data that may reflect past biases or systematic inequalities, which can lead to unfair outcomes and potential harm to patients. Ethical considerations must be taken into account to ensure that the use of patient data is transparent, fair, and respectful of patients' rights and privacy.

`Integration and interoperability:` Integration of various data sources, systems, and applications can be complex and challenging, resulting in interoperability issues, data inconsistencies, and difficulty in data analysis and reporting.

**2. Financial Risk**

`Cost:` Heart disease prediction platforms require ongoing maintenance, updates, and support, which can result in significant ongoing costs that must be factored into the project budget and it can require significant upfront investment, including the cost of hardware, software, and personnel resources.

`Regulatory changes and uncertainty:` Healthcare regulations and policies are constantly evolving, which can create uncertainty around the financial viability of healthcare analytics platforms that may be impacted by these changes. Therefore, the return on investment (ROI) for healthcare analytics platforms can be difficult to predict, and there may be uncertainty around the financial benefits that the platform can deliver.

**3. Legal Risk**

`Data ownership and licensing:` The ownership and licensing of healthcare data can be complex, which can create financial risks related to the use, access, and storage of this data. Failure to properly manage data ownership and licensing can result in financial penalties and legal issues.

`Regulatory compliance:` Healthcare analytics platforms must comply with various legal and regulatory requirements such as HIPAA, GDPR, and data protection laws, failure to comply with these regulations can result in penalties, fines, and legal actions.

**4. Other Risk**

`Lack of standardization:` Heart disease data can be fragmented and inconsistent, with different data formats, terminologies, and coding systems used across different healthcare providers and organizations. This lack of standardization can create challenges for healthcare analytics platforms in integrating and analyzing data effectively.

`Cultural and organizational challenges:` Cultural and organizational challenges can impact the success of healthcare analytics platforms, including lack of communication, siloed data, and misaligned incentives between different stakeholders. Addressing these challenges can require significant organizational change and buy-in from key stakeholders.

## 🔑 Deliverables and Milestones

**Deliverables:**

**1. Project Proposal**
- A proposal that outlines the goals, scope, and methodology of the project will be created for the system.

**2. Data Collection and Preprocessing**
- After the collection of data, the data will be clean for further analysis.

**3. Exploratory Data Analysis**
- A report on the statistical properties and characteristics of the dataset will be created.

**4. Machine Learning Model Development**
- A machine learning model that can predict the presence of heart disease.

**5. Model Evaluation**
- An evaluation of the performance of the machine learning model.

**6. Deployment**
- A web application or API that can take in patient data and provide a heart disease prediction.

**7. Maintenance & Monitoring**
- After the system had been created, we need to maintain and monitor the system to ensure the system can ran smoothly without any error.


 **Milestones:**
 <div align="left">

| Milestones | Timeframe  |
|----------|:-------------:|
| Project Plan | Week 1 |
| Preparation of Data Data Requirement Document | Week 2 |
| Collect and Gather the Data | Week 3 |
| Data Cleaning | Week 4 |
| Data Analysis  | Week 5 |
| Preparation of Data Exploration Report | Week 6 |
| Develop Data and Design UI | Week 7 |
| Add Special feature in UI | Week 8 |
| Preparation of Model Design Document | Week 9 |
| Testing the System | Week 10 |
| Preparation of Testing and Validation Report | Week 11 |
| Deployment of System | Week 12 |
| Maintenance and Monitoring | Week 13 |

## 💡 Resources

The resources needs as below:

- Staff

   - <strong>Data Scientist</strong>: Data Scientist need to make some of the data analysis and statistical analysis for the system.

   - <strong>Data Engineer</strong>: Data Engineer need to design data architecture, develope data pipelines and of course ensuring data quality for the system.

   - <strong>Project Manager</strong>: Project Manager need to handle project planning, risk management, resource allocation, communication and team management to create the system.
  
   - <strong>UI/UX Designer</strong>: UI/UX Designer need to design the user interface for web application and make it comfortable for user's operation.

- Equipment
   - Computer
   - Laptop

- Software
   - <strong>Kaggle Datasets</strong>: Kaggle Datasets is a collection of public datasets that you can use for machine learning tasks, including heart disease prediction. The datasets are hosted on Kaggle and can be easily downloaded and used in your machine learning models.

   - <strong>MongoDB</strong>: MongoDB is a NoSQL database that can be used in machine learning applications in several ways. MongoDB can be used to store and manage large volumes of data for machine learning applications, including heart disease prediction. It is highly scalable and can handle structured, semi-structured, and unstructured data.

   - <strong>TensorFlow</strong>: TensorFlow is an open-source machine learning framework developed by Google. It has a large community of developers and supports a wide range of machine learning tasks, including heart disease prediction.

   - <strong>Scikit-learn</strong>: Scikit-learn is a popular machine learning library in Python, and has several algorithms for classification tasks. It is easy to use and has good documentation.

   - <strong>Visual Studio Code</strong>: Make collaboration with teammates and upload the code to Github by syncing them together. It is easy to track teammates progress and work together. 
  
   - <strong>Github/Git</strong>: Github is an Internet hosting service for software development and version control using Git. It provides the distributed version control of Git plus access control, bug tracking, software feature requests, task management, continuous integration, and wikis for every project.

  
- Other expenses
  - Cloud computing costs
  - Annotation costs
   

## 📱 Technical Specifications

<table>
  <tr>
    <td>Data sources</td>
    <td>Framingham heart disease dataset from Kaggle</td>
  </tr>
  <tr>
    <td>Data schema</td>
    <td>Patient data: gender, age, education, cigarette intake, symptoms of the disease, BMI, risk of future coronary heart disease (CHD)</td>
  </tr>
  <tr>
    <td>Data transformations</td>
    <td>Python libraries: 
    <li>Pandas</li>
    <li>Numpy</li>
    </td>
  </tr>
  <tr>
    <td>ML algorithms</td>
    <td>Scikit-learn</td>
  </tr>
  <tr>
    <td>Data visualization tools</td>
    <td>Python visualisation libraries: 
    <li>Matplotlib</li>
    <li>Seaborn</li>
    <li>Plotly</li>
    <li>PowerBI</li>
    </td>
  </tr>
  <tr>
    <td>Programming Languages</td>
    <td>
    <li>Python</li>
    <li>MongoDB Query Language (MQL)</li>
    <li>CSS</li>
    <li>HTML</li>
    </td>
  </tr>
  <tr>
    <td>Hardware requirements</td>
    <td>
    <li>Windows operating system</li>
    <li>64-bit processor</li>
    <li>at least 4 GB of RAM</li>
    <li>at least 10 GB of free disk space</li>
    </td>
  </tr>
  <tr>
    <td>Software requirements</td>
    <td>
    <li>Linux / Windows / macOS operating system</li>
    <li>Django framework</li>
    <li>MongoDB Atlas / MongoDB Compass GUI</li>
    <li>VS Code IDE</li>
    </td>
  </tr>
  <tr>
    <td>Data security measures</td>
    <td>
    <li>Control the users' access to data according to their role and responsibility through user authentication</li>
    <li>Encrypt the data</li>
    <li>Backup the data regularly to prevent data lost due to unexpected disaster</li>
    <li>Enable firewall to protect the system from cyber attacks</li>
    <li>Consitently change the access password to prevent unnecessary password leakage</li>
    </td>
  </tr>
</table>

## ⌚ Timeline and Deliverables
![Timeline](https://user-images.githubusercontent.com/120614501/229098758-412eed0b-661c-4b20-8603-63a36570ac1c.png)

- Project Plan (`Week 1`)

  > A project plan is a comprehensive document that outlines the goals, objectives, and strategies for completing a specific project. It includes a detailed timeline, task list, and resource allocation, as well as risk assessment and mitigation strategies. The project plan serves as a roadmap for the entire team and ensures that everyone is aligned and working towards the same end goal. 

- Data Preparation (`Week 2`)

  > Discussing which data source that suit the best for our project objectives and scope. 
  
- Data Collection (`Week 3`)

  > Data collection is the process of gathering and measuring information on a specific topic or phenomenon of interest. This involves identifying the data sources, selecting the appropriate data collection methods, and collecting the data itself. 
  
- Data Cleaning and Preprocessing (`Week 4`)

  > Data cleaning involves removing any errors, duplicates, or irrelevant information from the dataset. Data integration involves combining data from multiple sources into a single dataset. Data transformation involves converting the data into a format that can be easily analyzed, such as converting categorical data into numerical data. Data reduction involves reducing the size of the dataset by removing any redundant or unnecessary data.

- Data Analysis (`Week 5`)

  > Data analysis is the process of examining and interpreting data to extract useful insights and information. This involves various techniques such as data mining, statistical analysis, machine learning, and visualization.

- Exploration Report (`Week 6`)

  > Make a document that summarizes the findings and insights gained from exploring a particular topic or dataset. The purpose of an exploration report is to provide a comprehensive overview of the data and any patterns or trends that were identified during the exploration process.

- Build User Interface (`Week 7 - Week 8`)

  > Gather user requirements and design the layout and functionality of the UI. This involves creating wireframes or mockups to visualize the final UI design. Then developed using programming languages and frameworks such as HTML, CSS, and JavaScript. The UI should be designed to be responsive and accessible across multiple devices and platforms.

- Build Model (`Week 9`)

  > Developing a mathematical or computational representation of a real-world system or phenomenon. This model can be used to make predictions or understand the behavior of the system in different scenarios.

- System Testing & Report (`Week 10 - Week 11`)

  > Evaluate a software system or application to ensure that it meets the specified requirements and performs as intended. This involves testing the system as a whole, rather than individual components or modules. 
  
- System Deployment (`Week 12`)

  > After several testing on our website, it is important to release and install a software application or system into a production environment. This involves preparing the system for use by end-users and ensuring that it is available and accessible.

- Maintenance & Monitoring(`Week 13`)

  >  Performance monitoring and user feedback analysis

## 🎓 Conclusion

Based on this proposed project, the main aims is to develop a system that can accurately predict the likelihood of heart disease. The proposed system utilizes machine learning algorithms to analyze a dataset of patient information and generate predictions. The project's scope, methodology, and expected outcomes are well-defined, and the team has proposed a detailed timeline and resource plan for the project. The proposed system is significantly for practical applications, such as helping doctors and healthcare professionals to diagnose and treat patients with heart disease more effectively. The project's results may contribute to the development of more accurate and efficient medical diagnostic tools, which could potentially save lives and improve public health. However, there are also some risk and limitation about this system such as technical, financial and legal risk. In conclusion, the Heart Disease Prediction Using Machine Learning project is a promising initiative with the potential to make a significant impact on the field of healthcare and data science.
