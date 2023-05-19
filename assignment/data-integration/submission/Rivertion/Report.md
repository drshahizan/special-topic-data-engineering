<h1> Report </h1>
<h2>Data Integration Using Microsoft Azure Data Factory</h2>

<p>The rapid growth of data volumes, formats, and sources has necessitated efficient data integration solutions. Microsoft Azure Data Factory (ADF) has emerged as a powerful cloud-based data integration service that enables organizations to collect, transform, and orchestrate data across various platforms and systems. This report provides a concise overview of the capabilities, benefits, and key considerations associated with using Microsoft Azure Data Factory for data integration.</p>

<h2>Steps</h2>

<h3>1.Get 3 data source</h5>

<ul>
  <li>1. <a href="spotify.csv">spotify.csv</a></li>
  <li>2. <a href="spotify.json">spotify.json</a></li>
  <li>3. <a href="spotify.xlxs">spotify.xlxs</a></li>
</ul>

<p>In the data integration process using Microsoft Azure Data Factory, we work with three file formats: spotify.csv (CSV), spotify.json (JSON), and spotify.xlsx (Excel). These files contain Spotify-related data such as song details, playlists, user preferences, and engagement metrics. By leveraging Azure Data Factory, these files are seamlessly integrated, transformed, and processed for efficient data integration workflows.</p>

<h3>2.Setup Azure environment</h5>
<p>Search for 'Data Factories' in Azure services, click 'Create', provide resource group, data factory name, choose region, etc. The created data factory will then appear as shown.<p>

<img src="ss/WhatsApp Image 2023-05-19 at 16.17.17 (1).jpeg" alt="">
  
<h3>3.Setup SQL Database</h3>
<p>To locate 'SQL Database' in Azure services, initiate a search and select the 'Create' option. Proceed to enter the required information, including the resource group, database name, and server creation. After the database has been successfully created, it will be displayed along with its corresponding server name, as demonstrated below.</p>

<img src="ss/WhatsApp Image 2023-05-19 at 16.25.41" alt="">

<h3>4.Setup Storage</h3>
<p>Search for 'Storage Account' in Azure services, click 'Create', provide storage account name, region, etc. Once created, the storage will be recorded as shown.</p>

<img src="ss/WhatsApp Image 2023-05-19 at 16.25.41.jpeg" alt="">



