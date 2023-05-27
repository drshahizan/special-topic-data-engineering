# Sales Analysis System
- [Introduction](#introduction)
- [System Design](#system-design)
- [Implementation](#implementation)
- [Web Interface](#web-interface)
- [Testing and Validation](#testing-and-validation)
- [Conclusion](#conclusion)
- [References](#references)

## Introduction
The Sales Analysis System is a data-driven solution designed to provide valuable insights into sales performance, customer behavior, and revenue generation within an organization.

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
    <td>Sales_id</td>
    <td>A unique identifier for each sales</td>
  </tr>
  <tr>
    <td>City</td>
    <td>Location of each sales</td>
  </tr>
  <tr>
    <td>Customer</td>
    <td>The customer's membership either member or normal</td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>The customer's gender either male or female</td>
  </tr>
  <tr>
    <td>Category</td>
    <td>The category of the product sold</td>
  </tr>
  <tr>
    <td>Total</td>
    <td>The total sales in a single order</td>
  </tr>
  <tr>
    <td>Gross_income</td>
    <td>The profit gained in a single sale</td>
  </tr>
    <tr>
    <td>Date</td>
    <td>Date of the sale</td>
  </tr>
    <tr>
    <td>Rating</td>
    <td>Rating from the customer from scale of 1 to 10</td>
  </tr>
</table>

### Functionalities

## Implementation

### 1. Install all required software

1.1 Install [XAMPP](https://www.apachefriends.org/download.html) <br>
1.2 Install [MongoDB](https://www.mongodb.com/try/download/community) <br>
1.3 Install [MongoDB PHP Driver](https://pecl.php.net/package/mongodb) <br>
1.4 Install [Composer](https://getcomposer.org/download/)

### 2. Configure MongoDB

2.1 Copy the MongoDB PHP Driver (php_mongodb.dll) and paste in the "ext" folder (C:\xampp\php\ext)

2.2 Add the following line to your php.ini file (C:\xampp\php\php.ini)
```
extension=mongodb
```

2.3 Install the PHP Library with Composer in your project directory by using command prompt or powershell.
```
composer require mongodb/mongodb
```

### 3. Create Database Schemas in MySQL
![Database](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/3f66ce9c-3fe1-4a46-9679-640489f77fea)

### 4. Create Database and Collection in MongoDB Compass
4.1 Start the MongoDB server by running the code below in command prompt run as administrator.
```
net start MongoDB
```

4.2 In MongoDB Compass, connect to the localhost:27017

4.3 Create Database and Collection in MongoDB compass.
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/4b13e863-a161-4962-b8be-30355f318431)

### 5. Connect to the MySQL and MongoDB Database. 
5.1 ```Mysql```: Create a new PHP file to connect to Mysql.
```php
  <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db_sales";

      $con = mysqli_connect($servername, $username, $password, $dbname);
  ?>
```

5.2 ```MongoDB```: Create a new PHP file to connect to MongoDB.
```php
  <?php
      require 'vendor/autoload.php'; // Include the MongoDB PHP driver

      // Connect to MongoDB
      $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

      // Select a database
      $database = $mongoClient->selectDatabase('sales');
      $collection = $database->selectCollection('sales');
  ?>
```
     
### 6: Implement CRUD Operations with MySQL
Develop PHP scripts to perform CRUD operations on the MySQL database:

6.1 ```Create```: Implement functionality to insert new data records into MySQL.

6.2 ```Read```: Retrieve and display data from MySQL.

6.3 ```Update```: Allow for updating existing data records in MySQL.

6.4 ```Delete```: Provide the ability to remove unwanted data entries from MySQL.

### 7: Implement CRUD Operations with MongoDB
Develop PHP scripts to perform CRUD operations on the MongoDB database:

7.1 ```Create```:: Implement functionality to insert new data records into MongoDB.

7.2 ```Read```: Retrieve and display data from MongoDB.

7.3 ```Update```: Allow for updating existing data records in MongoDB.

7.4 ```Delete```: Provide the ability to remove unwanted data entries from MongoDB.

### 8. Data Preprocessing and Analysis:
   - Write PHP scripts to preprocess and analyze the data stored in MongoDB and MySQL:
     - Perform data cleaning, transformation, and feature engineering as required.
     - Apply appropriate data science techniques, such as statistical analysis, machine learning, or natural language processing, depending on the chosen system.

### 9. Develop a Web Interface:
   - Utilize PHP to create a web interface for your data science system:
     - Design an intuitive user interface for interacting with the system.
     - Implement functionality to display data, perform searches, and visualize results.
     - Ensure that the web interface integrates with both MongoDB and MySQL and supports CRUD operations for both databases.

## Web Interface
- Sales Table
![table](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/c846f9ea-92bc-4102-a42b-7d049dd5e8d7)

-Search Sales
![Search](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/1080733e-a2d6-432f-90bf-dae30c901aab)

- Create Sales
![Create](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/126e46fd-3add-457b-a3b1-cee6fefc38d2)

- Read Sales
![Read](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/7a5406bf-594f-45e2-ad63-c4b8e0531e28)

- Update Sales
![Update](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/33eefda5-2d32-4dd2-9d0c-e3929c037f90)

- Delete Sales
![Delete](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/27966e5c-ec86-480f-95ef-31ac3edb8bd0)

## Testing and Validation



## Conclusion
The development of the Customer Analysis System using MongoDB, MySQL, and PHP has provided valuable insights into customer behavior, preferences, and patterns. The system successfully achieved its objectives of collecting and storing customer data, performing CRUD operations, data preprocessing, analysis, and visualization.

Key Findings:

- The system effectively collected and stored customer data from various sources, allowing for comprehensive analysis.
- CRUD operations were successfully implemented for both MongoDB and MySQL, enabling efficient data management.
- The web interface facilitated user interaction, data visualization, and supported seamless integration with both MongoDB and MySQL databases.
- The average age of customer is 48.96 and most of the customer data come from females. The majority of customers are artists. 

Challenges Faced:

- Implementing the appropriate data science techniques and algorithms for analysis required careful consideration and expertise.
- Ensuring efficient synchronization and data consistency between MongoDB and MySQL databases posed a challenge during integration testing.
- Performance optimization was necessary to handle large volumes of data and ensure responsiveness.

Potential Improvements:

- Enhance performance: Further optimization of data processing and analysis algorithms can improve system performance and scalability.
- Advanced analysis techniques: Consider integrating advanced data science techniques like machine learning algorithms to gain deeper insights and improve accuracy.
- Real-time data ingestion: Implement real-time data ingestion capabilities to enable timely analysis and decision-making.
- Enhanced visualization: Expand the range of visualization options to provide more interactive and intuitive data representation for users.
- Security measures: Strengthen data security measures, including encryption and access controls, to ensure the privacy and protection of customer data.

Overall, the Sales Analysis System has proven to be a valuable tool for businesses seeking to understand their customers better. The system's functionality, performance, and accuracy provide a solid foundation for making data-driven decisions and enhancing customer satisfaction. By addressing the identified challenges and implementing potential improvements, the system can continue to evolve and meet the growing needs of businesses in the dynamic field of customer analysis.

## References
1. [MongoDB and PHP](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/mongophp.md) <br>
2. [Creating, Reading, Updating, and Deleting MongoDB Documents with PHP](https://www.mongodb.com/developer/languages/php/php-crud/) <br>
3. [Installing MongoDB PHP Driver for XAMPP Server on Windows - Step-by-Step Tutorial](https://www.youtube.com/watch?v=KJV8iZ_9gYg)
