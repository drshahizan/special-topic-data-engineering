<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

# Apache NiFi

Apache NiFi is an open-source data integration platform used for collecting, processing, and distributing data from various sources. NiFi was initially developed by the United States National Security Agency (NSA) and later became an open-source project under the Apache Software Foundation in 2014.

## Introduction
NiFi is designed to handle a wide variety of data formats and protocols, including structured and unstructured data, as well as streaming and batch data. It has a drag-and-drop interface that allows users to create data flows and transformations, making it easy to manage complex data integration pipelines.

NiFi is commonly used in data integration scenarios where there is a need to collect and process data from multiple sources, transform it into a common format, and distribute it to various systems and applications. NiFi also supports real-time data processing and streaming, making it an ideal tool for building data pipelines for IoT devices and other real-time data sources.

In terms of the companies using NiFi, it has gained significant popularity in recent years and is now used by many large enterprises, including Adobe, Capital One, Cisco, NASA, and the US Department of Defense, among others. These companies use NiFi for a variety of use cases, including data integration, data migration, log collection, and real-time analytics.

In summary, Apache NiFi is a powerful tool for data integration and data processing. It has a rich history, starting with its development by the NSA and subsequent adoption as an open-source project. Today, NiFi is widely used by many large enterprises for a variety of use cases, and its popularity is only expected to grow as more companies seek to leverage the power of data integration and real-time data processing.

## 10 companies that are using Apache Nifi for data integration

| Company | Industry | Use case | Reason for using NiFi |
| --- | --- | --- | --- |
| Adobe | Technology | Data integration | NiFi is used to collect, process, and transform data from various sources to power Adobe's analytics platform. |
| Capital One | Finance | Data migration | NiFi is used to migrate data between various systems and platforms as part of Capital One's digital transformation efforts. |
| Cisco | Technology | IoT data processing | NiFi is used to process and analyze data from IoT devices to power Cisco's networking and security solutions. |
| NASA | Aerospace | Data processing | NiFi is used to process and analyze data from various scientific instruments and spacecraft to power NASA's research efforts. |
| US Department of Defense | Government | Data integration | NiFi is used to collect, process, and distribute data from various sources to support the Department of Defense's operations and missions. |
| Yelp | Technology | Log collection | NiFi is used to collect and process log data from Yelp's various systems and applications to power its analytics and monitoring tools. |
| Amgen | Biotechnology | Data processing | NiFi is used to process and analyze data from various scientific experiments to power Amgen's research efforts. |
| BlackRock | Finance | Data integration | NiFi is used to collect, process, and distribute financial data from various sources to power BlackRock's investment management platform. |
| Verizon | Telecommunications | Data integration | NiFi is used to collect, process, and transform data from various sources to power Verizon's analytics and business intelligence tools. |
| Symantec | Technology | Data integration | NiFi is used to collect, process, and distribute data from various sources to support Symantec's cybersecurity operations and products. |

These companies use NiFi for a variety of use cases, including data integration, data migration, log collection, and real-time data processing. NiFi's ability to handle complex data integration scenarios with ease, its drag-and-drop interface for building data flows, and its support for real-time data processing make it an ideal tool for these types of use cases.

## High-level overview of how to use Apache Nifi
Apache NiFi is a data integration platform that allows users to collect, process, and distribute data from various sources. Here is a high-level overview of how to use NiFi:

1. Install NiFi: NiFi can be installed on a server or a local machine. Once installed, it can be accessed through a web-based user interface.

2. Build a data flow: NiFi's user interface allows users to build data flows by dragging and dropping processors onto a canvas. Processors are the building blocks of a data flow, and they can be used to collect, process, and distribute data.

3. Configure processors: Each processor has its own set of configuration options that determine how it operates on data. For example, a processor used to collect data might need to be configured with a URL or a file path.

4. Connect processors: Processors can be connected to form a data flow. Connections between processors determine the order in which data flows through the data flow.

5. Monitor the data flow: NiFi's user interface provides real-time feedback on the status of the data flow. Users can view metrics, logs, and alerts to monitor the performance of the data flow.

6. Modify the data flow: As data sources or use cases change, users can modify the data flow by adding or removing processors or changing the configuration of existing processors.

NiFi's drag-and-drop interface and configurable processors make it easy to build and modify data flows, while its real-time feedback and monitoring capabilities provide users with valuable insights into the performance of their data integration pipelines.

## Using Apache Kafka for data integration with three different data sources

Using Apache NiFi for data integration with three different data sources is a common use case. Here is a high-level overview of how to do this:

1. Identify data sources: The first step is to identify the data sources you want to integrate. In this example, let's say you have three different data sources: a MySQL database, a REST API, and a CSV file.

2. Build a data flow: Using NiFi's drag-and-drop interface, you can build a data flow that collects data from these three sources and integrates them into a single data stream. Start by dragging processors onto the canvas that correspond to each data source. For example, you can use the "GetMySQL" processor to connect to the MySQL database and retrieve data, the "InvokeHTTP" processor to connect to the REST API and retrieve data, and the "GetFile" processor to read data from the CSV file.

3. Configure processors: Each processor needs to be configured with the appropriate connection details and credentials. For example, you need to configure the "GetMySQL" processor with the hostname, port, database name, and credentials required to connect to the MySQL database.

4. Connect processors: Once the processors are configured, connect them in the appropriate order to create a data flow. For example, you might use a "MergeContent" processor to merge the data streams from the three sources into a single flow.

5. Process data: The data flow can now be started to process data from the three sources. The data can be transformed, enriched, or filtered as required using processors like "SplitText", "ReplaceText", and "FilterRows".

6. Send data to a destination: Finally, the integrated data can be sent to a destination using a processor like "PutKafka" or "PutFile". For example, you might send the data to a Kafka topic for further processing or store it in a file for analysis.

Using NiFi to integrate data from multiple sources is a powerful capability that can be accomplished with minimal coding using its intuitive drag-and-drop interface and pre-built processors.

## Case Study: Analyzing Social Media Sentiment

Suppose you are working on a data science project to analyze social media sentiment using Twitter data. Your goal is to collect tweets related to a particular topic, clean and preprocess the data, and analyze the sentiment of the tweets.

1. Collect data using NiFi: You can use NiFi to collect tweets from the Twitter API using the "GetTwitter" processor. This processor can be configured with the appropriate API keys and access tokens required to access the Twitter API. You can also configure the processor to filter tweets by a particular topic or hashtag.

2. Clean and preprocess data: Once you have collected the tweets, you can use NiFi to clean and preprocess the data. You can use processors like "ReplaceText" and "ExtractText" to remove unwanted characters and extract relevant information from the tweets. You can also use the "SplitText" processor to split the tweets into individual words and the "ToLowercase" processor to convert all words to lowercase.

3. Analyze sentiment: With the cleaned and preprocessed data, you can now analyze the sentiment of the tweets. You can use a pre-built sentiment analysis model or build your own using a machine learning framework like TensorFlow or PyTorch. You can use a "ExecuteScript" processor to run the sentiment analysis model and assign a sentiment score to each tweet.

4. Store the results: Finally, you can use NiFi to store the results of the sentiment analysis. You can use a "PutFile" processor to store the results in a file or a "PutKafka" processor to send the results to a Kafka topic for further processing.

Overall, using NiFi in this data science project allows you to seamlessly collect, clean, preprocess, and analyze social media data in real-time. The pre-built processors and intuitive drag-and-drop interface of NiFi make it easy to build and modify data flows as your project evolves.


## Useful links
- [Apache NiFi Introduction](https://youtu.be/-T9xuBMfI50)
- [Apache NiFi - The Complete Guide for Beginners](https://www.youtube.com/watch?v=VVnFt54jUQ8&list=PL55symSEWBbMBSnNW_Aboh2TpYkNIFMgb)
- [How to install Apache NIFI | How to install Apache NIFI on Windows](https://youtu.be/orDt2C5WDfk)

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)

