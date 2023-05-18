<div align='center'>
  <h1> Report </h1>
  <h2>Data Integration Using Microsoft Azure Data Factory</h2>
</div>


<p> As a group of five people working on a data integration assignment using Microsoft Azure Data Factory, you would collaborate to design and implement an end-to-end data integration solution that brings together data from various sources and loads it into a target destination. </p>

## 📏Steps by step:

### 1. Identify 3 different data sources
In this assignment we will use three different csv data sources which are about 'clouds' image data in Flickr. In these data sources, there will be a common column which is **pic_id**. We aim to integrate or merged these files into one and store it into sql database in azure data factory. The datasets are as follows:
- clouds_id.csv (contains picture id and its total views)
- clouds_exif.csv (contains picture id and image description about camera used)
- clouds_geo.csv (contains picture id and its geographical information)

### 2. Setup Azure data factory
Search 'Data Factories' in azure services, click create, insert resource group, data factory name, choose region, etc. Upon created, the data factory will appear as shown:
<p align="center">
  <img src="image/DataFactory.png" height= '300px'>
</p>

### 3. Setup SQL Database
Search 'SQL Database' in azure services, click create, insert resource group, database name, create server, etc. Upon created, the database will display with its server name as below:
<p align="center">
  <img src="image/SQLDB.png" height= '300px'>
</p>

### 4. Setup storage account
Search 'Storage Account' in azure services, click create, insert storage account name, region, etc. Upon created, the storage will be recorded as below:
<p align="center">
  <img src="image/StorageAcc.png" height= '300px'>
</p>

### 5. Insert data sources into blob storage
To insert the data sources, firstly we need to open storage account that has been created. Choose 'blob services and add container name 'input'.
<p align="center">
  <img src="image/Blobservice1.png" height= '300px'><br><br>
  <img src="image/blob2.png" height= '300px'>
</p>

Next, inside input container, click 'Upload' to upload the data sources.
<p align="center">
  <img src="image/blob3.png" height= '300px'>
</p>

The data sources contains data as follows:
<p align="center">
  <img src="image/idcsv.png" height= '300px'><br><br>
  <img src="image/exifcsv.png" height= '300px'><br><br>
  <img src="image/geocsv.png" height= '300px'><br><br>
</p>

### 6. Create output table in sql database 
Open sql database that has been created, choose 'Query editor (preview)', login to sql server authentication and create new query for creating output table. Upon creating sql query, the name and columns of the table will be listed as follows.
<p align="center">
  <img src="image/createtableoutputdb.png" height= '300px'>
</p>

### 7. Launch Azure Data Factory Studio and link services
Open all resources and clink 'Launch Studio'. A new tab will be open and from here, we will build flows and pipeline but firstly we need to choose 'Manage' to link services which are 'blob storage' and 'sql database'.
<p align="center">
  <img src="image/launchdf.png" height= '300px'><br><br>
  <img src="image/linkservices.png" height= '300px'>
</p>
