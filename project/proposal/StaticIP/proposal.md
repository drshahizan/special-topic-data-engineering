<div>
<h1 align = 'center'><b>Energy Consumption Analysis in Malaysia</b></h1>
</div>

<div align="center">
<img src="https://www.energymagazine.com.au/wp-content/uploads/2019/03/shutterstock_1069016036-e1553576133807.jpg">
</div>

## Table of content
* [Executive Summary](#-executive-summary)
* [Background](#-background)
* [Goals and Objectives](#-goals-and-objectives)
* [Scope](#-scope)
* [Methodology](#-methodology)
* [System Architecture](#-system-architecture)
* [Risks and Limitations](#-risks-and-limitations)
* [Deliverables and Milestones](#-deliverables-and-milestones)
* [Resources](#-resources)
* [Technical Specifications](#-technical-specifications)
* [Timeline and Deliverables](#-timeline-and-deliverables)
* [Conclusion](#-conclusion)

## 📒 Executive Summary
 Businesses and organisations are continuously looking for ways to boost their energy efficiency as Malaysians become more aware of their energy consumption and its effects on the environment. Therefore, energy consumption analysis is one of the most effective ways to accomplish this. However, this process can be complicated, time-consuming, and challenging to monitor. This proposal outlines the development of an energy consumption analysis dashboard that will streamline the process and provide real-time insights on energy consumption where the  expected outcomes enable businesses and organizations to take informed decisions and wise choices to improve their energy efficiency.

## 🧱 Background
 Energy consumption analysis is the process of analyzing energy usage patterns to quantify the energy required by different systems in an organizations. By analyzing the energy usage, we can identify the energy consumption inefficiencies, thus provide alternative solutions to this problem. While conducting the analysis, data sources related to energy consumption of the organization is collected and analyzed to identify the areas of high energy consumption. Strategies to reduce energy usage are proposed based on the analysis. 

 However, traditional methods of energy consumption analysis are problematic and inefficient as it does not provide real-time information causing workload increament and time-consuming. We may need to update the analysis manually once there is any update on the data. Traditional energy consumption analysis is also can be difficult to track and monitor because users are unable to interact with it. Users cannot see the previous version of the analysis. Besides, the way of presentation of the analysis is complicated and hard to study.

 By implementing energy consumption analysis dashboard, an organization can save up their time and the workload of thier employees because the dashboard provides a real-time energy consumption analysis. There is no longer the need of updating the data manually. Furthermore, dashboard is a good tool to get an overview of energy consumption of the organization. It offers clear and readable data so that users can understand the analysis easily at a glance improving the user experience.

## 🔬 Goals and Objectives
 The goal is to develop an energy consumption analysis dashboard that could ease the analysis process of energy consumption in Malaysia which offers real-time information, aids companies and groups in keeping track of their energy usage, spotting areas with high levels of consumption and waste as well as taking proactive steps to increase efficiency. The following objectives are the focus of our energy consumption analysis dashboard:

- To monitor real-time energy KPIs.
- To keep track of energy usage by individual utilities easily.
- To categorize energy costs based on different segments. 
- To determine areas with high energy consumption.
- To observe the variation in energy consumption of a specific period.

 This allows companies to focus their attention on reasons for high demand of energy and plan ways to control energy consumption and minimize costs.

## 🧿 Scope
 The development of an energy consumption analysis dashboard enables businesses and organizations to monitor their energy consumption easily and efficiently as the dashboard will provide real-time data on energy consumption and prices and offer actionable solutions to boost energy efficiency.

- The data source to be used in this project is through the [Malaysia Energy Information Hub (MEIH)](https://meih.st.gov.my/statistics) portal. This portal has a comprehensive of Malaysia's energy database such as crude oil & petroleum, natural gas and electricity.

- MongoDB's aggregation framework will be used as the main tool to extract insights from the data source and execute advanced queries and aggregations which involve pinpointing periods of high energy demand, examining unusual patterns of energy usage.

- Duration, type of industry and other appropriate features are used for analyzing the energy consumption trends via machine learning algorithms to create a model that can forecast energy usage, recognize trends and discover anomalies.

- By using visualisations, the outcomes from the energy usage analysis could be easily comprehend and the findings obtained can be used as opportunities to identify energy savings strategies to increase the efficiency of energy use.

## 🔖 Methodology
 The Energy Consumption Analysis Dashboard will be developed using MongoDB to analyze energy consumption patterns and identify opportunities for energy savings.

 To begin the project, all relevant data such as electricity usage and gas usage will be collected. After the data is collected, the data will undergo pre-processing process before it is analyzed. The tasks in data pre-processing include cleaning, filtering and data transforming to ensure the data is usable. Then, we will start to carry out data analysis to derive insights from the data. In order to achieve this task, we will be using MongoDB's aggregation to determine and analyze the peak demand period and energy consumption patterns by geographic location or demographic group or detecting anomalies in energy consumption. Next, we will identify what features will be used to analyze the energy consumption pattern. Example of the features may be used is time, weather and occupancy. After that, we will predict the energy demand and determine the energy efficiency opportunities by developing predictive models by using machine learning models and algorihtms such as linear regression, time-series forecasting or clustering. Finally, we will visualize the results of the analysis by using chart or graph so that we can understand the energy usage patterns and areas of energy savings easily.

## 🖥️ System Architecture
 It will be possible to view the Energy Consumption Analysis Dashboard from any device via the internet. With customized dashboards that can be adjusted to the particular demands of individual businesses and groups, it will be made to be user-friendly and simple to traverse. With the help of the dashboard, businesses and organizations will be able to spot areas with high energy consumption and waste and take proactive steps to increase energy efficiency. The dashboard will also provide real-time data on energy usage, expenses, and efficiency. Besides, it will send messages and alerts to users when energy use significantly changes so they can react right away.

<div align="center">
<img src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/proposal/StaticIP/dashboard.gif" height="150">
</div>

## 💣 Risks and Limitations
 Although creating the energy consumption analysis dashboard will provide make our life more convienient, it still has its risk and limitations:

### 💰 Financial Risk
 A huge investments may be needed for data aggregation, collection and storage. If there is no proper financial planning, projects managers may waste the money on unnecessary places. The project end up to be abandoned and unable to be completed causing the organization to lose benefits. Therefore, before starting this project, it is very crucial to specify the software and hardware will be used. The team who is responsible to the project must make a report to the project manager what software that may need to subscribe and what hardware may need to purchase. With this detailed financial report, there will be no waste of money on unnecessary places.

### ⚙️ Technical Risk
 One of the most serious technical risk is not having the right data. As we all know, the data sources chosen to carry out the analysis is very important in a data science project. When choosing a data source, the analytics team must think of the following aspects:

- How to ensure the data security?
- Is there a bias in underlying data?
- Can you use the data in an ethical and legal manner in your anticipated use case?
- Are you able to process the data on a timely and cost-effective basis?
- Is the data clean? If not, are you able to clean it?
- Do you know whether the data drift over time?

 Therefore, it is suggested that the analytics team should lay down internal protocols including policies, checklists and reviews to enforce proper data usage.

### 📑 Legal Risk
 This kind of risk happens when the analytics team is given freedom to take any data sources that are relevant are needed to do their job. In this case, it may cause the violence of security, privacy and confidentiality due to the illegal use of the data. Although it is normal to give the permissions to the employees to access the data, it is also very risky as we cannot guarantee that they may intend to use it to do something illegally. In the end, the company has to bear the consequences and it may be very problematic. However, this risk is easier to control compare to other risks. It is suggested that the company only gives the permissions to access the data to one or two of the team members only, but not the whole analytics team. This will help the company to have a better control on the data security, privacy and confidentiality.

## 🗿 Deliverables and Milestones
Key deliverables and milestones:
1) Data collection and integration

   Based on the goals of our dashboard, data from different sources must be collected. For example, data from sensors, energy meters and building management systems.  All of the data will be collected and integrated in the dashboard.

2) Data visualization design

   Data visualization provides graphs and charts to show the latest information on energy consumption analysis. With graphs and charts, data is easy to interpret and understand.

3) User interface design

   The design of user interface must be user-friendly. Users can easily navigate and use the dashboard.

4) Security and privacy

   To ensure the data is secure and protected, security and privacy must be implemented into our dashboard system. The privacy of users will not be lost and used by the others.

5) Testing and deployment

   Testing is required to check if the dashboard can function and interact with users properly. Deployment is needed to improve the performance of the dashboard.

| Week | Deliverables and Milestones | 
| ----- | ----- |
| Week 1 - 3 | Data collection and integration | 
| Week 4 - 6 | Data visualization design | 
| Week 7 - 10 | User interface design | 
| Week 10 - 14 | Testing and deployment | 


## 🗂️ Resources
The dashboard for energy consumption analysis requires the following tools:

- A team of programmers and data scientists 
- Software for data extraction and machine learning - Web development tools and platforms
- Energy meters, data collectors, and monitoring devices
- Cloud saving and storage services

## 🛠️ Technical Specifications

 Data can be collected from different sources such as smart meters, utility bills for energy consumptions analysis. The data schema includes:

- Timestamp
- Energy consumption
- Occupancy data

Data Visualization Tools:
 
- Tableau
- Plotly
- Power BI

Programming Languages, Frameworks and Libraries:

- Python
- JaveScript
- SQL
- Pandas
- NumPy
- Plotly

<a href="https://www.python.org/">
    <img height="50" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg"/>
</a>

<a href="https://www.javascript.com/">
    <img height="50" src="https://github.com/yurijserrano/Github-Profile-Readme-Logos/blob/master/programming%20languages/javascript.svg"/>
</a>

Tools Used:
- MySQL
- AWS and Azure Cloud Platforms

 Before analysis and dashboard design, data cleaning and pre-processing must be involved to remove noise and outliers. This can increase the accuracy and consistency of result when energy consumption data is being analyzed.

 Machine learning algorithm is also included to create build predictive models. Examples of algorithms that can be used are regression models, clustering and neural networks. The choice of algorithm is depended on the type of data and performance metrics for the analysis.

 Since the dashboard will be included on the cloud platform, data must be secured and protected from loss, leakage and misuse. Therefore, some steps must be taken to increase data security such as encryption, data backup and recovery, user access control and data segregation.


- Provide details about the hardware and software requirements for the proposed system.

Hardware requirements:

- Computer

  A desktop or laptop computer with a multi-core processor and a dedicated graphics card is recommended.

- IoT Sensors

  To collect real-time data to create the energy consumption analysis dashboard.

- Network Connection

  To store and transfer data on the cloud platform
 
Software requirements:

- Database

  To store and manage the energy consumption analysis data

- Programming Language

  Use programming language such as Python, SQL, JavaScript to create dashboard

- Analysis Tools

  To perform analytics on the energy consumption data

  - IoT Platform

  To connect to sensors and transfer data to the dashboard such as AWS IoT and Azure IoT.


## ⏲️ Timeline and Deliverables
* week1 - week3 : Data collection and integration
    >  This step included searching for data source and data preprocessing. We planned to use 3 weeks on this step as a clean data is the top priority for future use.  

* week4 - week6 : Data visualization design
    > Data visualization, which seeks to represent complex data in a simple and straightforward graphic manner, is a crucial part of an Energy Consumption Analysis Dashboard. Using concise and straightforward representations like charts, graphs, and maps, businesses and organizations can quickly identify areas of high energy consumption, track changes in energy usage over time, and make decisions to improve energy efficiency. To create user-friendly images for all users, the process involves transforming numerical data into visual representations, including dynamic components. Companies and organizations can improve energy economy through the use of data visualization, which lowers expenses and encourages a more sustainable future.

* week7 - week10 : User interface design
    >  The user interface (UI) design is a crucial element of an Energy Consumption Analysis Dashboard. Its goal is to create a user-friendly layout that is easy to browse and access vital data. The UI design process includes several steps, such as comprehending the target audience, designing the interface with their needs and preferences in mind, and considering interactive features, colour schemes, and fonts. A well-designed user interface can enhance user experience, enable more efficient decision-making, and boost energy economy for businesses and groups.

* week10 - week14 : Testing and deployment
    >  Testing and dissemination are crucial phases in the development process to guarantee that the Energy Consumption Analysis Dashboard is functional, bug-free, meets the required specifications, and is distributed securely. Making a test plan, conducting test cases, identifying issues and flaws, and fixing them before publication are all part of the testing process. The dashboard is then distributed to the desired platform after testing is complete, keeping security and data safety in mind. The hardware must be built up, and the software must be installed and customised. Ongoing monitoring and maintenance are required to keep the dashboard functioning correctly and satisfying user requirements.

## 🔍 Conclusion
 It is crucial to create an energy usage research panel in order to improve energy efficiency and reduce energy costs for businesses and organizations. Because it gives real-time views into energy use and pollution, it makes it easier to take preventative steps and reduce carbon effect. It is simple to measure and track energy consumption with the interface thanks to its accessibility from any device, which contributes to the development of a more sustainable future.
