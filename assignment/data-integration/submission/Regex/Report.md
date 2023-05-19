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
<p align="Justify">First and foremost, build a data factory through searching "data factory" in the search bar and click on "Data Factory". Then click the "Create" button. Fill out the required information in the "Create Data Factory" blade, such as resource group, instance name, and region. Then press the "Review+Create" button.</p>

<img width="960" alt="createdatafactory" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/1eecf9dc-79ad-437c-ad7b-e0c622182b5a">

<p align="Justify">The data factories that have been created will be available in the table shown in the figure below. It means that the data factory was built successfully.</p>

<img width="960" alt="createddatafactory" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/bd280f78-beb2-453d-9f55-1be49f1d54f7">

### 3. Create and Setup Azure SQL Database

<img width="959" alt="createsqldb" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/87bd9b25-8b67-4761-8e32-0d286f9e2481">

<img width="960" alt="createddb" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/67a4a67c-1740-478e-8f5b-895489385fad">

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/5759bcc8-1818-4664-a4e0-77d24a649429">

### 4. Create and Setup Storage Account

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/8c654790-7b6f-4c9a-93b5-bd5c5ac001f3">

Select Blob Storage to store files.


<img width="708" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/d140340a-a21f-4424-988b-5a3115d1fcaa">


Create new container

<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/75046f15-ba68-4b7d-afc8-daf06124bb32">


Add files


<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/d4355727-09b2-49cc-b1b6-2f6a4c3d7bb3">



Select edit to check the content of the file.


<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120564694/c2c197d5-761d-4046-9559-7e0d27c035f5">


### 5. Create New Table (Azure SQL Database)



### 5. Create Linked Service




### 5. Create Linked Service




### 5. Create Linked Service



### 5. Create Linked Service




### 6. Create Datasets

