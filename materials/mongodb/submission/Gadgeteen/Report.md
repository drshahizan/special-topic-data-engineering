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
```php
//SQL Insert (CREATE) booking into database
$sql= "INSERT INTO sales (City, Customer, Gender, Category, Total, Date, Gross_income, Rating) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$sth = $con->prepare($sql);
$sth->bind_param('ssssdsdd', $city, $customer, $gender, $category, $total, $sdate, $income, $rating);
$sth->execute();
```

6.2 ```Read```: Retrieve and display data from MySQL.
```php
$sql = "SELECT * FROM sales";
$result = mysqli_query($con, $sql);
```

6.3 ```Update```: Allow for updating existing data records in MySQL.
```php
$sql= "UPDATE sales
  SET City=?, Customer=?, Gender=?, Category=?, Total=?, Date=?, Gross_income=?, Rating=?
  WHERE Sales_id = ?";

$sth = $con->prepare($sql);
$sth->bind_param('ssssdsddi', $city, $customer, $gender, $category, $total, $sdate, $income, $rating, $id);
$sth->execute();
```

6.4 ```Delete```: Provide the ability to remove unwanted data entries from MySQL.
```php
$sql = "DELETE FROM sales WHERE Sales_id = '$id'";
$result = mysqli_query($con, $sql);
```

### 7: Implement CRUD Operations with MongoDB
Develop PHP scripts to perform CRUD operations on the MongoDB database:

7.1 ```Create```:: Implement functionality to insert new data records into MongoDB.
```php
$insertOneResult = $collection->insertOne([  
  'Sales_id' => int($last_id),
  'City' => $city,
  'Customer' => $customer,  
  'Gender' => $gender,  
  'Category' => $category,  
  'Total' => (double)$total,  
  'Date' => new MongoDB\BSON\UTCDatetime(($date->getTimestamp())*1000),  
  'Gross_income' => (double)$income,  
  'Rating' => (double)$rating,  
]);
```

7.2 ```Read```: Retrieve and display data from MongoDB.
```php
$sale = $collection->findOne(['Sales_id' => (int)$id]);  
$date = $sale->Date->toDateTime()->format('Y-m-d');
```

7.3 ```Update```: Allow for updating existing data records in MongoDB.
```php
$collection->updateOne(  
  ['Sales_id' => (int)$id],  
  ['$set' => [
    'City' => $city,
    'Customer' => $customer,  
    'Gender' => $gender,  
    'Category' => $category,  
    'Total' => (double)$total,  
    'Date' => new MongoDB\BSON\UTCDatetime(($date->getTimestamp())*1000),  
    'Gross_income' => (double)$income,  
    'Rating' => (double)$rating,  
    ]]  
);  
```

7.4 ```Delete```: Provide the ability to remove unwanted data entries from MongoDB.
```php
$collection->deleteOne(['Sales_id' => (int)$id]);
```

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

- Search Sales
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

1. Create Operation Testing

Add new sales.

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/eddc753a-542a-448a-8138-b6efe987c0bc)

Check the data in MySQL and MongoDB

- MySQL
  
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/d4f020e0-3da9-496a-af05-5fed26ba281d)

- MongoDB
  
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/9b54c911-5b3b-409f-a61d-b680102d6451)


2. Edit Operation Testing

Edit sales data.
![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/3eac1373-5db5-4ee9-99b5-157dd2170531)


Check the data in MySQL and MongoDB

- MySQL

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/fb1595b2-f88a-47c9-9cdf-52d91e4ab9c4)

- MongoDB

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/fd710810-da63-4abe-8811-c904065b5867)

3. View Operation Testing

View sales data.

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/bfcca9ae-0659-4eaa-8b0b-b96aec61660e)

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/315bd00d-9c02-460a-88c5-8758626f8715)

4. Delete Operation Testing

Delete Sales Data.

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/d79bfc8f-ff7d-4cf3-8a12-1a8fe7f7ea77)

Check the data in MySQL and MongoDB

- MySQL

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/3bf2cb82-e21c-4abc-88b7-80c804568368)

- MongoDB

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/95162273/066cf87a-5365-49ab-8859-cc4b329c8684)


## Conclusion

In summary, the Sales Analysis system developed using MongoDB, MySQL, and PHP has demonstrated its value as a powerful tool for businesses aiming to gain insights into customer patterns. The system effectively accomplished its objectives of collecting and storing customer data, performing CRUD operations, preprocessing and analyzing data. By successfully gathering data from various sources, it enabled comprehensive analysis of sales trend and customer behavior.

Key findings :
- The analysis uncovered significant findings regarding the sales data. The total sales amount was determined to be RM 12,310, accompanied by a gross income of RM 2,310. Additionally, the average rating for the sales was computed to be approximately 6.6, indicating a generally positive response from customers.

- Upon examining the Pie Chart, it becomes evident that there is a larger proportion of female customers compared to males. Furthermore, the analysis of sales by category revealed that the Health and Beauty category exhibited the highest sales, suggesting its popularity among customers.

- Examining the line chart, it becomes apparent that there was a peak in sales during the month of July. This spike could potentially indicate the success of the sales and marketing strategies employed during that period, resulting in increased revenue.

- These findings provide valuable insights into the performance of the sales, customer preferences, and the impact of marketing efforts. Businesses can leverage this information to refine their strategies, cater to customer preferences, and capitalize on successful sales periods to optimize revenue generation.

Challenges:

- Throughout the development process, several challenges were encountered. Implementing suitable data science techniques and algorithms required careful consideration and expertise. Ensuring synchronization and data consistency between MongoDB and MySQL databases posed challenges during integration testing. Additionally, optimizing performance was crucial to handle large data volumes and maintain system responsiveness.

Potential Improvement:

- To further enhance the Sales Analysis system, several potential improvements can be considered. Ongoing performance optimization efforts can improve scalability and efficiency. Advanced analysis techniques, such as incorporating machine learning algorithms, can provide deeper insights and enhance accuracy. Real-time data ingestion capabilities would enable timely analysis and decision-making. Expanding the range of visualization options would offer users more interactive and intuitive data representation.

Overall, the Sales Analysis system has proven to be a valuable asset for businesses, providing a solid foundation for data-driven decision-making and enhancing customer satisfaction. By addressing the identified challenges and implementing potential improvements, the system can continue to evolve and meet the growing needs of businesses in the dynamic field of sales analysis.


## References

1. [CRUD Operation using PHP & Mongodb](https://www.javatpoint.com/crud-operation-using-php-and-mongodb)

2. [Installing MongoDB PHP Driver for XAMPP Server on Windows - Step-by-Step Tutorial](https://www.youtube.com/watch?v=KJV8iZ_9gYg)
