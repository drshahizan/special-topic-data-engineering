<div align="center">
   <h1>Report: Data Integration Using Azure Data Factory</h1>
</div>

This report will describe how our group performs data integration using Azure Data Factory step-by-step. We were guided by the general ADF pipeline which described in readme.md. For this task, we are required to integrate 3 different data sources into a single table in Azure SQL Databases. 

## Steps:

### 1. Identifying the Data Sources
   For this assignment, we would like to integrate 3 types of data sources. The data sources are:- 

   - nwtco.csv
   - nafld1.csv
   - nafld2.csv
   
### 2. Create and Setup Data Factory
Purpose: Create an instance of Azure Data Factory, which will serve as the orchestrator for our data integration processes.

Create a new Azure Data Factory resource in Azure Portal. Provide a name, select the subscription, resource group, and region for our Data Factory. Click on the "Create" button to create the Azure Data Factory.
<img width="960" alt="createdatafactory" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/1eecf9dc-79ad-437c-ad7b-e0c622182b5a">


### 2. Set up the Azure Data Factory
Purpose: Create an instance of Azure Data Factory, which will serve as the orchestrator for our data integration processes.

Create a new Azure Data Factory resource in Azure Portal. Provide a name, select the subscription, resource group, and region for our Data Factory. Click on the "Create" button to create the Azure Data Factory.
<p align="center">
  <img src="images/datafactory.jpg" height= '300px'>
</p>

### 3. Create A Storage Account
Purpose: Establish a connection to the Azure Blob Storage, which will act as the data source for our data integration.
Create a new storage accoynt via the portal. Enter the required details. Then, create 3 Containers and upload blobs. 
<p align="center">
  <img src="images/storageacc.jpg" height= '300px'>
</p>

### 4. Create an Azure SQL Database
Purpose: Create a target database in Azure SQL Database, which will serve as the destination for our integrated data.

Click on the "Create a resource" button (+) and search for "Azure SQL Database". Select "Azure SQL Database" from the search results and click on the "Create" button. Provide the required details such as subscription, resource group, database name, server, and credentials. Click on the "Review + Create" button and then "Create" to create the Azure SQL Database. Then, go to the "Query Editor" to create a table. For our case, we named the table as "Airport" and specify the column name and datatypes. 
<p align="center">
  <img src="images/database.jpg" height= '300px'>
  <img src="images/query.jpg" height= '300px'>
</p>

### 5. Create Linked Service
Purpose: Establish a connection to the Azure SQL Database, enabling data movement between the Data Factory pipeline and the database.

In the Data Factory Authoring UI, click on "Connections" and then "New". Select "Azure SQL Database" as the connection type and provide a name for the connection. Configure the connection settings by providing the Azure SQL Database server name, database name, and authentication method. Click on "Create" to create the connection. Repeat this with other 3 Azure Blob Storage.
<p align="center">
  <img src="images/database.jpg" height= '300px'>
</p>

### 6. Create Datasets
Purpose: Define the structure and location of the data sources (Blob Storage containers) and the destination (Azure SQL Database table). Datasets provide the necessary metadata for the data integration process.
