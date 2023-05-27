<h1 align="center">Report: Data Integration Using Azure Data Factory</h1>

In this assignment, we will perform data integration towards the <b>e-commerce data</b> found at <a href="https://www.kaggle.com/datasets/benroshan/ecommerce-data?resource=download&select=List+of+Orders.csv">kaggle website</a> which consists of 3 datasets. The details of each datasets are listed as below:
<table>
  <tr>
    <th>Dataset</th>
    <th>Details</th>
  </tr>  
  <tr>
    <td>List of Orders</td>
    <td>Consists of purchase information (order id, order date) and customer information (name, state and city). </td>
  </tr>
  <tr>
    <td>Order details</td>
    <td>Consists of order id, order price, order quantity, profit, category and subcategory of the products. </td>
  </tr>  
  <tr>
    <td>Sales target</td>
    <td>Consists of sales target amount, month of order date, and category of the product.</td>
  </tr>  
</table>

## Data Integration Steps using Azure Data Factories:

### 1. Create Data Factory
First, login to Microsoft Azure, search for "data factory" at the search bar, select "Data Factory" under the Marketplace section which will lead to the page of Create Data Factory as shown in the figure below. Fill in the required details and click "Review + create" button to create a new data factory.
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/f870a4db-3207-4fbd-8068-860dceb02ebe" alt="create data factory">
The created data factory is shown as below. 
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/4583ad17-141b-4a2a-af4f-b2d2f435027b" alt="output of create data factory">


### 2. Create Azure SQL Database
To create an Azure SQL database, we first search for "sql database" at the search bar, select "SQL databases" under the Services section. Click "Create" to create a database. Select the resource group (the one we created in previous step), give a name to the database and create a new server. Click "Review + create" to create the database once the related details have been filled in. 
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/97a0ecca-5d5c-4edb-9ffc-d02c37fc8205" alt="create database">
The SQL database server is created by giving it a name, and filling in the authentication details whereby SQL authentication is used in this case. The details is filled in according to the guideline of <a href="https://learn.microsoft.com/en-us/azure/azure-sql/database/single-database-create-quickstart?view=azuresql&tabs=azure-portal">microsoft website</a>. 
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/706e84c8-5709-4568-bcea-f85860af5079" alt="add server">
The created database is shown as below.
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/152eae05-f07f-4eea-bb68-00cd9863d5f2" alt="output of create database">       

### 3. Create Storage
Next, we create a storage account to store our data by searching "storage account" at the search bar and select "Storage account" under the Marketplace section. Then, fill in the basic details, including project details and instance details, and click "Review" button to proceed with the process of creating a storage account. 
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/ff04c311-eb05-4123-aae3-16a531087cc0" alt="create storage account">
The created storage account is shown as below. 
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/696638b2-3d45-4deb-923a-4565a8ad982a" alt="output of creating storage">
After that, we need to create a container which hold our data. Select "Containers" under the Data storage section and create a container. The created container is shown as below.
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/17231397-00f5-4b03-a4d1-f247af16c187" alt="add container">
Select the created container, then click the "Upload" button to upload the csv files. 
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/72926bd6-e3a6-452e-b4f0-5d5d302cf2e6" alt="upload csv file">
The uploaded csv files can be viewed by clicking the file name. 
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/3cd1e7b4-e022-4331-b71a-150f4bdf3e5a" alt="view csv file">



### 4. Create Tables in Azure SQL Database
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/2a35fbb3-ae7a-499d-847a-d090f9cda11b" alt="login to query editor">

<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/e005ac64-0ec1-4731-b42a-0cf057e0b1b3" alt="create table">


### 5. Create Linked Services in Data Factories
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/5ca533d7-c507-425d-a0e6-55198433a542" alt="launch data factories">

<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/0736e2c8-5e9b-4373-8aaa-ab98ea838023" alt="link storage">


### 6. Create Datasets in Data Factories
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/fbf44e34-3ad7-4002-8bd5-586bb2cc26e6" alt="select storage">

<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/319c0a78-bc57-4507-a755-dada6e45f258" alt="select dataset">

### 7. Create Pipelines
<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/50d9b828-9485-430b-bdb2-9ee8e0e0fefe" alt="create pipeline">

<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/d0250613-7d70-4f5f-b8b8-686bcc3f0740" alt="copy data">

<img src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614391/1fd7608d-676e-451e-a72c-41f250a029e6" alt="output">

## Conclusion
