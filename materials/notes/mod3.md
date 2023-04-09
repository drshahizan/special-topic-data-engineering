<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)

Don't forget to hit the :star: if you like this repo.

<!---
Module X: XXX

Group XXXX
1. XXXX
2. XXXX
3. XXXX
4. XXXX

-->

# Module 3: Types of Data & NoSQL Database

### Contents:
#### Notes
- [Why nowadays NoSQL database is common?](#Why-nowadays-NoSQL-database-is-common?)
- [Types of Data](#types-of-data)
- [NoSQL Database](#NoSQL-database)
- [Types of NoSQL Database](#types-of-NoSQL-database)

### Others
## Why nowadays NoSQL database is common?
- The development using NoSQL database is much faster than SQL database
- The structure of many different forms of data is more easily handled and evolved with a NoSQL database
- The amount of data in many applications cannot be served affordably by a SQL database
- The scale of traffic and need for zero downtime cannot be handled by SQL
- New application paradigms can be more easily supported

## Types of Data
<div align="center"><img src="https://www.bigdataframework.org/wp-content/uploads/2019/01/data-structures-1-1024x349.png"></div>
<table>
    <thead>
        <tr>
            <th> </th>
            <th>Structured Data</th>
            <th>Semi-Structured Data</th>
            <th>Unstructured Data</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Characteristics</td>
            <td>
              <li>Predefined data models</li> 
              <li>Easy to search </li>
              <li>Shows what is happening</li>
            </td>
            <td>
              <li>Loosely organized</li> 
              <li>Meta-level structure that can contain unstructured data</li>
            </td>
            <td>
              <li>No predefined data models</li> 
              <li>Difficult to search </li>
              <li>Shows the why</li>
            </td>
        </tr>
       <tr>
            <td>Process </td>
            <td>
              Easy to process with traditional data analysis tools
            </td>
            <td>
              Can be processed with both traditional and NoSQL data analysis tools
            </td>
            <td>
              Difficult to process with traditional data analysis tools
            </td>
        </tr>
        <tr>
            <td>Resides in</td>
            <td>
              <li>Relational databases</li> 
              <li>Data warehouses </li>
            </td>
            <td>Relational databases</td>
            <td>
              <li>Data warehouses</li> 
              <li>Data lakes</li>
            </td>
        </tr>
        <tr>
            <td>Stored in </td>
            <td>Rows and columns</td>
            <td>Abstracts and figures</td>
            <td>Various forms</td>
        </tr>
        <tr>
            <td>Examples</td>
            <td>names, address, ID number, stock information</td>
            <td>JSON, XML, CSV and log file, email message, digital photograph that has time stamped, geo tagged and device ID</td>
            <td>image, audio recording, video, web pages, free-form texts</td>
        </tr>
        </tr>
    </tbody>
</table>

## NoSQL Database
* A database that does not use traditional relational data model
* Designed to handle large volume of unstructured and semi-structured data which is a good choice for big data and real-time web applications
* Examples: MongoDB, Cassandra, Redis, Neo4j, OrientDB

<div align="center"><img src="https://ares.decipherzone.com/blog-manager/uploads/ckeditor_Top%2010%20NoSQL%20Databases%20in%202022.png" height="250"
                         ></div>

**Advantages of NoSQL Database:**

1)`F`lexibility:` NoSQL database has flexible schema and this makes it easier to add or remove data fields or change the structure of the data

2)`Scalability:`NoSQL database often use sharding and partitioning to distribute data across multiple servers and nodes

3)`Less on-going database maintainance:`easier for maintainance because of automatically partition and replicate information across nodes

4)`Cost-effective:`NoSQL database runs on commodity hardware and it does not require expensive licenses


**Disadvantage of NoSQL**

1)`Less flexible query:`

2)`Less Mature compare to SQL:`

3)`NoSQL isn't designed to scale by itself:`

## Types of NoSQL database

<div align="center"><img src="https://abcloudz.com/wp-content/uploads/2021/01/NoSQL.png?x87761" height="250"
                         ></div>
                         
<table>
  <tr>
    <th>Document databases</th>
    <td>
      <li>Store data in JSON, BSON or XML documents</li>
      <li>Support different operations including CRUD (Create, Read, Update, Delete), queries and indexing</li>
      <li>No fixed query lanaguage</li>
      <li>Suitable for hierarchical data storage</li>
      <li>Do not require pre-defined schema and complex joins</li>
      <li>Use cases: e-commerce, trading platforms, mobile applications, social networking, content management</li>
      <li>Examples: MongoDB, Couchbase, Apache Cassandra, CouchDB, Amazon DocumentDB, RavenDB</li>
   </td>
  </tr>
  <tr>
    <th>Key-value stores</th>
    <td>
      <li>Each data element is stored as a key-value pair with attribute names and values</li>
      <li>Store and retrieve data efficiently based on the key</li>
      <li>Used for caching accessed data such as session data, page fragments and query results</li>
      <li>Use for real-time analytics and make timely decision</li>
      <li>Can handle high volumes of requests and provide fast accesss to session data</li>
      <li>Use cases: Shopping carts, user profiles, user preference</li>
      <li>Examples: Redis, Riak, Apache Cassandra, Amazon DynamoDB, Couchbase, Aerospike</li>
    </td>
  </tr>
  <tr>
    <th>Column-oriented databases</th>
    <td>
      <li>Data is stored as a set of columns instead of rows</li>
      <li>Allow fast reads and write operatiions on large dataset</li>
      <li>Each column contains data with same data types such as integer, string</li>
      <li>Does not have fixed schema and can handle any data type</li>
      <li>Use case: Analytics</li>
      <li>Examples: Apache Cassandra, Apache HBase, Google Bigtable, ScyllaDB, Apache Druid, Vertica</li>
    </td>
  </tr>
  <tr>
    <th>Graph databases</th>
    <td>
      <li>Each element is stored as node, representing entities and relationship between them</li>
      <li>Node can have properties such as name, or attributes</li>
      <li>Use query language to perform function like traverse the graph, search for nodes and perform complex operations</li>
      <li>Use cases: Social networking, fraud detection,recommendation engines</li>
      <li>Examples: Neo4j, OrientDB, ArangoDB, JanusGraph, Amazon Neptune, Microsoft Azure Cosmo DB</li>
    </td>
  </tr>
</table>

## MongoDB

Official website: https://www.mongodb.com/

Download and installation link: https://www.mongodb.com/docs/manual/installation/


                                                                     

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)


