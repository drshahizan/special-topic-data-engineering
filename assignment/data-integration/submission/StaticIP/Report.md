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
The three different data sources chosen for this assignment from [Kaggle](https://www.kaggle.com/datasets/ashishjangra27/imdb-top-250-movies) are: 
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
To create an Azure Data Factory, search for "data factory" in the search bar. Click on "Data Factory". Click "Create". Fill in the field in the form. After done filling in the form, click "Review+Create".Below shows the data factory that is created successfully.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/data%20factory.jpg">

<br>

### 3. Create SQL Database 
Next, we have to create SQL Database. Search for "sql database" in the search bar. Click on "SQL Databases".  Click "Create". Fill in the field in the form. After done filling in the form, click "Review+Create". Below shows the SQL Database that is created successfully. 

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/sql%20database.jpg">

### 4. Create storage account 
Then, create a storage account. Search for "storage account" in the search bar and click on it. Repeat the steps as mentioned in Step 3. Below shows the storage account that is created successfully.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/storage%20account.jpg">

<br>

### 5. Create Container 
After that, create a container by selecting the storage account that is created recenetly. Click "Containers", then "+ Container". Give a name to the container and click "Create." Below shows the container that is created successfully.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/container.jpg">

<br>

### 6. Upload Data Sources 
Then, select the container added just now and upload files to it. Below shows the data sources that is uploaded to the container.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/upload.jpg">

<br>

### 7. Create Table 
In the Azure Data Factory Portal, select the SQL database added recently, then click "Query editor". Type the code as shown in the screenshots below.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/table.jpg">

<br>

### 8. Launch Azure Data Factory 
Launch data factory.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/launch%20df.jpg">

<br>

### 9. Create Link Service 

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/link%20service.jpg">

<br>

### 10. Create Dataset 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/create%20dataset.jpg">

<br>

### 11. Create Blob to SQL Pipeline 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/blob%20to%20sql.jpg">

<br>

### 12. Output of Data Sources to SQL
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/output.jpg">

<br>

### 13. Create Data Flow 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/dataflow.jpg">

<br>

### 14. Create Merge Datasets Pipeline 
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/merge%20dataset.jpg">

<br>

### 15. Result 
Below shows the file produced from the result of the merged datasets pipeline named [Movies.csv](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Datasets/Movies.csv).

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/StaticIP/Images/result.jpg">

<br>

## Conclusion
In conclusion, our assignment shows that the data integration plan was successful. The three data sources is merged successfully into a dataset called Movie.csv. It cannot be denied that Azure Data Factory did help a lot in processing and managing raw data into meaningful data which can be used for further analysis to make better business decisions.
