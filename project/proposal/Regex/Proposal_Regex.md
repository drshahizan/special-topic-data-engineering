<h1 align='center'> 
  Shopee Supermarket Sales Performance Dashboard <img height='50px' width='50px' src='https://user-images.githubusercontent.com/120556342/228145762-83c369fc-a6b8-49da-a2be-fd31b7f280c3.png'>
 </h1>
 <h3 align='center'> 
 Analyze Shopee Supermarket sales by Household Supplies Category to gain insights into market trend and optimize sales strategy
  </h3>
  <br>
<p align='center'>
  <img height='250px' width='400px' src='https://intellipaat.com/blog/wp-content/uploads/2015/07/Big-Data.gif'/>
</p>

<br>
  
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

## 📄Executive Summary

Increasing internet penetration and smarter, more powerful devices have made Malaysia's e-commerce market among the strongest it has ever been. Consumers are increasingly flocking online to purchase products and services. This means Malaysia e-commerce statistics are crucial to the creation of effective content strategies for publishers and affiliate marketers targeting the country. 

Therefore, this project aims to produce an e-commerce analytics dashboard that helps to optimize e-commerce operations and to improve profitability by leveraging the insights provided by Shopee e-commerce data. Sales data will be used to identify which products are selling well and which are not, to understand seasonal trends and to optimize pricing strategies.


## 🌎Background

An ecommerce analytics dashboard is a group of visualizations based on ecommerce store’s data. Most dashboards cover a specific goal or topic, such as traffic or audience behavior. Nowadays, it has become essential since the number of online users have increased dramatically and there is a growing shift from offline to online purchasing. The growth is supported by the rapid adoption of smartphones, growing internet penetration, and the availability of secure online payment systems. This situation causes the difficulty of monitoring online business as there are large amounts of transactions in a day and new strategies are needed to attract customer interest. 

Other than that, the increasing number of competitors is one of the problems with e-commerce. As a common habit, most of the customers will compare the price and quality at different platforms before buying the product. Therefore, it is important for businesses to come up with appropriate pricing strategies. 

By analyzing the sales data from Shopee, we can have greater efficiency because dashboards save time by showing us the most important metrics at a glance. It also allows decision-making faster since we won't have to wait on a report to get the relevant data and it presents all the relevant findings within a single pane. With only the most important data in focus, we will be better equipped to analyze the critical metrics in-depth.

In summary, this project aims to provide a sales analysis dashboard that gives insight about the sales data in order to help e-commerce platforms increase efficiency, enhance business strategy and higher profitability. 
  

## 🎯Goals and Objectives

Around 80% of eCommerce businesses have been failing because of insufficient marketing strategy and selling the wrong product at the wrong price. Therefore, an effective marketing plan is the key success of all businesses. The business owner has to collect sales data and then analyze it himself. Without doing this, the business owner cannot understand the current situation of the marketplace.

However, modern technology can help to solve this problem effectively. Therefore, the owner's time will not be wasted to the maximum extent. The sales performance analysis dashboard of our project target to achieve the following objectives. 

- To determine sales trends.
- To provide real-time information on sales.
- To monitor the most important metrics and KPIs.
- To identify which products are selling well and which are not.
- To optimize pricing strategies.

This will be significant for online sellers to track their progress and quickly respond to any changes by getting insights and analytics on e-commerce data. 
  

## 🔭Scope

This project will develop an e-commerce analytics dashboard to analyze the sales performance of household supplies at Shopee Supermarket in order for businesses to obtain valuable insights and look to optimize their online sales and marketing efforts.

- The data that will be used in this project is collected from <a href="https://shopee.com.my/">Shopee</a> Malaysia. It is an e-commerce platform that sells a variety of categories of products like Home & Living, Health & Beauty and Electronics.
 
- Web scraping tool is used to extract product information from Shopee. The extracted data will be processed and analyzed. 

- MongoDB is important to store and analyze data since it contains a powerful aggregation framework to analyze the sales data. For example, the aggregation pipelines can be used to group the data by product, customer, or time period and calculate metrics such as total sales, average order value, and customer lifetime value.

- Visualization tools like Power BI and Tableau are considered to help business owners to understand the sales data and support data-driven decisions.


  

## 🔍Methodology

1. `Data Collection:` First and foremost is data collection. We will collect data such as price, item sold and profit about products from Shopee Supermarket by household supplies category. All of the data sales can be retrieved by using web scraping method.

2. `Data Preparation:` This step includes **data cleaning** and **data transforming** process where all retrieved data will be cleaned in order to make sure there are no noisy and dirty data. Hence, the quality of the data increases which later will produce more complete, accurate and consistent result. Then, transform the format of the data if needed.

3. `Data Analysis:` After the data is cleaned, the next step is to analyze the data using descriptive statistics and exploratory data analysis techniques. This will help to identify patterns and trends in the data.

4. `Machine Learning Algorithms:` Next, machine learning algorithms can be used to predict customer satisfaction based on the data collected. This can be done by building a model using supervised learning techniques such as regression or classification.

5. `Data Visualization:` The final step is to present the results of the analysis and machine learning algorithms using data visualization techniques. This can be done using tools such as Power BI or Python libraries such as Matplotlib and Seaborn.


## 🔧System Architecture

**Proposed system architecture for the Shopee Supermarket Sales Performance Dashboard:**

<p align=center><img src=https://github.com/drshahizan/special-topic-data-engineering/blob/370574982f89f418c400339172e14cf9fc79fc12/project/proposal/Regex/system%20architecture.drawio.png></p>

<table align=center>
  <tr>
    <th>Components</th>
    <th>Details</th>
    <th>Tools/Technologies</th>
  </tr>
  <tr>
    <td>Data Sources</td>
    <td>Data are gathered from Shopee Malaysia Website to provide raw data for analysis.<br></br>
    <ol>
    <li>Shopee Supermarket transactional data: sales transactions, product details, and category details.</li>
    <li>Shopee Supermarket inventory data: product availability, pricing, and promotions.</li></ol>
    </td>
    <td>
      <li>Web Scraper</li>  
    </td>
  </tr>
  <tr>
  <tr>
    <td>Data Processing</td>
    <td>Once the data is collected and stored, it needs to be preprocessed and transformed into a format that can be analyzed. This involves data cleaning, normalization, transformation, etc.</td>
    <td>
      <li>Python</li> 
    </td>
  </tr>
  <tr>
    <td>Data Storage</td>
    <td>Storing the prepared data in a data warehouse or a data lake. This data will be stored in a format that is optimized for fast querying and analysis.</td>
    <td><li>MongoDB</li></td>
  </tr>
  <tr>
    <td>Data Analysis</td> 
    <td>The data analysis will include the following:
      <ol>
      <li>Descriptive analytics: Analyzing historical data to identify trends, patterns, and anomalies in sales performance.</li>     
      <li>Diagnostic analytics: Identifying the factors contributing to sales performance, such as product availability, pricing, and promotions.</li>
      <li>Predictive analytics: Using machine learning algorithms to predict future sales performance based on historical data and other factors.</li>
      <li>Prescriptive analytics: Recommending actions to optimize sales performance, such as adjusting pricing, promotions, and product availability.</li>
      </ol></td>
    <td>
          <li>Python Pandas</li>
          <li>Python NumPy</li>
          <li>Matplotlib, Seaborn, or Plotly</li>
          <li>Scikit-learn</li>
     </td>
  </tr>
  <tr>
    <td>Visualization</td>
    <td>Present the results of the data analysis in the following format:
      <ol><li>Dashboards: A high-level view of sales performance, such as overall sales, top-performing products and categories, and seasonal trends.</li>
      <li>Reports: A detailed sales performance analysis, such as sales by product, and category.</li>
      <li>Charts and graphs: This will provide visual representations of the data, such as line charts, bar charts, and pie charts.</li>
  </td>
    <td><li>Power BI</li></td>
  </tr>
  <tr>
    <td>User Interface</td>
    <td>Provide an interactive platform for users to access the data visualization and make informed decisions.</td>
    <td rowspan='2'><li>Django</li></td>
  </tr>
   <tr>
    <td>Web Deployment</td>
    <td>Deploy the dashboard on a suitable platform and ensure that monitoring tools are in place to detect and address any issues that may arise.</td>
  </tr>
</table>
<br>

<b>To store, manage, and analyze data using MongoDB, the following steps can be taken:</b>

<table align=center>
  <tr>
    <th>Steps</th>
    <th>Descriptions</th>
  </tr>
  <tr>
    <td>Data modeling</td>
    <td>Create a data model that fits the structure of the data and the analysis needs. In MongoDB, the data is stored as documents, which can be nested and have different fields. A data model should be designed based on the types of data sources and analysis requirements.</td>
  </tr>
  <tr>
    <td>Data storage</td>
    <td>MongoDB can be installed on-premises or in the cloud, such as on AWS or Microsoft Azure. The hardware requirements depend on the data size and the traffic volume. For example, MongoDB recommends at least 8 GB of RAM for a production deployment. The storage can be provisioned using a distributed file system such as Amazon EBS or Google Persistent Disk.</td>
  </tr>
  <tr>
    <td>Data analysis</td>
    <td>MongoDB has a rich set of querying capabilities, such as aggregation pipeline, full-text search, and geospatial queries. MongoDB can also be integrated with programming languages such as Python, Java, and JavaScript.</td>
  </tr>
  <tr>
    <td>Data visualization</td>
    <td>The analyzed data can be visualized using tools such as Power BI. The visualization tools can be integrated with MongoDB using MongoDB Connector for BI.</td>
  </tr>
</table>
<br>

<b>The hardware and software requirements for MongoDB</b>

<table align=center>
  <tr>
    <th>Hardware Requirements</th>
    <th>Software Requirements</th>
  </tr>
  <tr>
    <td>CPU: 4-core, 2.5 GHz or higher</td>
    <td>Linux, Windows, and macOS</td>
  </tr>
  <tr>
    <td>RAM: 16 GB or higher</td>
    <td>MongoDB server, drivers, Compass, and BI Connector</td>
  </tr>
  <tr>
    <td>Storage: 500 GB or higher, preferably using SSDs</td>
    <td>Third-party tools such as Python, R, or SQL for data analysis</td>
  </tr>
</table>
<br>

## 📊Risks and Limitations

Here are some potential risks and limitations associated with Shopee Supermarket sales performance analysis dashboard project:

**1. Technical Risk**

`Data Quality:` Although the data may be accessible, there may be problems with the data's quality. The quality of the outcomes may be impacted by the data's potential for being erroneous, inconsistent, or incomplete.

`Data Availability:` The availability of data is a significant restriction. The suggested project might need data that is hard to get or might not be available. Data may be accessible in some circumstances, but its acquisition may be prohibitively expensive.

`System crashes and downtime:` When a system crashes or experiences a downtime, it will affect the implementation of the project and lead to delays and inaccurate insights.

**2. Financial Risk**

`Cost:` It includes the cost of acquiring and storing data since the larger the amount of data that needs to be stored, the higher the cost of the project. Other than that, it can be costly to develop and maintain a dashboard, it depends on the complexity of the project and the tools used.

`Return on investment (ROI):` The dashboard may not bring enough profit to the business compared to the cost of development and maintenance.

**3. Legal Risk**

`Data privacy and protection:` Shopee contains the privacy and sensitive data of customers and the use of these data may be subject to data protection laws and regulations. Therefore, businesses must ensure compliance with these regulations.

`Intellectual property rights:` It is possible to face legal issues relating to intellectual property rights when using proprietary or copyrighted data or information.

**4. Other Risk**

`Scope Creep:` Another risk is scope creep, where the project's objectives may expand beyond the initial scope. This can lead to additional work and resources being required, which can affect the project's timeline and budget.


These risks and limitations must be taken into consideration before implementing the project. Below are plans for mitigating these risks and limitations:

**1. Technical Risk**
- Collect data from reliable resources and implement the strategies like data cleaning, data validation and data standardization to ensure data accuracy, completeness, and consistency.
- When the required data is not available, simulations or experiments can be used to generate data, or the data can be collected from different sources.
- In the event of a system crash or other technical issue, implement a backup and recovery plan to minimize the downtime and losses of data.

**2. Financial Risk**
- Conduct a cost-benefit analysis and establish a budget for data acquisition, storage, and dashboard development and maintenance.
- Reducing maintenance and development costs can be achieved with open-source dashboard tools.

**3. Legal Risk**
- Make sure that all applicable data protection and intellectual property laws are followed.
- Consult experts to get legal advice to ensure compliance with relevant laws and regulations.

**4. Other Risk**
- Establish clear project goals and objectives and communicate effectively with stakeholders.

Overall, it is important to recognize the risks and limitations of the project and have mitigation strategies that help to minimize risks in order to ensure the success of the project. 

## 🔑Deliverables and Milestones

The key deliverables and milestones: 

**1. Data collection and cleaning**
     
This involves gathering sales data from Shopee Supermarket, such as product name, price and quantity sold by using web scraping. Following the collection of  data, data pre-processing tasks such as cleaning, filtering, and transforming the data into usable format will be performed.

**2. Data analysis and modeling**

Analyze the sales data by grouping the data and calculating metrics with MongoDB's integration framework. This entails analysing the data using statistical and machine learning techniques and developing models.

**3. Dashboard design and development**

Designing the dashboard's layout and visualisations based on sales analysis results, such as charts or graphs, to identify top-selling products and understand sales trends.

**4. Testing and debugging**

Testing the dashboard to ensure its functionality and debugging any issues that arise.

**5. Deployment and maintenance**

Launching the dashboard and ensuring that it is maintained and updated as necessary.

<table align=center>
  <tr>
    <th>Deliverables and Milestones</th>
    <th>Timeframe</th>
  </tr>
  <tr>
    <td>Data gathering and cleaning</td>
    <td>End of week 5</td>
  </tr>
  <tr>
    <td>Data analysis and modeling</td>
    <td>End of week 8</td>
  </tr>
  <tr>
    <td>Dashboard design and development</td>
    <td>End of week 11</td>
  </tr>
    <tr>
    <td>Testing and debugging</td>
    <td>End of week 13</td>
  </tr>
  <tr>
    <td>Dashboard deployed and presentation</td>
    <td>End of week 14</td>
  </tr>
</table>

## 💡Resources

The resources needs as below:

- Staff

   - Data Scientist

   - Data Engineer
 
   - Database Administrator

   - Project Manager
 
   - UX/UI Designer

- Equipment
   - Computer/Laptop
 
- Software
   - Python and libraries
   - MongoDB
   - Django/Visual Studio Code
   - Power BI
  
- Other expenses
  - Software cost (if needed)

## 📱Technical Specifications


<table>
  <tr>
    <th>Data sources</th>
    <td>Extracted data from Shopee Supermarket Malaysia by performing web scraping</td>
  </tr>
  <tr>
    <th>Data schema</th>
    <td>Product data: Product ID, Product Name, Items Sold, Product Category, Price per Product, Total Revenue </td>
  </tr>
  <tr>
    <th>Data transformations</th>
    <td>Python libraries:
      <li>Pandas</li>
      <li>Numpy</li>
    </td>
  </tr>
  <tr>
    <th>ML algorithms</th>
    <td>Scikit-learn</td>
  </tr>
  <tr>
    <th>Data visualization tools</th>
    <td>
      <li>Power BI</li>
      <li> Python visualization libraries: Matplotlib, Seaborn, Plotly
      </li>
    </td>
  </tr>
  <tr>
    <th>Programming Languages</th>
    <td>
      <li>SQL</li>
      <li>Python</li>
    </td>
  </tr>
  <tr>
    <th>Hardware requirements</th>
    <td>
      <li>Memory: 16 GB or more</li>
      <li>Processor: 2 GHz or more</li>
      <li>Storage: 25 GB or more free disk space</li>
      <li>Web browser</li>
    </td>
  </tr>
  <tr>
    <th>Software requirements</th>
    <td>
      <li>Power BI</li>
      <li>MongoDB</li>
      <li>Visual Studio Code</li>
    </td>
  </tr>
  <tr>
    <th>Data security measures</th>
    <td>
      <li>Perform Encryption</li>
      <li>Conduct regular backups</li>
      <li>Install anti-malware software</li>
      <li>Enable access control on MongoDB</li>
      <li>Use a firewall / security groups (if in cloud)</li>
      <li>Use strong password for authentication and authorization of MongoDB</li>
    </td>
  </tr>
</table>

## ⌚Timeline and Deliverables

<div class="mermaid">
  
  ```mermaid
gantt
    title Shopee Supermarket Sales Performance Dashboard
    dateFormat  YYYY-MM-DD
  
    section Data Gathering and Cleaning
    Data Gathering  :2023-04-02 , 19d
    Data Cleaning  :2023-04-30 , 7d
  
    section Data Analysis and Modeling
    Data Analysis            :2023-05-07  , 7d
    Data Modeling                    :2023-05-14 , 7d
  
    section Dashboard Design and Development
    Dashboard Design               :2023-05-21 , 7d
    Dashboard Development       :2023-05-28 , 14d
 
    section Testing and Debugging
    Live Testing                :2023-06-11 , 2d
    Debugging     :2023-06-13 , 5d
  
    section Dashboard deployed and live
    Dashboard deployed      :2023-06-18  , 3d
    Dashboard live      :2023-06-21 , 4d
  
  ```
  </div>

<br>

**1. Detailed timeline**

- WEEK 3 - 7 : `Data Gathering and Cleaning`
  > - Gather product data and store the data in MongoDB.
  > - Clean the data to remove any inconsistencies or anomalies.
  
- WEEK 8 - 9 : `Data Analysis and Modeling`

  > - Perform EDA and data modeling to discover the market trend.
    
- WEEK 10 - 12 : `Dashboard Design and Development`

  > - Design and development the dashboard to visualize the product summary in Shopee.
  
- WEEK 13 : `Testing and Debugging`

  > - Test the dashboard whether it can working properly or not and ensure that it is ready to be used.
  > - Identify errors and remove those errors if there exist.

- WEEK 14 : `Dashboard deployed and live`

  > - Deploy dashboard and make it live where it should change constantly according to the incoming(live) data monthly.
  
<br>

**2. Deliverables and resources**

Data Gathering and Cleaning
  - Deliverables : Cleaned and structured Shopee Supermarket data
  - Resources :  Web-scraper, MongoDB, Visual Studio Code
  
Data Analysis and Modeling

  - Deliverables : A conceptual representation of data objects, relationships between them, and the rules that govern data manipulation.
  - Resources : Visual Studio Code
    
Dashboard Design and Development
  - Deliverables : Dashboard on the web
  - Resources : MongoDB, Power BI
  
Testing and Debugging

  - Deliverables : A high quality and reliable dashboard  
  - Resources : Visual Studio Code, Django

Dashboard deployed and live

  - Deliverables : A functional and complete dashboard
  - Resources : Django
  
<br>
 
**3. Quality assurance and testing procedures**

To guarantee that an ecommerce analysis dashboard complies with the necessary standards and provides accurate and reliable data, quality assurance and testing processes are essential. 

- 1. Data Validation: The process of validating the accuracy and completeness of the data gathered by the ecommerce analytics dashboard is known as data validation. This involves making sure the data is accurate, complete, and consistent.

- 2. Continuous Monitoring: This is to make sure the ecommerce analytics dashboard is functioning properly and giving accurate data.

- 3. Functional testing: This process makes sure the dashboard works as intended. To ensure they function properly, all the features and connections must be tested.

- 4. Compatibility Testing: This process verifies that the dashboard is functional on all widely used platforms and is compatible with a variety of browsers.

- 5. Performance testing: Performance testing analyzes the dashboard's speed and performance under various loads to make sure it can manage a lot of users and data.

- 6. Security testing: Security testing makes sure that confidential data is protected and that the dashboard is safe from unauthorised access. This involves  testing data encryption, user identification, and other security features.

- 7. Usability testing: Usability testing determines how simple and user-friendly the interface is to use and how easy it is to understand. This includes testing the dashboard's navigation, layout, and overall user experience.

- 8. Regression Testing: Regression testing is used to make sure that new dashboard features or modifications would not have an impact on existing functionality.

- 9. User Acceptance Testing: In user acceptance testing, a group of users who represent the intended target audience test the dashboard. This can assure that the dashboard meets their needs and expectations.

As a result of following these testing procedures, we can make sure that our ecommerce analysis dashboard is high quality, reliable, and offers valuable insights to the customers.
<br>

## 🎓Conclusion

In conclusion, the proposed Shopee Supermarket Sales Performance Dashboard project is a powerful solution for business since it can provide valuable insights for businesses looking to optimize their sales strategy and increase revenue on Shopee. Other than that, the dashboard enables business owners to monitor sales performance, identify top-performing products and analyze the sales data. From here, this will definitely improve the decision making process of businesses and help them stay competitive in the marketplace.

However, there are some challenges that need to be overcome in building a successful dashboard. For example, technical risks like data quality and availability issues, financial and legal risks should also be considered and develop a comprehensive risk management plan that helps to mitigate these risks to ensure the success of the project. 

We believe by approving this proposal, it will bring the benefit to the business at the end of the completion of the project. Since they will be able to gain profit by using this powerful dashboard. We will also try to deliver a high-quality dashboard to solve the client's problem and help their business succeed on Shopee.

