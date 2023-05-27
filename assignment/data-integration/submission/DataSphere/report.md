<div align="center">
   <h1>Report: Data Integration Using Azure Data Factory</h1>
</div>

## Data Factory Pipeline

<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/01348dcb-e749-42c8-8c12-6e7989fb6cac">

## Prerequisites
- In this assignment, we need to have an Azure subscription. Create one before you begin. [Free account](https://azure.microsoft.com/en-us/free/) or sign up to GitHub Education.
-Then, you will be redirected to azure portal

## Identify 3 different sources
In this project, we will use three different sources which we created. One dataset is in csv format while the rest are in excel. The sources about user information which separate in three different files which contain user ID, password, name, state and email. Our objective in this project is to union all the files and convert it into one table in a database. 

## Create Azure Data Factory
In the search bar, type Azure Data Factory and select it. Create a new Azure Data Factory and fill in all the details. 

<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/DataFactoryDefault.jpg">

## Setup Storage Account


## Insert sources into blob storage (container)
After the storage account has been deployed, choose and create a new container named input which we will store all the three datasets. In the input container, upload all the  data sources. 

![data integration pic 1](https://github.com/drshahizan/special-topic-data-engineering/assets/120614334/44c82554-6dc6-4c31-8fe4-2f608e34a6a6)

## Create SQL Database
Now, we have to create a SQL Database and a table to go with it. In this database and table we would store our future output. One of the prerequisites to this step is setting up an Azure SQL Server. 
<br><br>
<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/SQLServerDefault.jpg">
<br><br>
A SQL Database can be created with windows authentication as the authentication method as it is the most straightforward. Once deployed, you can test the resource by logging into the query editor using the authentication credentials used before. <br><br>
Then, a simple SQL query can be written to create a Table. The following code block shows the sql query written to create the table.
<br>
```mysql
Create Table Output(
	ID varchar(50), 
	Password varchar(100),
	Name varchar(100),
	State varchar(100),
	Email varchar(100)
)
```

<p float: left>
   <img height="200" width="450" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/SQLDatabaseQueryEditor.jpg">
   &nbsp;&nbsp;
   <img height="250" width="450" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/SQLDatabaseQueryEditorCreateTable.jpg">
</p>

## Launch Azure Data Factory Studio and link services

## Insert datasets

## 
