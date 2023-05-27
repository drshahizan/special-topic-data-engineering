<div align="center">
   <h1>Data Integration Using Azure Data Factory</h1>
</div>

## Table of Contents
- [Introduction](#introduction)
- [Steps](#steps)
- [Conclusion](#conclusion)

## Introduction
Azure Data Factory is a platform that provides cloud-based ETL and data integration services which helps to create data-driven workflows for orchestrating data movement and transforming data at scale. The data-driven workflows which is also called pipelines helps to ingest data from disparate data stores. Azure Data factory allows their users to build complex ETL processes either using the data flows or using compute services such as Azure HDInsight Hadoop, Azure Databricks, and Azure SQL Database. After the data is processed and transformed, the data can be published to data stores by using Azure Synapese Analytics for business intelligence purposes. 

In this assignment, we aimed to produce a complete dataset combined from different data sources obtained from real-world example. We identified three data sources related to the top 250 Movies on IMDB from Kaggle and provided step-by-step instructions to show how data integration is applied in pratical scenarios using Azure Data Factory. This includes identifying data sources, mapping the data onto a common schema, handling missing or incomplete data, and cleaning and transforming data.

## Steps
### 1. Identifying the Data Sources
The three different data sources chosen for this assignment are related to the top 250 Movies on IMDB which are obtain from [Kaggle](https://www.kaggle.com/datasets/ashishjangra27/imdb-top-250-movies): 
- [basic_movie_info.csv](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Datasets/basic_movie_info.csv)
- [genre.json](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Datasets/genre.json)
- [year.txt](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Datasets/year.txt)

| Acronym | Description |
| --- | --- |
| **id** | Movie ID |
|**name** | Name of the Movie |
| **link** | Link of the Movie |
| **type** | Genre of the Movie |
| **date** | Year of movie release |

### 2. Create Azure data factory 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/data%20factory.jpg">

### 3. Create SQL Database 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/sql%20database.jpg">

### 4. Create storage account 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/storage%20account.jpg">

### 5. Create Container 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/container.jpg">

### 6. Upload Data Sources 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/upload.jpg">

### 7. Create Table 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/table.jpg">

### 8. Launch Azure Data Factory 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/launch%20df.jpg">

### 9. Create Link Service 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/link%20service.jpg">

### 10. Create Dataset 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/create%20dataset.jpg">

### 13. Create Blob to SQL Pipeline 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/blob%20to%20sql.jpg">

### 14. Output of Data Sources to SQL
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/output.jpg">

### 15. Create Data Flow 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/dataflow.jpg">

### 16. Create Merge Datasets Pipeline 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/merge%20dataset.jpg">

### 17. Result 
The [Movies.csv](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Datasets/Movies.csv) file is the result of the merged datasets pipeline. 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/result.jpg">

## Conclusion
In conclusion, our assignment shows that the data integration plan was successful. The three data sources is merged successfully into a dataset called Movie.csv. It cannot be denied that Azure Data Factory did help a lot in processing and managing raw data into meaningful data which can be used for further analysis to make better business decisions.
