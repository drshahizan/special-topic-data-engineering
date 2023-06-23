<div align="center">
   <h1>Report: Data Integration Using Azure Data Factory 🏭</h1>
</div>

## Table of Contents
- [Introduction](#introduction)
- [Data Factory Pipeline](#data-factory-pipeline)
- [Implementation Steps](#implementation-steps)
- [Conclusion](#conclusion)

## Introduction
Data integration is a critical component of modern businesses that handle data. The merging of data from various sources produces a comprehensive information view that facilitates better decision-making and provides insights that would otherwise be unattainable. Azure Data Factory is one of the most widely used tools for data integration. This assignment aims to examine the advantages of utilizing Azure Data Factory for data integration, particularly in integrating three data sources concerning non-alcoholic fatty liver disease.

## Data Factory Pipeline
<p align="Justify">The Azure Data Factory pipeline is a sophisticated collection of activities that function in unison to accomplish data integration tasks. This logical grouping possesses the ability to seamlessly transfer data from one storage location to another, apply transformations, or execute a series of intricate operations on it. The figure below shows a visual representation of the pipeline.</p>

<img width="960" align="Justify" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/01348dcb-e749-42c8-8c12-6e7989fb6cac">

The pipeline is made up of several components that are linked together. The following is a description of the functionality of the component:

1. Blob Storage

For a data pipeline source or destination, we need to create a linked service to your blob storage account to use the blob storage as a source. To use the blob storage as a destination, we must create a dataset pointing to your blob storage account.

2. Linked Service
      
To link a data store to ADF and grant ADF access to blob storage.

3. Dataset
      
A named view of data is essentially a reference to the inputs and outputs you wish to use in your activities. In this case, the Dataset table references a CSV file stored in blob storage and a target table in a SQL server database.
   
4. Copy Data (Activity)
      
Copy the data from the new CSV dataset to the new Table dataset.
      
## Implementation Steps:

### 1. Identifying the Data Sources
For this assignment, our goal is to integrate three different types of data sources related to non-alcoholic fatty liver disease. These data sources include: 
 
   - nwtco.csv
   - nafld1.csv
   - nafld2.csv
   
    Kaggle Url: https://www.kaggle.com/datasets/utkarshx27/non-alcohol-fatty-liver-disease?
### 2. Create and Setup Data Factory
<p align="Justify">To begin, you can create a data factory by searching for "data factory" in the search bar and selecting the "Data Factory" option. From there, click on the "Create" button and provide the necessary details in the "Create Data Factory" blade, including the resource group, instance name, and region. Finally, click on the "Review+Create" button to complete the process.</p>

<img width="960" alt="createdatafactory" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/1eecf9dc-79ad-437c-ad7b-e0c622182b5a">

<p align="Justify">The table displayed in the figure below contains the available data factories that have been successfully built, indicating their successful construction.</p>

<img width="960" alt="createddatafactory" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/bd280f78-beb2-453d-9f55-1be49f1d54f7">

### 3. Create and Setup Azure SQL Database
To create an SQL database, simply search for "SQL databases" in the search bar and select the corresponding option. You will then see a "Create" button, which you should click. Fill in the necessary information, review it, and then click the "Create" button to finish the process.

<img width="959" alt="createsqldb" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/87bd9b25-8b67-4761-8e32-0d286f9e2481">

To create a new server, simply click on the "Create new" button and provide all the necessary details. Once you have completed this step, click "OK".

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/5759bcc8-1818-4664-a4e0-77d24a649429">

Once you have completed these steps, please wait for the deployment to finish. The accompanying figure displays the successful creation of the SQL Database.

<img width="960" alt="createddb" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/67a4a67c-1740-478e-8f5b-895489385fad">


### 4. Create and Setup Storage Account

To initiate the creation of a storage account, please navigate to the search bar and enter the term "storage accounts". From the results, select "Storage Accounts" and proceed to click on the "Create" button. Once on the creation page, please fill out all necessary details and carefully review them prior to clicking "Review". Finally, click "Create" to complete the process and successfully create your storage account.
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/8c654790-7b6f-4c9a-93b5-bd5c5ac001f3">

Please choose Blob Storage as the designated location for storing your files.


<img width="708" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/d140340a-a21f-4424-988b-5a3115d1fcaa">


Create a new container.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/75046f15-ba68-4b7d-afc8-daf06124bb32">


Add the files.


<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/d4355727-09b2-49cc-b1b6-2f6a4c3d7bb3">



Select the "edit" option to review the contents of the file.


<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/c2c197d5-761d-4046-9559-7e0d27c035f5">


### 5. Create New Table (Azure SQL Database)
Navigate to the "Query editor" section within SQL Databases.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/63b88988-8b9a-4f84-8323-995a48b78e05">


Create a table for each respective file.

<img width="958" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/f3580f2c-779b-4923-ab40-b1c9c135eab5">



### 6. Create and Setup Linked Service

Launch data factory.


<img width="958" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/d42f1cb5-32ab-45c2-9778-e79923cdd180">


Select an author and create a new pipeline.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/e045c1c6-e479-418b-bb37-67b49aaeb6e5">

To add a new Azure Blob Storage for input, go to "Manage," then "Linked Service," and finally click "New."

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/a4774bb9-046c-4b3f-98db-0c49a662bd49">

In order to obtain the output file, please click on "New" and select "Azure SQL Database" as the destination.

<img width="959" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/5c77cfa7-97ef-4338-81fd-7517d2f1a9fa">



### 7. Create Datasets

Create a dataset for respective files. To create a new dataset, you can upload it to Azure Blob and format it as DelimitedText.
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/1d79fd2b-28bd-4328-adda-46a1a3731c47">

### 8. Create Pipeline

To create a pipeline, simply drag and drop the "copy data" function.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/c9ffa685-cf49-456d-a1e4-9d7992db6933">

After that, input the source dataset, followed by the sink dataset, and then import the mapping schemas.

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/6be2dc05-11bb-48a0-b9e2-aef3bb46eb04">

Debug and select "Publish".

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/e384834e-17bc-4172-8622-a81f6f5af470">


## Conclusion
To sum up, our goal for this project was to create a single dataset by combining information from three separate sources to aid in data science. We achieved this by utilizing Microsoft Azure Data Factory and merging the datasets. This project demonstrates the importance of data integration in the field of data science and illustrates the necessary steps involved in the process. By following a systematic approach and utilizing the right tools and techniques, data integration can provide data scientists with vital insights and enable them to make informed decisions based on a complete dataset.
