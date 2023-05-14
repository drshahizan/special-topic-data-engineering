<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

# Apache Kafka

Apache Kafka is an open-source distributed event streaming platform used for building real-time data pipelines and streaming applications. It was initially developed at LinkedIn in 2011 and later became an open-source project under the Apache Software Foundation in 2012. Kafka is designed to handle high volumes of real-time data, with low latency and high reliability.

## Introduction
Kafka is commonly used in data integration scenarios, where it serves as a high-throughput, fault-tolerant messaging system that enables real-time data integration between different systems and applications. Kafka can be used to stream data from a variety of sources, including databases, message queues, log files, and IoT devices, to name a few.

One of the key features of Kafka is its ability to handle both real-time and batch data processing. Kafka's data streams can be processed in real-time using Apache Flink, Apache Spark, or other stream processing frameworks. Kafka can also store data for batch processing using Hadoop or other batch processing frameworks.

In terms of the companies using Kafka, it has gained significant popularity in recent years and is now used by many large enterprises, including Airbnb, Netflix, Uber, LinkedIn, PayPal, and Walmart, among others. These companies use Kafka for a variety of use cases, including data integration, real-time analytics, log aggregation, and event-driven architectures.

Apache Kafka is a powerful tool for data integration and real-time data streaming. It has a rich history, starting with its development at LinkedIn and subsequent adoption as an open-source project. Today, Kafka is widely used by many large enterprises for a variety of use cases, and its popularity is only expected to grow as more companies seek to leverage the power of real-time data processing and streaming.

## 10 companies that are using Apache Kafka for data integration

| Company | Industry | Use case | Reason for using Kafka |
| --- | --- | --- | --- |
| Airbnb | Travel | Real-time data processing | Kafka enables real-time data processing and analytics to power Airbnb's search and booking platform. |
| LinkedIn | Social Media | Log aggregation and processing | Kafka is used to collect, process, and analyze log data from LinkedIn's many servers and applications. |
| Netflix | Media | Real-time data streaming | Kafka enables Netflix to stream real-time data from various sources to power its recommendation engine and other applications. |
| Uber | Transportation | Real-time data processing | Kafka enables real-time processing and analytics of Uber's ride and location data, as well as its mobile app events. |
| PayPal | Finance | Event-driven architecture | Kafka is used as a messaging system in PayPal's event-driven architecture, enabling real-time processing of financial transactions and other events. |
| Walmart | Retail | Real-time inventory management | Kafka enables real-time data streaming and processing to power Walmart's inventory management system and supply chain. |
| Goldman Sachs | Finance | Real-time trading analytics | Kafka enables real-time processing and analysis of market data and trading events, powering Goldman Sachs' trading platform. |
| Cisco | Networking | IoT data processing | Kafka enables real-time processing and analysis of IoT data, enabling Cisco to build intelligent networking solutions. |
| The New York Times | Media | Real-time data streaming | Kafka is used to stream real-time data from various sources, enabling The New York Times to provide up-to-date news and insights. |
| Zillow | Real Estate | Real-time data processing | Kafka enables real-time processing and analysis of real estate data, powering Zillow's home value estimates and other features. |

These companies use Kafka for a variety of use cases, including real-time data processing, real-time analytics, event-driven architectures, and IoT data processing. Kafka's ability to handle high volumes of real-time data with low latency and high reliability makes it an ideal tool for these types of use cases.

## High-level overview of how to use Apache Kafka
Apache Kafka is a distributed messaging system that can be used for real-time data streaming and data integration. Here is a high-level overview of how to use Apache Kafka for data integration:

1. Install and configure Apache Kafka cluster: You will need to install and configure an Apache Kafka cluster to use it for data integration. The cluster should consist of one or more Kafka brokers, which act as message brokers and handle the incoming and outgoing messages.

2. Define data sources and data consumers: You will need to define the data sources from which data needs to be extracted and the data consumers that will process the data. Data sources can include databases, file systems, APIs, or other streaming systems. Data consumers can be databases, data warehouses, or other downstream systems.

3. Create Kafka topics: Kafka topics are used to categorize and partition data streams. You will need to create a topic for each data source from which data is extracted and for each data consumer that will process the data.

4. Write Kafka producers and consumers: Producers are used to publish data to Kafka topics, while consumers are used to read data from Kafka topics. You will need to write producers for each data source and consumers for each data consumer.

5. Configure Kafka Connect: Kafka Connect is a framework for building and running connectors that can move data from external systems into Kafka and vice versa. You can use Kafka Connect to connect to external systems and pull data into Kafka or push data from Kafka to external systems.

## Using Apache Kafka for data integration with three different data sources

Suppose you have an e-commerce website that generates data from three sources: web logs, order data, and customer data. You want to integrate this data in real-time to analyze customer behavior, product trends, and sales performance. You can use Apache Kafka for this purpose.

1. Install and configure an Apache Kafka cluster.

2. Define the data sources and data consumers. The web logs will be the data source from which data is extracted. The data consumers will be a database and a machine learning model that analyzes customer behavior.

3. Create Kafka topics for each data source and data consumer. You will create three topics: web_logs, orders, and customer_behavior.

4. Write Kafka producers and consumers. You will write a producer that extracts data from the web logs and publishes it to the web_logs topic. You will write a consumer that reads data from the web_logs topic, transforms it, and publishes it to the orders topic. You will also write a consumer that reads data from the orders topic, performs machine learning analysis, and publishes the results to the customer_behavior topic.

5. Configure Kafka Connect to connect to the database and push data from the customer_behavior topic to the database.

## Case study using data science project

Suppose you have a data science project in which you need to integrate data from multiple sources, including social media, weather data, and customer feedback. You want to use Apache Kafka to integrate this data in real-time.

1. Install and configure an Apache Kafka cluster.

2. Define the data sources and data consumers. The data sources will be social media platforms, weather APIs, and customer feedback forms. The data consumers will be a machine learning model that analyzes customer sentiment and a data warehouse.

3. Create Kafka topics for each data source and data consumer. You will create three topics: social_media, weather_data, and customer_feedback.

4. Write Kafka producers and consumers. You will write a producer that extracts data from social media platforms and publishes it to the social_media topic. You will write a producer that extracts weather data from weather APIs and publishes it to the weather_data topic. You will also write a producer that extracts customer feedback from feedback forms and publishes it to the customer_feedback topic. You will write a consumer that reads datafrom the social_media topic, preprocesses it, and publishes the processed data to the customer_sentiment topic. You will also write a consumer that reads data from all three topics, aggregates it, and publishes it to the data warehouse.

5. Configure Kafka Connect to connect to the data warehouse and pull data from the customer_sentiment topic to the data warehouse.

In this example, the machine learning model analyzes customer sentiment by processing social media data from the social_media topic. The data warehouse stores the aggregated data from all three sources, allowing for deeper analysis and insights.

By using Apache Kafka for data integration, you can process and analyze data in real-time, allowing for more timely and accurate insights. It also enables you to easily scale your data integration pipeline as your data sources and consumers grow.

## Useful links
- [Apache Kafka in 5 minutes](https://youtu.be/PzPXRmVHMxI)
- [Apache Kafka in 6 minutes](https://youtu.be/Ch5VhJzaoaI)
- [What is Kafka?](https://youtu.be/aj9CDZm0Glc)
- [Install Apache Kafka on Windows PC | Kafka Installation Step-By-Step Guide](https://youtu.be/BwYFuhVhshI)

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)

