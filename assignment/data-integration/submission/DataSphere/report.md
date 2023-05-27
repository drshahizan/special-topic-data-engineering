<div align="center">
   <h1>Report: Data Integration Using Azure Data Factory</h1>
</div>

## Data Factory Pipeline
<p align="center">
	<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/01348dcb-e749-42c8-8c12-6e7989fb6cac">
</p>

## Prerequisites
- In this assignment, we need to have an Azure subscription. Create one before you begin. [Free account](https://azure.microsoft.com/en-us/free/) or sign up to GitHub Education.
-Then, you will be redirected to azure portal

## Identify 3 different sources
In this project, we will use three different sources which we created. One dataset is in csv format while the rest are in excel. The sources about user information which separate in three different files which contain user ID, password, name, state and email. Our objective in this project is to union all the files and convert it into one table in a database. 
- User 1.csv
- User 2.xlsx
- User 3.xlsx

## Create Azure Data Factory
In the search bar, type Azure Data Factory and select it. Create a new Azure Data Factory and fill in all the details. 
<p align="center">
<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/DataFactoryDefault.jpg">
</p>

## Setup Storage Account
Create a new Storage Account name (trcstrgacc) and fill in all the required information. Let the setting to default then click review&create, After that, wait until it is finished and display the image below.

## Insert sources into blob storage (container)
After the storage account has been deployed, choose and create a new container named input which we will store all the three datasets. In the input container, upload all the  data sources. 

![data integration pic 1](https://github.com/drshahizan/special-topic-data-engineering/assets/120614334/44c82554-6dc6-4c31-8fe4-2f608e34a6a6)

## Create SQL Database
Now, we have to create a SQL Database and a table to go with it. In this database and table we would store our future output. One of the prerequisites to this step is setting up an Azure SQL Server. 
<br><br>

<p align="center">
<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/SQLServerDefault.jpg">
</p>

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

<p align="center">
   <img height="200" width="450" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/SQLDatabaseQueryEditor.jpg">
   &nbsp;&nbsp;
   <img height="250" width="450" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/SQLDatabaseQueryEditorCreateTable.jpg">
</p>

## Launch Azure Data Factory Studio and link services

To launch the Azure Data Factory Studio, you would have to first successfully deploy your very own data factory. Once that is done, we can launch the data factory from the overview page. This will redirect the user to a new page, in which everything data factory can be found. 

<p align="center">
<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/DataFactoryStudio.jpg">
</p>

The image below, shows linked services that were set up for our data factory. Linked Services are crucial in Azure Data Factory as they establish connections and provide the necessary information to access external data sources or services. They enable seamless integration between Azure Data Factory and other systems, such as in our case Blob Storage and Azure SQL Database.

<p align="center">
<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/DataFactoryStudioLinkedService.jpg">
</p>


## Insert datasets

Before we can define our dataflow and pipeline we have to import the datasets from the blob storage. We can do this by inserting datasets, as shown in the image below.

By Inserting these datasets we can soon define our dataflow and eventually our pipeline.

<p align="center">
<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/DataFactoryStudioDatasets.jpg">
</p>

## Create Dataflow

Now a Dataflow has to be created in Azure Data Factory to transform and integrate the data from source to destination according to the requirements. In the Data Factory authoring UI, select New Dataflow to start creating a new Dataflow. Choose the datasets that represent that were defined in the previous step. Now the destination dataset has to be specified where the transformed data is to be loaded. In our case it's a new linked service that is connecting to our table in the SQL Database. A crucial step is to save the Dataflow and publish it to make it available for execution.

<p align="center">
	<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/DataFactoryStudioDataflow.jpg">
</p>

## Create Pipeline
Finally, create the pipeline. Drag Data Flow in the Move & Transform. Make sure all the information has been selected correctly before pressing the debug button. The status will display Succeed if the pipeline is successfully deployed. If not successful, we need to check all the previous processes so that they are correct. 

<p align="center">
	<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/DataFactoryStudioPipeline.jpg">
</p>

We can check in SQL Query whether the result is correct or not by typing **Select * From [dbo].[User1].** Below is the image of the result of integration using union: 
<p align="center">
	<img width="800" alt="image" align=Justify src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataSphere/images/SelectAllQuery.jpg">
</p>
 





