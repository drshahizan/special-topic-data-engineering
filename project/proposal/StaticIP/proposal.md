# Proposal: Energy Consumption Analysis Dashboard

<div align="center">
<img src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/proposal/StaticIP/energy%20consumtion.gif">
</div>

## Table of content
* [Introduction](#📒-Introduction)
* [Background](#🧱-Background)
* [Objective](#🔬-Objective)
* [Scope](#scope)
* [Methologies](#🔖-Methologies)
* [System Architecture](#🖥️-System-Architecture)
* [Risks and Limitations](#Risks-and-Limitations)
* [Deliverables and Milestones](#Deliverables-and-Milestones)
* [Resource](#🗂️-Resources)
* [Technical Specifications](#Technical-Specifications)
* [Timeline and Deliverables](#Timeline-and-Deliverables)
* [Conclusion](#🔍-Conclusion)

## 📒 Introduction
As the world becomes more aware of the impact of energy consumption on the environment, businesses and organizations are increasingly seeking ways to improve their energy efficiency. One of the most effective ways to achieve this is through Energy Consumption Analysis. However, this process can be complicated, time-consuming, and difficult to track. This proposal outlines the development of an Energy Consumption Analysis Dashboard that will simplify the process and provide real-time insights into energy consumption, enabling businesses and organizations to take informed decisions and improve their energy efficiency.

## 🧱 Background
Energy consumption analysis is the process of analyzing energy usage patterns to quantify the energy required by different systems in an organizations. By analyzing the energy usage, we can identify the energy consumption inefficiencies, thus provide alternative solutions to this problem. While conducting the analysis, data sources related to energy consumption of the organization is collected and analyzed to identify the areas of high energy consumption. Strategies to reduce energy usage are proposed based on the analysis. 

However, traditional methods of energy consumption analysis are problematic and inefficient as it does not provide real-time information causing workload increament and time-consuming. We may need to update the analysis manually once there is any update on the data. Traditional energy consumption analysis is also can be difficult to track and monitor because users are unable to interact with it. Users cannot see the previous version of the analysis. Besides, the way of presentation of the analysis is complicated and hard to study.

By implementing energy consumption analysis dashboard, an organization can save up their time and the workload of thier employees because the dashboard provides a real-time energy consumption analysis. There is no longer th need of updating the data manually. Furthermore, dashboard is a good tool to get an overview of energy consumption of the organization. It offers clear and readable data so that users can understand the analysis easily at a glance improving the user experience.

## 🔬 Objective
The goal is to develop an energy consumption analysis dashboard that makes it easier to analyze energy consumption, offers real-time information, and aids companies and groups in keeping track of their energy usage, spotting areas with high levels of consumption and waste, and taking proactive steps to increase efficiency.

- Create a dashboard for energy consumption analysis.
- Simplify the energy usage measurement procedure.
- Offer real-time information on energy consumption trends
- Make it simple and effective for companies and groups to keep track of their energy usage 
- Spot areas with high energy use and loss
- Be diligent in making improvements to energy economy.

<div align="center">
<img src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/proposal/StaticIP/analysis.gif" height="150">
</div>

## Scope
- This section should define the scope of the project, including the data sources to be used, the tools and technologies to be employed, and any other relevant information that will be needed to successfully complete the project.

## 🔖 Methologies
The Energy Consumption Analysis Dashboard will be developed using MongoDB to analyze energy consumption patterns and identify opportunities for energy savings.

To begin the project, all relevant data such as electricity usage and gas usage will be collected. After the data is collected, the data will undergo pre-processing process before it is analyzed. The tasks in data pre-processing include cleaning, filtering and data transforming to ensure the data is usable. Then, we will start to carry out data analysis to derive insights from the data. In order to achieve this task, we will be using MongoDB's aggregation to determine and analyze the peak demand period and energy consumption patterns by geographic location or demographic group or detecting anomalies in energy consumption. Next, we will identify what features will be used to analyze the energy consumption pattern. Example of the features may be used is time, weather and occupancy. After that, we will predict the energy demand and determine the energy efficiency opportunities by developing predictive models by using machine learning models and algorihtms such as linear regression, time-series forecasting or clustering. Finally, we will visualize the results of the analysis by using chart or graph so that we can understand the energy usage patterns and areas of energy savings easily.

## 🖥️ System Architecture
It will be possible to view the Energy Consumption Analysis Dashboard from any device via the internet. With customized dashboards that can be adjusted to the particular demands of individual businesses and groups, it will be made to be user-friendly and simple to traverse. With the help of the dashboard, businesses and organizations will be able to spot areas with high energy consumption and waste and take proactive steps to increase energy efficiency. The dashboard will also provide real-time data on energy usage, expenses, and efficiency. Besides, it will send messages and alerts to users when energy use significantly changes so they can react right away.

<div align="center">
<img src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/proposal/StaticIP/dashboard.gif" height="150">
</div>

## 👻 Risk and limitations
Although creating the energy consumption analysis dashboard will provide make our life more convienient, it still has its risk and limitations:

### 😱 Financial Risk
A huge investments may be needed for data aggregation, collection and storage. If there is no proper financial planning, projects managers may waste the money on unnecessary places. The project end up to be abandoned and unable to be completed causing the organization to lose benefits. 

### 🙀 Technical Risk
Technical risk can involves system breaches, cyber-attacks and technical failure. 

Effective management of technology risk involves:

Identifying potential risks.
Assessing their impact on the project.
Implementing measures to mitigate and manage them.
This can include security protocols, redundancy measures, and contingency plans to ensure the project's success.

### 😨 Legal Risk
Legal risk can be unpredictable and may arise from legal and regulatory duties. These include contract risks, litigation brought against the business or organization, and internal legal issues. 

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

```
- Provide a detailed timeline for the project, including milestones and deadlines.

- Specify the deliverables that will be provided at each milestone. It should also specify the expected time frame for each deliverable and the resources that will be required to complete the project.

- Explain the quality assurance and testing procedures that will be followed.
```

* week1 - week3 : Data collection and integration
    > This step included searching for data source and data preprocessing. We planned to use 3 weeks on this step as a clean data is the top priority for future use.  

* week4 - week6 : Data visualization design
    > Data visualization, which seeks to represent complex data in a simple and straightforward graphic manner, is a crucial part of an Energy Consumption Analysis Dashboard. Using concise and straightforward representations like charts, graphs, and maps, businesses and organizations can quickly identify areas of high energy consumption, track changes in energy usage over time, and make decisions to improve energy efficiency. To create user-friendly images for all users, the process involves transforming numerical data into visual representations, including dynamic components. Companies and organizations can improve energy economy through the use of data visualization, which lowers expenses and encourages a more sustainable future.

* week7 - week10 : User interface design
    > The user interface (UI) design is a crucial element of an Energy Consumption Analysis Dashboard. Its goal is to create a user-friendly layout that is easy to browse and access vital data. The UI design process includes several steps, such as comprehending the target audience, designing the interface with their needs and preferences in mind, and considering interactive features, colour schemes, and fonts. A well-designed user interface can enhance user experience, enable more efficient decision-making, and boost energy economy for businesses and groups.

* week10 - week14 : Testing and deployment
    > Testing and dissemination are crucial phases in the development process to guarantee that the Energy Consumption Analysis Dashboard is functional, bug-free, meets the required specifications, and is distributed securely. Making a test plan, conducting test cases, identifying issues and flaws, and fixing them before publication are all part of the testing process. The dashboard is then distributed to the desired platform after testing is complete, keeping security and data safety in mind. The hardware must be built up, and the software must be installed and customised. Ongoing monitoring and maintenance are required to keep the dashboard functioning correctly and satisfying user requirements.

## 🔍 Conclusion
It is crucial to create an energy usage research panel in order to improve energy efficiency and reduce energy costs for businesses and organizations. Because it gives real-time views into energy use and pollution, it makes it easier to take preventative steps and reduce carbon effect. It is simple to measure and track energy consumption with the interface thanks to its accessibility from any device, which contributes to the development of a more sustainable future.
