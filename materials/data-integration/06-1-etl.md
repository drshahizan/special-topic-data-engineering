<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

# Data Integration: Introduction

## History
The history of data integration in data science can be traced back to the early days of computing. As businesses began to adopt computers in the 1950s and 1960s, they quickly realized that their data was stored in multiple incompatible formats and locations, making it difficult to access and analyze.

The solution to this problem was to develop data integration tools that could bring together data from multiple sources into a single, unified view. The earliest data integration tools were designed to work with mainframe computers and involved copying data from one system to another using tape drives or other physical media.

As computers became more powerful and networked, data integration tools evolved to take advantage of these new capabilities. In the 1980s, for example, the rise of client-server computing led to the development of middleware tools that could help integrate data across different types of systems, including databases, messaging systems, and file systems.

In the 1990s, data integration tools continued to evolve, with the emergence of enterprise application integration (EAI) tools that could integrate data across different types of business applications, such as customer relationship management (CRM) and enterprise resource planning (ERP) systems.

The early 2000s saw the emergence of extract, transform, load (ETL) tools, which were designed to extract data from different sources, transform it into a common format, and load it into a target system for analysis. These tools proved to be very popular, particularly in the business intelligence and data warehousing space.

As big data emerged as a major trend in the late 2000s, data integration tools evolved again to handle the challenges of processing and analyzing large volumes of data from a wide variety of sources. This led to the development of new tools and platforms, such as Hadoop and Apache Spark, which were designed to handle massive amounts of data and enable complex data integration and analysis.

Today, data integration continues to be an important area of focus in data science, as businesses seek to gain insights from the vast amounts of data they collect from various sources. As data continues to grow in volume, variety, and velocity, the need for effective data integration tools and techniques will only continue to grow.

|Decade|Overview|
|---|---|
|1950s-1960s|Early data integration tools developed to work with mainframe computers.|
|1980s|Middelware tools developed to integrate data across different types of systems.|
|1990s|Enterprise application integration (EAI) tools emerge to integrate data across different types of business applications.|
|Early 2000s|Extract, transform, load (ETL) tools emerge to extract data from different sources, transform it into a common format, and load it into a target system for analysis.|
|Late 2000s|New tools and platforms, such as Hadoop and Apache Spark, developed to handle massive amounts of data and enable complex data integration and analysis.|
|Present|Data integration continues to be an important area of focus in data science, as businesses seek to gain insights from the vast amounts of data they collect from various sources.|

## Data integration steps
Data integration in data science involves several steps, including:

### 1. Data Discovery
In this step, data scientists identify all the relevant data sources that are required to build a machine learning model. This may include data from internal databases, external APIs, web scraping, and more.

### 2. Data Collection
Once the data sources have been identified, data is collected from these sources and stored in a central repository, such as a data warehouse or data lake. This step involves cleaning and preprocessing the data to ensure consistency and accuracy.

### 3. Data Transformation
The collected data may be in different formats and structures. Therefore, it needs to be transformed into a common format that is consistent and compatible with the machine learning model.

### 4. Data Integration
The transformed data is then combined with other relevant data sources to provide a more comprehensive view of the data. Data integration techniques include ETL (Extract, Transform, Load), ELT (Extract, Load, Transform), and EAI (Enterprise Application Integration).

### 5. Data Quality
In this step, data scientists ensure that the integrated data is of high quality and accurate. This involves identifying and correcting errors and inconsistencies, and validating the data against business rules and data quality standards.

### 6. Machine Learning
Once the data is integrated and of high quality, machine learning models can be built and trained using the data. The trained models can then be used to make predictions and gain insights.

Data integration in data science has several benefits, including:

1. Improved data accuracy and consistency
2. Faster and more efficient data analysis
3. More comprehensive view of the data
4. Better decision-making capabilities
5. Ability to train and build better machine learning models

## How Big Companies in Data Science Use Data Integration to Gain Insights
Big companies in data science use data integration to bring together data from various sources and make it accessible for analysis. Data integration helps these companies to overcome challenges such as data silos, data quality issues, and data inconsistencies, allowing them to make informed decisions based on a unified and comprehensive view of their data.

One way that big companies in data science use data integration is by implementing enterprise data warehouses (EDWs). EDWs are central repositories that store data from various sources, such as operational databases, transactional systems, and other data stores. The data is extracted, transformed, and loaded into the EDW using ETL tools, making it available for analysis and reporting.

Another way that big companies in data science use data integration is by implementing data lakes. Data lakes are designed to store large volumes of raw, unstructured data from various sources, such as social media, sensor data, and log files. Data lakes use technologies such as Hadoop and Apache Spark to store and process data, enabling data scientists to perform complex analyses and gain new insights.

Big companies in data science also use data integration to integrate data from external sources, such as customer data, social media data, and market research data. This helps companies to gain a 360-degree view of their customers and market trends, enabling them to make informed decisions about product development, marketing campaigns, and customer service. Here are a few examples of how some of these companies use data integration:

1. Amazon: Amazon is one of the largest companies in the world and uses data integration to bring together data from various sources, such as customer data, transactional data, and social media data. Amazon uses this data to provide personalized recommendations to its customers, improve its supply chain management, and make informed business decisions. Amazon also uses data integration to integrate data from its Amazon Web Services (AWS) platform, which provides a range of cloud-based services to businesses.

2. Google: Google is another large company that relies heavily on data integration to make sense of its vast amounts of data. Google uses data integration to bring together data from various sources, such as search data, advertising data, and customer data. Google uses this data to improve its search algorithms, target its advertising more effectively, and provide better user experiences.

3. IBM: IBM is a technology company that provides a range of data integration tools to its customers. IBM uses data integration to integrate data from various sources, such as social media data, machine data, and transactional data. IBM's data integration tools enable its customers to bring together data from various sources and perform complex data analyses, helping them to gain insights and make informed business decisions.

4. Microsoft: Microsoft is a large technology company that provides a range of data integration tools to its customers. Microsoft uses data integration to integrate data from various sources, such as customer data, financial data, and sales data. Microsoft's data integration tools enable its customers to bring together data from various sources and perform complex data analyses, helping them to gain insights and make informed business decisions.

In summary, many big companies in data science rely heavily on data integration to make sense of their vast amounts of data. These companies use data integration to bring together data from various sources, perform complex data analyses, and gain insights that enable them to make informed business decisions.


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)

