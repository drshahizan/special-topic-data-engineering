# Assignment: Data Integration in Data Science

You are tasked with developing a data integration plan for a hypothetical data science project. You will need to identify at least three different data sources, and create a plan for integrating these sources into a unified dataset that can be used for analysis.

## Instructions:

### 1. Identify three different data sources
Identify three different data sources that are relevant to your data science project. These could be CSV files, SQL databases, APIs, or any other type of data source that can be accessed programmatically. For each data source, provide a brief description of the data it contains, and explain why it is relevant to your project.

**Example:**<br>
Data source 1: CSV file containing information on customer transactions. This data includes customer IDs, purchase amounts, and dates of transactions. This data is relevant because we want to analyze customer purchasing behavior over time.

### 2. Develop a plan for integrating data sources
Develop a plan for integrating these data sources into a unified dataset. This plan should include details on how you will map the data from each source onto a common schema, how you will handle missing or incomplete data, and any other data cleaning or transformation steps that will be necessary.

**Example:**<br>
To integrate the customer transaction data with our other data sources, we will need to map the customer IDs to a common format, and combine the purchase amounts and dates into a single table. We will also need to handle cases where a customer ID is missing from one or more data sources, or where a purchase amount or date is missing. To do this, we will use data imputation techniques to fill in missing values where possible, and exclude records where missing data cannot be imputed.

> Use an ETL tool such as Talend or Apache Nifi to extract, transform, and load the data into a single data warehouse.


### 3. Implement your data integration plan
Using Python, we implemented our integration plan by using 3 copy data activity in our pipeline. Each copy data activity represented 3 different source of data on the Airport data. Every data source has one common column which is RunwayID and this is how all data sources are integrated. By using one common column, the source can map to its destination based on it. Next, the write behaviour need to be configure into upsert. This is because we faced an issue on our first run of the pipeline.

Issues faced :
* The data only merged on the last copy data activity which is data3.
* The data overwrite other copy data activity before it.
* The final result do not display all data from the 3 sources.
* Data integration : failed.
 
Due to the issues, we configure the write behaviour on all the copy data activity to upsert. Upsert allow appending all the data from sources and destination instead of overwriting it. All the data type need to be set correctly to prevent any error and to ensure data inserted into database in correct format. After we made some changes, we finally managed to integrate our data from 3 different sources. Below are the source code on each copy data activity in our pipeline labelled as ; data1, data2 and data 3.

* Activity 1 -Copy Data(data1)
```
{
    "name": "Copy data1",
    "type": "Copy",
    "dependsOn": [],
    "policy": {
        "timeout": "0.12:00:00",
        "retry": 0,
        "retryIntervalInSeconds": 30,
        "secureOutput": false,
        "secureInput": false
    },
    "userProperties": [],
    "typeProperties": {
        "source": {
            "type": "ExcelSource",
            "storeSettings": {
                "type": "AzureBlobStorageReadSettings",
                "recursive": true,
                "enablePartitionDiscovery": false
            }
        },
        "sink": {
            "type": "AzureSqlSink",
            "writeBehavior": "insert",
            "sqlWriterUseTableLock": false
        },
        "enableStaging": false,
        "translator": {
            "type": "TabularTranslator",
            "mappings": [
                {
                    "source": {
                        "name": "RunwayID",
                        "type": "String",
                        "physicalType": "String"
                    },
                    "sink": {
                        "name": "RunwayID",
                        "type": "String",
                        "physicalType": "varchar"
                    }
                },
                {
                    "source": {
                        "name": "Airport ID",
                        "type": "String",
                        "physicalType": "String"
                    },
                    "sink": {
                        "name": "AirportID",
                        "type": "String",
                        "physicalType": "varchar"
                    }
                }
            ],
            "typeConversion": true,
            "typeConversionSettings": {
                "allowDataTruncation": true,
                "treatBooleanAsNumber": false
            }
        }
    },
    "inputs": [
        {
            "referenceName": "data1",
            "type": "DatasetReference"
        }
    ],
    "outputs": [
        {
            "referenceName": "AzureSqlTable1",
            "type": "DatasetReference"
        }
    ]
}


```
* Activity 2 -Copy Data(data2)
```
{
    "name": "Copy data2",
    "type": "Copy",
    "dependsOn": [],
    "policy": {
        "timeout": "0.12:00:00",
        "retry": 0,
        "retryIntervalInSeconds": 30,
        "secureOutput": false,
        "secureInput": false
    },
    "userProperties": [],
    "typeProperties": {
        "source": {
            "type": "ExcelSource",
            "storeSettings": {
                "type": "AzureBlobStorageReadSettings",
                "recursive": true,
                "enablePartitionDiscovery": false
            }
        },
        "sink": {
            "type": "AzureSqlSink",
            "writeBehavior": "insert",
            "sqlWriterUseTableLock": false
        },
        "enableStaging": false,
        "translator": {
            "type": "TabularTranslator",
            "mappings": [
                {
                    "source": {
                        "name": "RunwayID",
                        "type": "String",
                        "physicalType": "String"
                    },
                    "sink": {
                        "name": "RunwayID",
                        "type": "String",
                        "physicalType": "varchar"
                    }
                },
                {
                    "source": {
                        "name": "Length ft",
                        "type": "String",
                        "physicalType": "String"
                    },
                    "sink": {
                        "name": "Lengthft",
                        "type": "Int32",
                        "physicalType": "int"
                    }
                },
                {
                    "source": {
                        "name": "Width ft",
                        "type": "String",
                        "physicalType": "String"
                    },
                    "sink": {
                        "name": "Widthft",
                        "type": "Int32",
                        "physicalType": "int"
                    }
                }
            ],
            "typeConversion": true,
            "typeConversionSettings": {
                "allowDataTruncation": true,
                "treatBooleanAsNumber": false
            }
        }
    },
    "inputs": [
        {
            "referenceName": "data2",
            "type": "DatasetReference"
        }
    ],
    "outputs": [
        {
            "referenceName": "AzureSqlTable1",
            "type": "DatasetReference"
        }
    ]
}

```
* Activity 2 -Copy Data(data2)
```
{
    "name": "Copy data3",
    "type": "Copy",
    "dependsOn": [],
    "policy": {
        "timeout": "0.12:00:00",
        "retry": 0,
        "retryIntervalInSeconds": 30,
        "secureOutput": false,
        "secureInput": false
    },
    "userProperties": [],
    "typeProperties": {
        "source": {
            "type": "ExcelSource",
            "storeSettings": {
                "type": "AzureBlobStorageReadSettings",
                "recursive": true,
                "enablePartitionDiscovery": false
            }
        },
        "sink": {
            "type": "AzureSqlSink",
            "writeBehavior": "insert",
            "sqlWriterUseTableLock": false
        },
        "enableStaging": false,
        "translator": {
            "type": "TabularTranslator",
            "mappings": [
                {
                    "source": {
                        "name": "RunwayID",
                        "type": "String",
                        "physicalType": "String"
                    },
                    "sink": {
                        "name": "RunwayID",
                        "type": "String",
                        "physicalType": "varchar"
                    }
                },
                {
                    "source": {
                        "name": "Surface",
                        "type": "String",
                        "physicalType": "String"
                    },
                    "sink": {
                        "name": "Surface",
                        "type": "String",
                        "physicalType": "varchar"
                    }
                },
                {

```

**Example:**<br>
We will use Python to implement our data integration plan. We will load the customer transaction data from a CSV file using the Pandas library, and map it onto a common schema using a combination of Pandas data manipulation functions and custom code. We will also use the Scikit-learn library to perform data imputation, and the Seaborn library to visualize the integrated dataset.

### 4. Evaluate the success of your data integration plan. 
This should include a qualitative assessment of the quality and completeness of the integrated dataset, as well as any quantitative metrics that are relevant to your project.

**Example:**<br>
We will evaluate the success of our data integration plan by comparing the integrated dataset to our original data sources, and by analyzing the quality of the data using standard metrics such as mean, median, and standard deviation. We will also assess the completeness of the integrated dataset by comparing it to our expected schema, and by identifying any missing or incomplete data that was not addressed by our data cleaning and transformation steps.

### 5. Write a report summarizing your data integration plan and your results. 
This report should include a description of your data sources, a detailed explanation of your data integration plan, and an analysis of the success of your plan.

**Example:**<br>
Our report summarizes our data integration plan for integrating customer transaction data with other data sources for a data science project analyzing customer behavior over time. We identified three different data sources, and developed a plan for mapping the data onto a common schema, handling missing or incomplete data, and cleaning and transforming the data as needed. We implemented our plan using Python, and evaluated the success of our plan by comparing the integrated dataset to our original data sources and assessing the quality and completeness of the integrated dataset. Our analysis shows that our data integration plan was successful, and that the integrated dataset is suitable for use in our data science project.

By using a real-world example and providing step-by-step instructions, this assignment can help students understand the importance of data integration in data science and how it can be applied in practical scenarios. It also provides an opportunity for students to practice using data integration tools and applying machine learning techniques to gain insights from the data.

### Others
- Collaborate effectively with your group members to complete the task.
- Ensure to send the report in **mark down** format and **source code**.
- Please submit the assignments in the submission [**Data integration submission**](https://github.com/drshahizan/special-topic-data-engineering/tree/main/assignment/data-integration/submission/) folder. It would be best if you create a folder using your group name.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
