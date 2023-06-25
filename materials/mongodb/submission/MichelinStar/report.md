<div align="center">
   <h1>Ramen Rating System</h1>
</div>


<h2>Group Members <img width=30px; height=30px src="https://github.com/TanYongSheng728/TanYongSheng728/blob/main/group.png"></h2>
<table align="center">

  <tr>
    <th>Name</th> 
    <th>Matric</th>
  </tr>
  <tr>
    <td>Eddie Wong Chung Pheng</td>
    <td>A20EC0031</td>
  </tr>
  <tr>
    <td>Yong Zhi Yan</td>
    <td>A20EC0172</td>
  </tr>
    <tr>
    <td>Tan Yong Sheng</td>
    <td>A20EC0157</td>
  </tr>
    <tr>
    <td>Low Junyi</td>
    <td>A20EC0071</td>
  </tr>
  <tr>
    <td>Vincent Boo Ee Khai</td>
    <td>A20EC0231</td>
  </tr>
</table><br>


## Table of Contents
- [Introduction](#introduction)
- [System Design](#system-design)
- [Implementation](#implementation)
- [Web Interface](#web-interface)
- [Testing and Validation](#testing-and-validation)
- [Conclusion](#conclusion)
- [References](#references)

## Introduction
The Ramen Ratings Dataset is a comprehensive collection of reviews and ratings for various ramen products from around the world. This dataset, available on Kaggle, is a valuable resource for anyone interested in exploring the diverse world of ramen and understanding the preferences of ramen enthusiasts worldwide. 

Ramen, a traditional Japanese noodle dish, has gained immense popularity globally, with countless brands and flavors available to consumers. This dataset compiles information on numerous ramen products, including their brand, variety, style, country of origin, and detailed reviews from consumers. It offers a wealth of data for researchers, data scientists, and ramen enthusiasts alike to analyze and extract meaningful insights.


## System Design
### System Architecture
### Data Requirements
 The data requirements for the systems are as follows:
  <table>
  <tr>
    <th>Field</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>_id</td>
    <td>A unique identifier for each ramen</td>
  </tr>
  <tr>
    <td>Review #</td>
    <td>The review ranking for the ramen</td>
  </tr>
    <tr>
    <td>Brand</td>
    <td>The brand or manufacturer of the ramen product</td>
  </tr>
    <tr>
    <td>Variety</td>
    <td>The specific variety or flavor of the ramen</td>
  </tr>
  <tr>
    <td>Style</td>
    <td>The style of ramen, such as instant, cup, or bowl</td>
  </tr>
    <tr>
    <td>Country</td>
    <td>The country of origin of the ramen</td>
  </tr>
    <tr>
    <td>Stars</td>
    <td>The overall rating of the ramen, on a scale of 0 to 5 stars</td>
  </tr>
    <tr>
    <td>Top Ten</td>
    <td>A special designation indicating whether the ramen is among the top ten rated</td>
  </tr>
</table>


### Functionalities
## Implementation
### Step 1:
1. Install Xampp, MongoDB and any developer tools such as Visual Studio Code.
2. Configure all tools on your server or local machine.

### Step 2: Import Database Schemas in MySQL
1. Open Xampp and click 'Start' for both Apache and MySQL.
2. Click 'Admin' beside MySQL.
<div align="center">
  <img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/79bc6d4a-dd02-4589-a385-06dc28df36fd">
</div>
3. Create new database (add tables and attributes for each table).
<div align="center">
  <img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/748e96cc-bb53-483a-af1d-356130751505">
</div>

### Step 3: Connect to Database
1. ```Mysql```: Create a new PHP file to connect to Mysql.
   ```php
   <?php 
   
    //set db parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_ramen";

    //create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    //check connection

    //close connection
   ?>
   ```

2. ```MongoDB```: Create a new PHP file to connect to mongodb.
     ```php
     <?php
     require 'vendor/autoload.php'; // Include the MongoDB PHP driver

     // Connect to MongoDB
     $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

     // Select a database
     $db = $mongoClient->selectDatabase('MichelinStar');
     $collection = $db->ramen;
     ?>
     ```

### Step 4: Implement CRUD Operations

CRUD is an acronym that stands for Create, Read, Update, and Delete. It refers to the basic operations or actions that can be performed on data in a database or system. These operations are fundamental to managing and manipulating data and are commonly used in software development and database management.

#### Step 4.1: Implement CRUD Operations with MySQL
Develop PHP scripts to perform CRUD operations on the MySQL database:
1. ```Create```: Implement functionality to insert new data records into MySQL.
2. ```Read```: Retrieve and display data from MySQL.
3. ```Update```: Allow for updating existing data records in MySQL.
4. ```Delete```: Provide the ability to remove unwanted data entries from MySQL.

#### Step 4.2: Implement CRUD Operations with MongoDB
Develop PHP scripts to perform CRUD operations on the MongoDB database:
1. ```Create```:: Implement functionality to insert new data records into MongoDB.
2. ```Read```: Retrieve and display data from MongoDB.
3. ```Update```: Allow for updating existing data records in MongoDB.
4. ```Delete```: Provide the ability to remove unwanted data entries from MongoDB.

CRUD operations provide a standardized and comprehensive set of functionalities for managing data in applications and databases. They form the foundation for data manipulation and maintenance, enabling developers to create, retrieve, update, and delete data as needed to ensure data integrity and flexibility in their systems.


### Step 5: Preprocessing and Analysis Data
It has been found that all of the data does not consist of any missing value and we have applied statistical analysis and visualized the data to gain insight into it. 

### Step 6: Develop Web Application
- Utilize PHP to create a user-friendly web interface for the Customer Segmentation System.
- Design an intuitive layout and navigation for easy interaction.
- Implement functionality to display customer data, perform searches, and visualize segmentation results using charts, graphs, or tables.
- Ensure the web interface integrates with both MongoDB and MySQL, supporting CRUD operations for efficient data management.

## Web Interface
- Create Account
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/901d87e6-1088-44ca-abae-3d9fab9c8ae8">

- Login
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/5a108d0a-e75e-44e3-b9fe-91978ef02141">

- Dashboard 1
<img width="944" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/aafb8d44-80a6-4d34-ad25-0a1d90fa3fdd">

- Dashboard 2
<img width="944" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/88e069b4-315b-4f22-accc-be4aced10026">

- Create Ramen
<img width="945" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/a0d135eb-5b7b-49a8-bbc4-947aeb815b2c">

- Read Ramen List
<img width="944" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/921bc7ba-275d-4d9f-9be5-612a46723f4f">

- Update Ramen
<img width="944" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/7242dab0-f99b-42a0-be14-f689a3bb03c4">

- Delete Ramen
<img width="946" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/1eb9d3a3-e61a-4e61-a333-141be2ca001a">

- Search Ramen
<img width="946" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/5fc496fd-8fe6-4079-9e2b-d6d069dabfef">


## Testing and Validation

1. Create Operation Testing

  Insert ramen's details and click "Save" button
  <img width="947" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/e0e62320-304e-4a68-89ed-745f8d2ce2aa">

  Check the data in MongoDB and Mysql
  - Mysql
  <img width="398" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/06558dcf-6711-4cd6-8481-f2f44c0d258c">
  
  - MongoDB
  <img width="743" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/0b706df7-a3ca-4abd-b25e-0a0b8ec16638">

2. View Operation Testing
 <img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/26a2da82-a67c-47c6-a1f9-8ebcc4b124f3">
 
3. Update Operation Testing

 Update ramen's details and click "Save" button
  <img width="946" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/93de3e5a-a442-44ff-93cd-c06f4dca4b5c">
  
  Check the data in Mongodb and Mysql
  - Mysql
  <img width="396" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/d4ce266c-1ae3-4e2e-9672-1b66c57c7d20">
  
  - MongoBD
  <img width="742" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/c3c959fe-ca34-4405-8329-05653bf251e4">

4. Delete Operation Testing

  Delete ramen details and click "OK" button
  <img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/aa124c96-b4a4-4d01-a4b4-23a78f6553c1">

  Check the data in Mongodb and Mysql
  - Mysql
  <img width="394" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/40409d9d-ce3a-447f-b265-dfbf6cb2560d">

  - MongoDB
  <img width="741" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120614501/408832e6-28fe-43c3-bbe5-2b451bc225a4">


## Conclusion
The Ramen Rating System project aimed to develop a web-based application that utilizes the Ramen Ratings Dataset from Kaggle. The system allows users to perform various operations such as creating, reading, updating, and deleting ramen records, as well as conducting data analysis and visualization. Here are the key findings, challenges faced, and potential improvements:

Key Findings:
- The Ramen Ratings Dataset provides comprehensive information about various ramen products, including brand, variety, style, country of origin, and consumer ratings.
  
- Statistical analysis and data visualization revealed insights into the dataset, allowing users to explore the preferences and trends of ramen enthusiasts.
  
- The web interface provides a user-friendly platform for managing ramen records and conducting searches, with features for creating, updating, and deleting records efficiently.

  
Challenges Faced:
- Integrating and connecting the MySQL and MongoDB databases posed some challenges due to differences in their data structures and query languages.
  
- Preprocessing and analyzing the dataset required careful handling of missing values, data inconsistencies, and outliers.
  
- Developing an intuitive and visually appealing web interface that accommodates different user requirements and functionalities presented design and implementation challenges.

  
Potential Improvements:
- Enhance the user interface by incorporating additional features such as sorting, filtering, and advanced search options to provide more flexibility in data exploration.
  
- Implement user authentication and access control to ensure data privacy and security.
  
- Incorporate machine learning algorithms to build recommendation systems or predictive models based on user preferences and ratings.
  
- Extend the dataset by integrating more external sources or allowing user-generated reviews to expand the range and diversity of ramen products.

  
In conclusion, the Ramen Rating System project successfully developed a web-based application that leverages the Ramen Ratings Dataset to provide users with a platform for managing and analyzing ramen data. The system offers valuable insights into ramen preferences and trends, while also highlighting the challenges faced during development and suggesting potential improvements for future iterations.

## References

1. [MongoDB and PHP](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/mongophp.md) <br>
2. [Creating, Reading, Updating, and Deleting MongoDB Documents with PHP](https://www.youtube.com/watch?v=zogIgFz3NWg) <br>
3. [Dataset from Kaggle - Ramen Ratings](https://www.kaggle.com/datasets/residentmario/ramen-ratings) <br>
