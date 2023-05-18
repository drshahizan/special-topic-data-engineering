Report: Azure Data Factory for Data Integration 🏭

This report outlines the step-by-step process our team followed to perform data integration using Azure Data Factory (ADF). We utilized the instructions provided in the readme.md file to guide us through the general ADF pipeline. Our objective was to integrate three distinct data sources into a single table within Azure SQL Databases.

Here are the steps we followed:

1. Identifying the Data Sources:
   For this assignment, our focus was on integrating and consolidating data from three different sources pertaining to Airport Runways. These data sources share a common attribute, which is the RunwayID. Having this shared attribute enables us to establish relationships and link relevant data points across the various datasets. With the common attribute, we can easily merge or join data from multiple sources based on this common identifier. The three data sources we used were: 

   - [Source 1]: Cars.csv
   Description: 

   - [Source 2]: 
   Description: 

   - [Source 3]: 
   Description: 
   
2. Data Extraction and Transformation:
   Once the data sources were identified, we proceeded with extracting the required data from each source. We applied necessary transformations to ensure the data was in a compatible format for integration. This step involved cleaning and standardizing the data, handling any inconsistencies or discrepancies, and performing data quality checks.

3. Data Integration and Consolidation:
   Using Azure Data Factory, we designed a pipeline to integrate the extracted and transformed data from the three sources. The pipeline incorporated appropriate data integration techniques, such as merging, joining, or appending datasets based on the common RunwayID attribute. This process allowed us to consolidate the data from the three sources into a single table within Azure SQL Databases.

4. Validation and Quality Assurance:
   After the integration process, we performed thorough validation and quality assurance checks to ensure the accuracy and completeness of the integrated data. We verified that the relationships between the datasets were properly established and that the data aligned correctly based on the common attribute.

5. Loading the Integrated Data:
   Finally, we loaded the integrated data into the designated table within Azure SQL Databases. This step involved executing the pipeline and monitoring the data loading process to ensure its successful completion.

By following these steps, we were able to successfully perform data integration using Azure Data Factory, consolidating data from three different sources into a single table. This integrated dataset provides a comprehensive view of Airport Runway-related information, enabling us to derive meaningful insights and make informed decisions.

Please let me know if you need any further information or if there's anything else I can assist you with!
