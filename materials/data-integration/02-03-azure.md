<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

# Microsoft Azure Data Factory (ADF)

Microsoft Azure Data Factory (ADF) is a cloud-based data integration service that enables users to create, schedule, and manage data pipelines that move and transform data from various sources.

## History
Microsoft Azure Data Factory was first released in 2015 and has since undergone multiple updates and enhancements. The service is part of Microsoft's Azure cloud platform and integrates with other Azure services such as Azure SQL Database, Azure HDInsight, and Azure Machine Learning.

## Features
Azure Data Factory provides a range of features that enable users to integrate, transform, and process data from various sources. These include:

1. Integration with various data sources: ADF supports integration with a wide range of data sources including structured and unstructured data, on-premises and cloud-based data, and relational and non-relational data sources.

2. Data transformation: ADF provides a range of data transformation tools such as mapping, data conversion, and data aggregation to help users transform data as it is moved between sources.

3. ETL and ELT processes: ADF enables users to create extract, transform, and load (ETL) and extract, load, and transform (ELT) processes that can be used to build data pipelines.

4. Visual interface: ADF provides an intuitive drag-and-drop interface that enables users to easily build and manage data pipelines.

5. Integration with Azure services: ADF integrates with other Azure services such as Azure SQL Database, Azure HDInsight, and Azure Machine Learning to enable users to process and analyze data in real-time.

## 10 companies that are using ADF for data integration

| Company | Industry | Use Case |
| --- | --- | --- |
| 3M | Manufacturing | Used ADF to integrate data from various sources including SAP and Oracle and provide real-time analytics for improved decision-making. |
| Chevron | Oil and Gas | Used ADF to integrate data from its various operational systems and provide real-time analytics for improved production efficiency and cost savings. |
| ABB | Industrial Automation | Used ADF to move and process data from its various production systems, enabling real-time monitoring and analysis for improved quality control and operational efficiency. |
| Cargill | Agriculture | Used ADF to integrate data from various sources including sensor data and weather forecasts to optimize crop yield and improve overall business operations. |
| GE Aviation | Aerospace | Used ADF to integrate data from various systems including flight data, maintenance records, and weather forecasts to improve aircraft safety, maintenance, and overall performance. |
| Schneider Electric | Energy Management | Used ADF to integrate data from various sources including IoT devices and operational systems to improve energy management and reduce costs. |
| LG Electronics | Consumer Electronics | Used ADF to integrate data from various sources including customer feedback and sales data to improve product development and marketing strategies. |
| Rockwell Automation | Industrial Automation | Used ADF to integrate data from various operational systems and enable real-time monitoring and analysis for improved maintenance and operational efficiency. |
| Carnival Corporation | Travel and Hospitality | Used ADF to integrate data from various systems including passenger information and ship operations to optimize guest experience and improve overall operations. |
| Swisscom | Telecommunications | Used ADF to integrate data from various sources including customer data and network data to improve network management and customer experience. |

These are just a few examples of companies across various industries that have used Microsoft Azure Data Factory for their data integration needs. ADF's ability to integrate with various data sources and provide real-time analytics makes it a popular choice for companies looking to streamline their data processes and gain insights from their data.

## High-level overview of how to use ADF
Microsoft Azure Data Factory (ADF) is a cloud-based data integration service that enables users to create, schedule, and orchestrate data workflows. ADF allows users to integrate data from various sources, such as on-premises and cloud-based data sources, and transform and load that data into various target destinations such as data lakes, data warehouses, and databases.

Here is a high-level overview of how to use Microsoft Azure Data Factory:

1. Create a data factory: To get started with ADF, you need to create a data factory. A data factory is a logical container that holds your data integration pipelines, datasets, and linked services.

2. Define your data sources and sinks: ADF supports a wide range of data sources and sinks, including Azure services such as Azure Blob Storage, Azure Data Lake Storage, Azure SQL Database, and many others, as well as on-premises data sources such as SQL Server, Oracle, and SAP.

3. Create pipelines: Pipelines are the core component of ADF. A pipeline is a workflow that defines the movement and transformation of data from source to destination. You can create pipelines using the visual pipeline designer in the ADF portal or by using code.

4. Configure activities: Activities are the building blocks of pipelines. They define the individual steps or tasks that are performed in a pipeline. ADF provides a variety of pre-built activities for data transformation, movement, and processing, such as copy data, execute stored procedure, and web activity.

5. Monitor and manage pipelines: ADF provides monitoring and management tools to help you keep track of your pipelines and ensure that they are running smoothly. You can use the ADF portal to monitor the status of your pipelines, set up alerts for pipeline failures, and view logs to troubleshoot issues.

6. Schedule pipelines: ADF allows you to schedule pipelines to run at specific times or intervals. You can create trigger-based schedules or time-based schedules.

Overall, Microsoft Azure Data Factory is a powerful and flexible data integration service that allows users to integrate data from various sources and transform and load that data into various target destinations. With its visual pipeline designer, pre-built activities, and monitoring and management tools, ADF makes it easy for users to create and manage data integration workflows in the cloud.

## Using ADF for data integration with three different data sources

An example of how to use ADF for data integration with three different data sources:

1. Set up your data sources: In this example, we will be integrating data from three different sources - a CSV file stored in Azure Blob Storage, a SQL Server database, and a REST API. First, you will need to set up your data sources and create linked services in ADF to connect to each of them.

2. Define your datasets: Once you have set up your data sources, the next step is to define your datasets. A dataset is a named reference to a data source that defines the format and schema of the data.

For the CSV file, you can create a dataset that points to the file location in Azure Blob Storage and specifies the format and schema of the data. For the SQL Server database, you can create a dataset that points to the database and specifies the tables or views to be used in the integration process. For the REST API, you can create a dataset that defines the API endpoint and the format of the data.

3. Create pipelines: Once you have defined your datasets, the next step is to create pipelines that define the integration process. In ADF, you can create pipelines using the visual pipeline designer or by using code.

> For our example, you can create a pipeline that uses the Copy Data activity to copy data from the CSV file to a staging table in the SQL Server database. You can then create another pipeline that uses the Lookup and Web activities to retrieve data from the REST API and join it with data in the staging table. Finally, you can create a third pipeline that uses the Stored Procedure activity to insert the joined data into a final destination table in the SQL Server database.

4. Schedule pipelines: Once you have created your pipelines, the final step is to schedule them to run at specific times or intervals. In ADF, you can create trigger-based schedules or time-based schedules.

> For example, you can set up a trigger-based schedule to run the first pipeline to copy data from the CSV file to the SQL Server database every time a new file is added to the Azure Blob Storage container. You can set up a time-based schedule to run the second pipeline to retrieve data from the REST API every day at a specific time. And you can set up a trigger-based schedule to run the third pipeline to insert the joined data into the final destination table every time the staging table is updated.

Microsoft Azure Data Factory is a powerful and flexible data integration service that allows users to integrate data from various sources and transform and load that data into various target destinations. With its visual pipeline designer, pre-built activities, and monitoring and management tools, ADF makes it easy for users to create and manage complex data integration workflows in the cloud.

## Case Study

How Microsoft Azure Data Factory (ADF) works for data integration in a data science project:

Let's say we are working on a project that involves analyzing data from multiple sources - a CSV file containing customer data, a database with product information, and a REST API that provides real-time sales data. We want to bring all of this data together into a single location so we can perform analysis and generate insights.

1. Set up the data sources: In this case, we will set up Azure Blob Storage to store the CSV file, Azure SQL Database to store the product information, and the REST API to access real-time sales data. We will create linked services in ADF to connect to each of these data sources.

2. Define the datasets: We will create three datasets in ADF to represent our data sources - one for the CSV file, one for the SQL database, and one for the REST API. Each dataset will specify the format and schema of the data.

3. Create the pipeline: We will create a pipeline in ADF that defines the integration process. The pipeline will use the Copy Data activity to copy data from the CSV file to a staging table in the SQL database, the Lookup activity to retrieve data from the product database, and the Web activity to retrieve data from the REST API. We will then use the Join activity to merge the data together based on a common identifier.

4. Schedule the pipeline: We will schedule the pipeline to run daily at a specific time to retrieve the most recent sales data. We can also set up alerts in ADF to notify us if the pipeline fails or if any unexpected issues arise.

5. Monitor the pipeline: We can use the ADF monitoring and management tools to monitor the pipeline and track its progress. We can view the status of each activity, check for errors or warnings, and view performance metrics to ensure that the pipeline is running efficiently.

Once the data has been integrated, we can use tools like Power BI or Azure Machine Learning to analyze the data and generate insights. By using ADF to bring together data from multiple sources, we can gain a more comprehensive understanding of our customers, products, and sales performance, and make better-informed business decisions.


## Useful links
- [How to Use Azure Data Factory](https://youtu.be/FpeuSQlzyB0)
- [Azure Data Factory - Beginner to Advanced](https://www.youtube.com/playlist?list=PL7ZG6NdDdT8N8sfWViyEdReWoR_JjBSu_)
- [Azure Data Factory Tutorial](https://www.youtube.com/watch?v=JIJEL7M7Pv0&list=PLWf6TEjiiuICyhzYAnSshwQQy3hrH3eGw)

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)

