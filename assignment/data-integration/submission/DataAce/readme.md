<h1 align="center">Data Integration using Azure Data Factory (ADF)</h1>

<p align="center">
  <img src="https://miro.medium.com/v2/resize:fit:1200/1*X0_s8C5ZsnJreHZMl_JS8w.png" height= '300px' title="Google News API">
  
  This repository contains a step-by-step guide for performing data integration using Azure Data Factory (ADF). The guide outlines the process of integrating data from 3 different sources into a target destination using ADF pipeline.
</p>

<h2 align='center'>Group Members</h2>
<table align='center'>
  <tr>
    <th>Name</th>
    <th>Matric No</th>
  </tr>
  <tr>
    <td>Myza Nazifa binti Nazry</td>
    <td>A20EC0219</td>
  </tr>
  <tr>
    <td>Nur Izzah Mardhiah binti Rashidi</td>
    <td>A20EC0116</td>
  </tr>
    <tr>
    <td>Amirah Raihanah binti Abdul Rahim</td>
    <td>A20EC0182</td>
  </tr>
    <tr>
    <td>Radin Dafina binti Radin Zulkar Nain</td>
    <td>A20EC0135</td>
  </tr>
</table>

<h3>Prerequisites</h3>
Before getting started, make sure to have the following:

- An Azure subscription with access to Azure Data Factory.
- Access to the data sources we want to integrate.
- A target destination, such as a SQL Database, where we want to store the integrated data.

<h3>General Data Factory Pipeline</h3>
<p align="center">
  <img src="images/flow.jpg" height= '300px' title="ADF">
</p>

The Azure Data Factory (ADF) pipeline, as shown in the picture, consists of several components that work together to facilitate data movement and transformation. 
1. Connection: A connection represents a reusable set of credentials and other configuration details that allow ADF to connect to various data sources or destinations. In the pipeline, the connection is the starting point.

2. Linked Service (Blob Storage): A linked service is a definition of a data storage endpoint in ADF. In this case, the linked service represents the Blob Storage, which is the source data storage for the pipeline.

3. Dataset: A dataset defines the structure and location of the data being processed in ADF. In the pipeline, there are two datasets:
- Dataset 1 (Source): Represents the data in the Blob Storage that we want to copy or transform.
- Dataset 2 (Destination): Represents the destination data storage, specifically an Azure SQL Database, where we want to load or transform the data.

4. Activity (Copy data): An activity is a processing step in the pipeline that performs a specific action on the data. In this case, the activity is the "Copy data" activity, which copies data from the source dataset (Blob Storage) to the destination dataset (Azure SQL Database). It moves the data from one location to another.

5. Linked Service (Azure SQL Database): Another linked service is used to define the connection details for the Azure SQL Database, the destination for the copied data.

6. Connection: Finally, there is a connection at the end of the pipeline, which represents the completion of the data movement process.

### 📂Content:
* [📖Report](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-integration/submission/DataAce/Report.md)
