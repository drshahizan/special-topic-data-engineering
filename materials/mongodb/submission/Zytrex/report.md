<h1 align='center'>TV Shows Recommendation System</h1>


- [Introduction](#introduction)
- [System Design](#system-design)
  - [Data Requirements](#data-requirements)
  - [Functionalities](#functionalities)
- [Implementation](#implementation)
  - [1. Download All Required Software](#1-download-all-required-software)
  - [2. Connect to database](#2-connect-to-database)
- [Web Interface](#web-interface)
- [Conclusion](#conclusion)


## Introduction
The Car Recommendation System project aims to provide personalized car recommendations to users based on their preferences and requirements. The system utilizes PHP as the primary programming language for the backend, MySQL for relational database management, and MongoDB for storing and retrieving unstructured data efficiently. The combination of these technologies allows for a comprehensive and flexible solution to cater to the diverse needs of car enthusiasts.


## System Design

### Data Requirements
 The data requirements for this system are listed as follows:
  <table>
  <tr>
    <th>Field</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>c_id</td>
    <td>A identifier for each car</td>
  </tr>
  <tr>
    <td>c_reg</td>
    <td>Car registration number</td>
  </tr>
  <tr>
    <td>c_model</td>
    <td>Car model</td>
  </tr>
  <tr>
    <td>c_year</td>
    <td>Car manufacturing year</td>
  </tr>
  <tr>
    <td>c_price</td>
    <td>Car rental price</td>
  </tr>
  <tr>
    <td>c_type</td>
    <td>Car Type</td>
  </tr>
  <tr>
    <td>c_filename</td>
    <td>Car filename for car image</td>
  </tr>
  <tr>
    <td>c_rating</td>
    <td>Rating of the car</td>
  </tr>
</table>

### Functionalities
A car recommendation system aims to assist users in finding the most suitable car based on their preferences, needs, and constraints. The system offers the user list of recommended car that can be choose based on the rating. The higher rating would be placed at the top 3 of recommendation car list.



## Implementation

### 1. Download All Required Software

1.1 Install [XAMPP](https://www.apachefriends.org/download.html) <br>
1.2 Install [Composer](https://getcomposer.org/download/) <br>
1.3 Install [MongoDB](https://www.mongodb.com/try/download/community) <br>
1.4 Install [MongoDB PHP Driver](https://pecl.php.net/package/mongodb) <br>

### 2. Create MySQL Database
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/a42d2f68-760b-4a17-aa6b-fc5b81276c70)

### 3. Connect to Database
- Create a new php file named dbconnect.php to connect to both MySQL and MongoDB database.
- ```
  <?php 
  require 'vendor/autoload.php';
  //Set Db parameters
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_car";
  //Create DB Connection
  $con = mysqli_connect($servername, $username, $password, $dbname);
  //Check DB Connection
  
  $client = new MongoDB\Client;
  $db_car = $client->db_car;
  
  ?>
  ```

  ### 4. Implement CRUD Operations
CRUD stands for Create, Read, Update, and Delete, which are the basic operations or actions performed on data in a persistent storage system, such as a database. CRUD represents the four fundamental functions that can be applied to data:
1. Create (C): Create a new data of car into the database which consist of car details such as car id, model, type, year of manufacturing, price, image and rating.
2. Read (R): Retrieve or read existing data from the database.
3. Update (U): Modify or update existing data in the database.
4. Delete (D): Remove or delete existing data from the database.

## Web Interface
- Landing Page
  
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/df27792a-9b34-4977-94b2-9b7dcbc69981)


- Car List Page (Recommended Car)
  
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/576a53b0-319f-4112-9ad3-3f5d60122d3f)


- Car List Page
  
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/b280c41d-4e72-4336-9c80-afbd3d07541a)

- Add Car Page
  
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/6132d9d1-73fc-4096-a618-5df69fd0f14c)
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/a472a0cb-5f9b-49cd-bee8-96fe553b9f1c)


- New Car Added into Car List Page
  
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/2849240e-69f6-4efe-8571-1c911c7caa8a)

- Edit Car Page
  
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/d1191bdd-4802-49de-a320-02b89c0bc419)
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/a72f321b-c8df-420a-a48e-64912bfaf3e5)

- Edited Car has been added into Recommended Car List
  
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/17699ec9-7da1-4f8f-aa94-5377959d9a46)

  ### 5. Testing and Validation
- `MySQL Database`:
- ![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/af5ffbb7-678a-4d5c-9aa1-2e55338aaa11)
- `MongoDB Database`:
- ![image](https://github.com/drshahizan/special-topic-data-engineering/assets/92329710/1cfe14d2-bdd6-4105-9439-80d3743ec021)



## Conclusion

It's important to note that the specific functionalities and features of a car recommendation system can vary depending on the project requirements, target audience, and available data sources. The above list provides a general overview of common functionalities found in such systems, but additional features can be added to enhance the user experience and meet specific project goals




