# Customer Analysis System
- [Introduction](#introduction)
- [System Design](#system-design)
- [Implementation](#implementation)
- [Web Interface](#web-interface)
- [Testing and Validation](#testing-and-validation)
- [Conclusion](#conclusion)
- [References](#references)

## Introduction
The Customer Analysis System is a data science system designed to analyze customer data and provide valuable insights into customer behavior, preferences, and patterns. By utilizing MongoDB, MySQL, and PHP, this system aims to enable businesses to better understand their customers, make data-driven decisions, and enhance customer satisfaction.

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
    <td>ID</td>
    <td>A unique identifier for each customer</td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>The customer's gender either male or female</td>
  </tr>
    <tr>
    <td>Age</td>
    <td>The customer's age</td>
  </tr>
    <tr>
    <td>Annual Income</td>
    <td>The total amount of money the customer's earn in one year</td>
  </tr>
  <tr>
    <td>Spending Score</td>
    <td>The score (out of 100) given to a customer, based on the money spent and the behavior of the customer</td>
  </tr>
    <tr>
    <td>Profession</td>
    <td>The customer's occupation</td>
  </tr>
    <tr>
    <td>Work Experience</td>
    <td>The total of work customer's has done before</td>
  </tr>
</table>

### Functionalities

## Implementation
### Step 1: Set Up Development Environment
1. Before starting to implement the system, make sure to install all required software.
  - [XAMPP](https://www.apachefriends.org/download.html)
  - [MongoDB](https://www.mongodb.com/try/download/community)
2. Configure MongoDB on your server or local machine. Make sure the MongoDB server is running and accessible.
3. Direct to your project directory and running the following command to install MongoDB PHP driver.
   ```
   composer require mongodb/mongodb
   ```
### Step 2: Create Database Schemas in MySQL
1. Create a database and table in mysql to store customer data. 

<img width="500" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/cb28dfe3-5b9a-47b1-965b-acf383399730">

### Step 3: Connect to Database
1. ```Mysql```: Create a new PHP file to connect to Mysql.
   ```php
    <?php
    //Set db parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "customer";

    //Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);
    ?>
    ```

2. ```MongoDB```: Create a new PHP file to connect to mongodb.
     ```php
     <?php
     require 'vendor/autoload.php'; // Include the MongoDB PHP driver

     // Connect to MongoDB
     $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

     // Select a database
     $database = $mongoClient->selectDatabase('your_database_name');
     ?>
     ```

   Replace `'your_database_name'` with the actual name of your MongoDB database.
   
### Step 4: Implement CRUD Operations with MySQL
Develop PHP scripts to perform CRUD operations on the MySQL database:
1. ```Create```: Implement functionality to insert new data records into MySQL.
2. ```Read```: Retrieve and display data from MySQL.
3. ```Update```: Allow for updating existing data records in MySQL.
4. ```Delete```: Provide the ability to remove unwanted data entries from MySQL.

### Step 5: Implement CRUD Operations with MongoDB
Develop PHP scripts to perform CRUD operations on the MongoDB database:
1. ```Create```:: Implement functionality to insert new data records into MongoDB.
2. ```Read```: Retrieve and display data from MongoDB.
3. ```Update```: Allow for updating existing data records in MongoDB.
4. ```Delete```: Provide the ability to remove unwanted data entries from MongoDB.

### Step 6: Preprocessing and Analysis Data
It has been found that all of the data does not consist of any missing value and we have applied statistical analysis and visualized the data to gain insight into it. 

### Step 7: Develop Web Application
- Utilize PHP to create a user-friendly web interface for the Customer Segmentation System.
- Design an intuitive layout and navigation for easy interaction.
- Implement functionality to display customer data, perform searches, and visualize segmentation results using charts, graphs, or tables.
- Ensure the web interface integrates with both MongoDB and MySQL, supporting CRUD operations for efficient data management.

## Web Interface
- Login
<img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/c43812de-13b4-4c0d-9bdf-7bc06d0591ad">

- Dashboard
<img width="944" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/ebe3f629-a865-4f6a-9ec3-ffd3a9ddb373">

- Add Customer
<img width="945" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/2712df11-acb5-4137-a4de-9737554a28cf">

- Read Customer List
<img width="944" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/f2662203-01e6-4436-b66e-a9b0722dfbeb">

- Update Customer
<img width="944" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/1c77076f-4eba-4926-979e-982d15b57540">

- Delete Customer
<img width="946" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/a59e222e-c88d-4a07-b910-8699b5a9ef5a">

- Search Customer
<img width="946" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/3dae06b5-c004-4309-b205-ea07985fdeb1">

## Testing and Validation
1. Create Operation Testing

  Insert customer information and click "Add Customer" button
  <img width="947" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/f246a82f-efa3-4f58-9c22-392744db775b">

  Check the data in MongoDB and Mysql
  - Mysql
  <img width="398" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/6749885c-515a-46b6-994e-57031a198cb2">
  
  - MongoDB
  <img width="743" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/fdd3f54f-2f86-4867-8a51-8740e3fe1ae0">

2. View Operation Testing
 <img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/27585e60-33cc-4f9c-a621-0e66d3f6ce3d">
 
3. Update Operation Testing

  Update customer information and click "Update Customer" button
  <img width="946" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/d782cb9e-5832-4669-9afb-da4827cd7b15">
  
  Check the data in Mongodb and Mysql
  - Mysql
  <img width="396" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/d941b13b-56aa-45e6-91fe-f10e692367b7">
  
  - MongoBD
  <img width="742" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/56dfdea0-8d32-4f4c-898a-a24263a32785">

4. Delete Operation Testing

  Delete customer information and click "OK" button
  <img width="960" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/58558695-1928-44bc-b598-8a73d444af2f">

  Check the data in Mongodb and Mysql
  - Mysql
  <img width="394" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/ef2dabe5-4ec5-4bc6-bbcc-fd94221ca034">

  - MongoDB
  <img width="741" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120556342/90b1e35c-1c3d-478e-9585-654408dd40b9">


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

Overall, the Customer Analysis System has proven to be a valuable tool for businesses seeking to understand their customers better. The system's functionality, performance, and accuracy provide a solid foundation for making data-driven decisions and enhancing customer satisfaction. By addressing the identified challenges and implementing potential improvements, the system can continue to evolve and meet the growing needs of businesses in the dynamic field of customer analysis.

## References
1. [MongoDB and PHP](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/mongophp.md) <br>
2. [Creating, Reading, Updating, and Deleting MongoDB Documents with PHP](https://www.mongodb.com/developer/languages/php/php-crud/) <br>
3. [Installing MongoDB PHP Driver for XAMPP Server on Windows - Step-by-Step Tutorial](https://www.youtube.com/watch?v=KJV8iZ_9gYg)
