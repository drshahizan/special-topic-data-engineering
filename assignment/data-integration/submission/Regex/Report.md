<div align="center">
   <h1>Report: Data Integration Using Azure Data Factory</h1>
</div>

This report will describe how our group performs data integration using Azure Data Factory step-by-step. We were guided by the general ADF pipeline which described in readme.md. For this task, we are required to integrate 3 different data sources into a single table in Azure SQL Databases. 

## Steps:

### 1. Identifying the Data Sources:
   For this assignment, we would like to integrate3 types of data sources. The data sources are:- 

   - All Car and Motorbike Products.csv
   - Motorbike Accessories and Parts.csv
   - Car Accessories.csv
   
### 2. Data Extraction and Transformation:
   Once the data sources were identified, we proceeded with extracting the required data from each source. We applied necessary transformations to ensure the data was in a compatible format for integration. This step involved cleaning and standardizing the data, handling any inconsistencies or discrepancies, and performing data quality checks.

### 3. Data Integration and Consolidation:
   Using Azure Data Factory, we designed a pipeline to integrate the extracted and transformed data from the three sources. The pipeline incorporated appropriate data integration techniques, such as merging, joining, or appending datasets based on the common RunwayID attribute. This process allowed us to consolidate the data from the three sources into a single table within Azure SQL Databases.

### 4. Validation and Quality Assurance:
   After the integration process, we performed thorough validation and quality assurance checks to ensure the accuracy and completeness of the integrated data. We verified that the relationships between the datasets were properly established and that the data aligned correctly based on the common attribute.

### 5. Loading the Integrated Data:
   Finally, we loaded the integrated data into the designated table within Azure SQL Databases. This step involved executing the pipeline and monitoring the data loading process to ensure its successful completion.

By following these steps, we were able to successfully perform data integration using Azure Data Factory, consolidating data from three different sources into a single table. This integrated dataset provides a comprehensive view of Airport Runway-related information, enabling us to derive meaningful insights and make informed decisions.

Please let me know if you need any further information or if there's anything else I can assist you with!







### 1. Identify 3 different data sources
For this assignment, we would like to integrate and combine 3 data sources related to Airport Runway. These data sources share one common attribute which are RunwayID. This way, it allows us to establish relationships and link related data points across different datasets. With a common attribute, we can easily merge or join data from multiple sources based on this shared attribute. The data sources are:-
- data1.csv
- data2.csv
- data3.csv

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
