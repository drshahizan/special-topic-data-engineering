<h1> Report </h1>
<h2>Data Integration Using Microsoft Azure Data Factory</h2>

<p>The rapid growth of data volumes, formats, and sources has necessitated efficient data integration solutions. Microsoft Azure Data Factory (ADF) has emerged as a powerful cloud-based data integration service that enables organizations to collect, transform, and orchestrate data across various platforms and systems. This report provides a concise overview of the capabilities, benefits, and key considerations associated with using Microsoft Azure Data Factory for data integration.</p>

<h2>Steps</h2>

<h3>1.Get 3 data source</h5>

<ul>
  <li>1. <a href="spotify.csv">spotify.csv</a></li>
  <li>2. <a href="spotify.json">spotify.json</a></li>
  <li>3. <a href="spotify.xlsx">spotify.xlsx</a></li>
</ul>

<p>In the data integration process using Microsoft Azure Data Factory, we work with three file formats: spotify.csv (CSV), spotify.json (JSON), and spotify.xlsx (Excel). These files contain Spotify-related data such as song details, playlists, user preferences, and engagement metrics. By leveraging Azure Data Factory, these files are seamlessly integrated, transformed, and processed for efficient data integration workflows.</p>

<h3>2.Setup Azure environment</h5>
<p>Search for 'Data Factories' in Azure services, click 'Create', provide resource group, data factory name, choose region, etc. The created data factory will then appear as shown.<p>

<img src="ss/WhatsApp Image 2023-05-19 at 16.17.17 (1).jpeg" alt="">
  
<h3>3.Setup SQL Database</h3>
<p>To locate 'SQL Database' in Azure services, initiate a search and select the 'Create' option. Proceed to enter the required information, including the resource group, database name, and server creation. After the database has been successfully created, it will be displayed along with its corresponding server name, as demonstrated below.</p>

<img src="ss/WhatsApp Image 2023-05-19 at 16.26.11.jpeg" alt="">

<h3>4.Setup Storage</h3>
<p>Search for 'Spotify1' in Azure services, click 'Create', provide storage account name, region, etc. Once created, the storage will be recorded as shown.</p>

<img src="ss/WhatsApp Image 2023-05-19 at 16.25.41.jpeg" alt="">

<h3>5.Insert data into blob storage</h3>
<p>To add the data sources, begin by accessing the previously created spotify1. Open the storage account and select 'blob services'. Then, add the container named 'input'.</p>

<img src="ss/WhatsApp Image 2023-05-19 at 16.25.41.jpeg" alt="">

<h3>6.Create table in SQL Database</h3>
<p>Click ‘Query editor (preview)’ which allows user to query database without need any external tools. Then, login to the SQL Database Query Editor. Create an SQL table statement in query 1 and run it. If the query is succeeded built, then the output will be as below.</p>

<h3>7.Creating a link service</h3>
<p>To create a link service, launch studio first and click ‘connections’ on the bottom left and there is a tab named ‘Linked Services’. Click ‘New’ and choose ‘Azure Blob Storage’ and head continue. Name the linked service and connect the string to the storage account name and click ‘Finish’. </p>

<h3>8.Insert datasets into Factory Resources</h3>
<p>In the Factory Resources, right click ‘Datasets’ and click ‘New dataset’ to insert both datasets from blob storage and SQL database.</p>

<h3>9.Create Data Flow</h3>
<p>First, add all three sources which are spotify.csv, spotify.json and spotify.xlsx. Then, join all the sources together. User can select any columns that they wanted to use by dragging the select activities. Lastly, display the output. </p>

<h3>10.Run Data Flow in Pipeline</h3>
<p>Create new pipeline from Activities and drag the data flow. Then, click ‘Debug’.</p>

