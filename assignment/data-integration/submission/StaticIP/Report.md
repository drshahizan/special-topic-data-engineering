<div align="center">
   <h1>Data Integration Using Azure Data Factory</h1>
</div>

## Table of Contents
- [Introduction](#introduction)
- [Steps](#steps)
- [Conclusion](#conclusion)

## Introduction
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
<img width="960" alt="image" src="">

## Conclusion
