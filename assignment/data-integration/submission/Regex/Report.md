<div align="center">
   <h1>Report: Data Integration Using Azure Data Factory 🏭</h1>
</div>



## Data Factory Pipeline
<p align="Justify">The Azure Data Factory pipeline is a logical grouping of activities that perform data integration tasks together, as shown in the figure below. A pipeline can be used to copy data from one data store to another, transform data, or perform a complex set of operations on data.</p>

<img width="960" align="Justify" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/01348dcb-e749-42c8-8c12-6e7989fb6cac">

The pipeline is made up of several components that are linked together. The following is a description of the functionality of the component:

   1. Blob Storage
   
      A data pipeline source or destination, to use blob storage as a source, we need to create a linked service to your blob storage account. To use blob storage as a destination, we need to create a dataset that points to your blob storage account.
   3. Linked Service
      
      To link a data store to ADF and grant ADF access to blob storage.
   5. Dataset
      
      A named view of data that simply points to or references the data that you want to use as inputs and outputs in your activities. The Dataset table refer to CSV file in blob storage and the target table in the SQL server database.
   7. Copy Data (Activity)
      
      To copy the data from the new CSV dataset to the new Table dataset.
      
## Steps:

### 1. Identifying the Data Sources
   For this assignment, we would like to integrate 3 types of data sources about non-alcohol fatty liver disease. The data sources are:- 
 
   - nwtco.csv
   - nafld1.csv
   - nafld2.csv
   
    Kaggle Url: https://www.kaggle.com/datasets/utkarshx27/non-alcohol-fatty-liver-disease?
### 2. Create and Setup Data Factory

<img width="960" alt="createdatafactory" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/1eecf9dc-79ad-437c-ad7b-e0c622182b5a">


### 2. Set up the Azure Data Factory


### 3. Create A Storage Account


### 4. Create an Azure SQL Database


### 5. Create Linked Service


### 6. Create Datasets

