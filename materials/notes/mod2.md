<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

# Module 2: Data Integration

<h2 align="center">
  Group Name
  <br>
</h2>

<p align="center">
  <a>DataSphere</a><br>
</p>

<h2 align="center">
  Group Members
  <br>
</h2>
<p align="center">
<table align="center">
  <tr>
    <th>Name</th>
    <th>Matric No</th>
  </tr>
  <tr>
    <th>TERENCE A/L LOORTHANATHAN   </th>
    <th>A20EC0165</th>
  </tr>
    <tr>
    <th>RISHMA FATHIMA BINTI BASHER </th>
    <th>A20EC0137</th>
  </tr>
    <tr>
    <th>NUR SYAMALIA FAIQAH BINTI MOHD KAMAL</th>
    <th>A20EC0118</th>
  </tr>
    <tr>
    <th>QAISARA BINTI ROHZAN</th>
    <th>A20EC0133</th>
  </tr>
    <tr>
    <th>NURFARRAHIN BINTI CHE ALIAS </th>
    <th>A20EC0121</th>
  </tr>
  </table>
</p>


### Contents:
* [Introduction](#-introduction)
* [Data Integration Architecture](#️-data-integration-architecture)
* [Data Integration Workflow](#-data-integration-workflow)
* [Data Integration Workflow Integration Breakpoints](#-data-integration-workflow-integration-breakpoints)
* [Data Integration Workflow Stages](#️-data-integration-workflow-stages)
* [Data Integration Requirements](#-data-integration-requirements)
* [Data Integration Design](#-data-integration-design)
* [Data Integration Tools and Types](#-data-integration-tools-and-types)


## Introduction
Software engineering is an essential field of study that deals with the design, development, and maintenance of software applications. It plays a vital role in the development and success of modern technology. Here are some of the reasons why software engineering is important:


## Data Integration Architecture

## Data Integration Workflow
<br>

**What is Data Integration Workflow?**

The steps of integrating data from several sources, converting it into a common format, and putting it into a final system, like a data warehouse or data lake, is widely referred to as data integration workflow. It is critical to obtaining a unified perspective of an organization's data and is a fundamental part of contemporary data management. Organizations may increase data quality, eliminate mistakes, and optimize their data management procedures with the aid of a well-designed data integration strategy. No matter where or in what format their data is kept, it may also make it easier for them to access and use it. 

In the figure below, we have designed an easy to understand version of the data integration workflow. It is our own take on most high level data integration workflow used as a guideline to integrate data into systems.


<br>
 <p align="center">
  <img src="https://github.com/Terence172/FirstR/blob/main/Pictures/Data%20Integration%20Workflow.png"/>
 </p>
<br>

## Data Integration Workflow Integration Breakpoints

## Data Integration Workflow Stages

To ensure that the process of integrating data and loading them into a system goes smoothly, we have guidelines that can be referred to. One of which is a Data Integration Workflow, there are several phases and steps in the data integration workflow depicted above. 

Table below explains each phase in the data integration workflow depicted above :
<br>
| No. | Phase | What is done during this phase? |
| ------------- | ------------- | ------------- |
| 1. | Data Source Identification and Extraction | Identify the relevant data sources and extract the data from them for further processing. |
| 2. | Data Transformation & Integration | Transform the data from its original format to a format that can be integrated into the target system. The data is then integrated into the target system. |
| 3. | Enterprise Data Warehouse (EDW) | Create and manage an enterprise data warehouse to store and manage the integrated data. |
| 4. | Data Analysis and Reporting | Analysis and visualization of data for reporting for decision-making purposes. |
| 5. | Business Intelligence (BI) | Making use of BI tools to facilitate data analysis and reporting. |

<br>
Table below explains each phase in the data integration workflow depicted above :
<br><br>

| Step | What is done during this step? | Phase |
| ------------- | ------------- | ------------- |
| Identify data sources | Identifying the different sources of data is to be integrated, such as cloud-based services, databases, flat files, or web services. | Data Source Identification and Extraction |
| Extract data | Extract the data from each identified data source and store it in a staging area. [ Web Scraping, etc. ] | Data Source Identification and Extraction |
| Data Transformation | Transforming the extracted data into the desired format. [ Data mapping, cleansing, and formatting to ensure the data is consistent and accurate ] | Data Transformation & Integration |
| Data Integration | Integrating the transformed data into a data warehouse, which should be able to be accessed by various applications for reporting and analysis purposes. | Data Transformation & Integration |
| EDW Staging | Here the data is loaded into a staging area of the data warehouse for further processing. | Enterprise Data Warehouse (EDW) |
| Staged Data | A database environment where staged data is stored ready for processing. | Enterprise Data Warehouse (EDW) |
| EDW Integration | Here data is integrated into the enterprise data warehouse. This process involves data validation, cleansing, and standardization. | Enterprise Data Warehouse (EDW) |
| EDW Data Distribution | Here is where integrated data is made available to various applications and departments within the organization. | Enterprise Data Warehouse (EDW) |
| Data Quality Assessment | Here is where data is assessed for its quality, accuracy, completeness, and consistency to ensure that it is fit for analysis and reporting. | Data Analysis and Reporting |
| Data Analysis | Data is analyzed here, using various techniques such as descriptive, diagnostic, predictive, and prescriptive analytics. | Data Analysis and Reporting |
| Data Visualization | Here is where data is presented visually using interactive dashboards, charts, graphs, and maps. This process can be done using various BI Tools | Business Intelligence (BI) |
| Reporting | Here is where customized reports are generated based on user requirements. This process can be done using various BI Tools | Business Intelligence (BI) |
| BI Platform | A central platform that can be used to present findings from integrated data. | Business Intelligence (BI) |


## Data Integration Requirements

| Data Integration Requirements | Description |
| --- | --- |
| Data Quality | Data being integrated should be accurate, complete, and consistent. Data profiling and cleansing can be used to improve data quality. |
| Data Mapping | The process of creating a connection between the data from different sources by identifying relationships between data elements and mapping them to a common format. |
| Data Transformation | The process of converting data from one format to another, done manually or automatically using ETL tools. |
| Data Integration Architecture | The design of the system used to integrate data, including identifying components and how they interact with each other. |
| Security | Protecting integrated data from unauthorized access as it may contain sensitive information. |
| Performance | Designing data integration to minimize the time required and ensure timely availability without affecting system performance. |
| Scalability | Data integration system should be able to handle large amounts of data without compromising performance. |
| Governance | Data integration should be governed by policies and procedures consistent with the organization's overall data governance strategy. |


## Data Integration Design
Data Integration design is the act of merging data from many sources into a unified perspective that can be easily accessed and analysed. The purpose is to provide a complete and accurate perspective of data to aid decision-making and business operations.

<br>
 <p align="center">
  <img src="https://github.com/qaisarrra/images/blob/main/Data%20Integration%20Design.png"/>
 </p>
<br>

1. ``Gathering of requirements``: This entails comprehending the data sources, their formats, and the business requirements for data integration.
2. ``Data profiling``: In this step, the data is analysed to determine its structure, quality, and completeness.
3. ``Data mapping``: During this stage, data from various sources is mapped to a single data model. This entails determining the connections between the data and the attributes that must be incorporated.
4. ``Data transformation``: During this phase, the data is converted from its original format to a format that can be easily integrated.
5. ``Data quality validation``: Assessing the quality of the integrated data, including accuracy, completeness, and consistency checks.
6. ``Deployment``: In this phase, the combined data is deployed to the production environment.

## Data Integration Tools and Types

- What are Data Integration Tool
    
    Data integration tools are software applications that help organizations to combine and manage data from different sources. These tools typically provide features such     as data extraction, transformation, and loading (ETL), data cleansing, data mapping, and data synchronization.

- Types of Data Integration Tool
    1. ``On-premise Data Integration Tool`` : On-premise data integration tools are software applications that are installed and run on a company's own servers or hardware          infrastructure. These tools are designed to integrate data from various sources within an organization's own network, rather than relying on cloud-based services or       external systems.
    2. ``Cloud-based Data Integration Tool`` : Cloud-based data integration tools are software applications that are hosted on cloud servers and accessed through the                internet. 
    3. ``Open Source Data Integration tool`` : Open source data integration tools are software applications that are freely available and can be customized and modified by          users. These tools provide a cost-effective and flexible solution for data integration needs, as they offer access to source code, enabling users to customize              and extend the tool as needed. 
    4. ``Propietary Data integration Tool`` : Proprietary data integration tools are software applications developed and sold by vendors, and they typically offer a range of       features and capabilities for data integration tasks. These tools are often designed to work seamlessly with other proprietary software from the same vendor,                providing a comprehensive data management solution. 

    
     
- How to Select the best Data Integration Tool
    1. ``Data Sources``: Consider the types and formats of data sources you need to integrate. Make sure the tool you choose can connect to all the necessary data sources            and handle the data formats you work with.

    2. ``Data Volume``: Consider the volume of data you need to process and how quickly you need to process it. Choose a tool that can handle the scale of your data and              process it efficiently.

    3. ``Integration Complexity``: Consider the complexity of the integration you need to perform. Choose a tool that offers the necessary features and functionality to              handle your integration requirements.

    4. ``Data Quality``: Consider how the tool handles data quality, including data validation, cleansing, and transformation. Choose a tool that provides robust data                quality capabilities.

    5. ``Ease of Use``: Consider how user-friendly the tool is, including its ease of installation, configuration, and use. Choose a tool that provides a streamlined,                intuitive user interface.

    6. ``Scalability``: Consider how well the tool can scale as your data integration needs grow over time. Choose a tool that can easily accommodate additional data                sources, volume, and complexity.

    7. ``Vendor Support``: Consider the level of vendor support you need, including technical support, training, and documentation. Choose a tool that provides robust                vendor support services.

    8. ``Cost``: Consider the cost of the tool, including licensing fees, maintenance fees, and other associated costs. Choose a tool that provides the necessary features            and functionality at a reasonable cost.
    
- Types of Data Integration Tools

    1. ``Talend``: Talend is a popular open source data integration tool that provides ETL (extract, transform, load) and data quality features. Talend provides a range of          connectors to various data sources and destinations, making it a versatile tool for data integration tasks.

    2. ``Informatica PowerCenter``: Informatica PowerCenter is a proprietary data integration tool that provides a range of features, including ETL, data profiling, data            quality, and metadata management. PowerCenter supports a wide range of data sources and destinations, making it a versatile tool for data integration tasks.

    3. ``Microsoft SQL Server Integration Services (SSIS)``: SSIS is a popular proprietary data integration tool that provides ETL and data quality features. SSIS                    integrates seamlessly with other Microsoft software products, such as Microsoft SQL Server and Microsoft Azure, providing a comprehensive data management solution.

    4. ``Dell Boomi``: Dell Boomi is a cloud-native integration platform that offers a wide range of integration capabilities, including ETL, API management, and workflow            automation. Boomi provides a range of connectors to various data sources and destinations, making it a versatile tool for data integration tasks.

    5. ``Apache NiFi``: Apache NiFi is an open source data integration tool that provides a web-based interface for building and managing data flow pipelines. NiFi offers a          range of processors for data ingestion, transformation, and delivery, making it a powerful tool for real-time data processing.
   
    6. ``Oracle Data Integrator``: Oracle Data Integrator is a proprietary ETL tool that provides a range of features, including data profiling, data quality, and metadata          management. Data Integrator can integrate with other Oracle software products, such as Oracle Database and Oracle Business Intelligence, providing a comprehensive          data management solution.
    7. ``Pentaho Data Integration``: Pentaho Data Integration is an open source ETL tool that provides a range of features, including data profiling, data quality, and              metadata management. Pentaho provides a range of connectors to various data sources and destinations, making it a versatile tool for data integration tasks.
    8. ``MuleSoft Anypoint Platform``: MuleSoft Anypoint Platform is a cloud-based integration platform that offers a range of integration capabilities, including ETL, API          management, and workflow automation. Anypoint Platform provides a range of connectors to various data sources and destinations, making it a versatile tool for data          integration tasks.


