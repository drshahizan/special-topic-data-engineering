<h1 align='center'>Book Rating System</h1>
<div align="center"><img src="https://programmerblog.net/wp-content/uploads/2017/02/php-mongodb-tutorial.png" height="450"></div>

<br />

## Introduction: 

In today's digital age, book rating system can play a role in shaping readers' choices, influencing book sales, and contributing to the overall book ecosystem. Our group is excited to embark on a collaborative assignment to develop a book rating system using MongoDB as the database and PHP as the backend scripting language. Leveraging the powerful capabilities of Visual Studio Code, we aim to create a robust and user-friendly platform that streamlines the book rating with readers satisfaction.

The primary objective of our assignment is to provide a standardized and accessible way for readers to evaluate and compare books. By integrating MongoDB as the database and PHP for backend development, we will leverage the flexibility, scalability, and real-time data handling capabilities of these technologies. Our goal is to create a reliable and efficient platform that collect books rating with different reader's perspective and empowers authors to provide better ideas and improve their writing skills.

## System Design: 
*Describe the system architecture, data requirements, and functionalities.*

### Data Requirements

The data requirements include storing and managing books data. Some of the essential data fields are as follows:

<div align="center">
  
| Field               | Description                                                  |
|---------------------|--------------------------------------------------------------|
| User ID             | A unique identifier for each user.                           |
| Name                | The user's name.                                             |
| Email               | The user's email address.                                    |
| Image               | The user's image (optional).                                 |
| Post ID             | A unique identifier for each book posted                     |
| Book Title          | The book's title.                                            |
| Book Image          | The book's image.                                            | 
| Review ID           | A unique identifier for each review.                         | 
| Rating              | User rating with at most 5 stars.                            | 
| Date                | Timestamp the review added.                                  | 
  
</div>

### Functionalities

The key functionalities of the system are as follows:
1. **Create user, book and reviews**: Users can register and login into the system, admin add books into the system and users add book reviews with ratings.
2. **Read book reviews**: Users can read the reviews added for specific books.
3. **Update reviews**: Users can update their particular reviews added.
4. **Delete reviews**: Users can delete their reviews.

## Implementation: 
*Explain the step-by-step process of developing the system, including the CRUD operations, data preprocessing, and analysis.*

### Required Software
Some of the software that need to be install are as follows:

1. [XAMPP](https://www.apachefriends.org/download.html): Open localhost and SQL database.<br>
2. [MongoDB](https://www.mongodb.com/try/download/community): Store data locally. <br>
3. [MongoDB PHP Driver](https://pecl.php.net/package/mongodb): Connect with mongodb database. Download driver that are compatible with your php version. <br>
4. [Composer](https://getcomposer.org/download/): Dependency management in PHP.

### Steps
1.  Open downloaded mongodb php driver and copy 'php_mongodb.dll' file into *C:\xampp\php\ext* folder.

2.  Add the following line in *C:\xampp\php\php.ini*
```
extension=php_mongodb.dll
```

3. Open directory in command prompt or powershell, then install the PHP Library with Composer.
```
composer require mongodb/mongodb
```

4. Open local host and phpmyadmin (MySQL) to create a database with table user, posts and reviews.
<p align="center">
  <img src="images/tb_user.png" alt="Centered Image">
  <img src="images/tb_posts.png" alt="Centered Image">
  <img src="images/tb_reviews.png" alt="Centered Image">
</p>

5. Create database and collection in mongodb compass of localhost: 27017.
<p align="center">
  <img src="images/mongodb1.png" alt="Centered Image">
</p>

6. Run MongoDB server by running the code below in command prompt run as administrator.
```
net start MongoDB
```

7. Create new file in your directory to connect to **MySQL**.
```
<?php 

   $db_name = 'mysql:host=localhost;dbname=reviews_db';
   $db_user_name = 'root';
   $db_user_pass = '';

   $conn = new PDO($db_name, $db_user_name, $db_user_pass);

   function create_unique_id(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $characters_lenght = strlen($characters);
      $random_string = '';
      for($i = 0; $i < 20; $i++){
         $random_string .= $characters[mt_rand(0, $characters_lenght - 1)];
      }
      return $random_string;
   }

   if(isset($_COOKIE['user_id'])){
      $user_id = $_COOKIE['user_id'];
   }else{
      $user_id = '';
   }

?>
```

8. Create new file in your directory to connect to **MongoDB**.
```
<?php
      require 'vendor/autoload.php'; // Include the MongoDB PHP driver

      // Connect to MongoDB
      $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

      // Select a database
      $database = $mongoClient->selectDatabase('db_book');
      $collection = $database->selectCollection('books');
  ?>
```

### CRUD operations
1. **Create user, posts and reviews**: tb_user need id, name, email, password and image (optional).tb_posts need id, title and image, tb_reviews need id, post id, user id, rating, title, description and date (timestamp).
2. **Read posts and reviews**: Any type of user can see both posts and reviews.
3. **Update posts and reviews**: Admin can update posts, all user can update reviews.
4. **Delete posts and reviews**: Admin can delete posts, all user can delete reviews.

## Web Interface: 
Discuss the design and functionality of the web interface, including screenshots if possible.

## Testing and Validation: 
Present the testing methodology, results, and evaluation of the system's performance.

## Conclusion: 
In conclusion, our group is enthusiastic about the opportunity to create a job portal using MongoDB and PHP in Visual Studio Code. By harnessing the strength of MongoDB's flexible document-based database and integrating it seamlessly with PHP, we can build a powerful and scalable system that meets the needs of both job seekers and employers. By delivering a high-quality job portal, our group aims to make a positive impact on the job market, helping job seekers find exciting opportunities and enabling employers to discover top talent efficiently. 

We are committed to implementing best practices, ensuring data security, and optimizing the performance of the system to provide a reliable and user-friendly experience.Through the integration of MongoDB and PHP in Visual Studio Code, our group is determined to develop a dynamic job portal that revolutionizes the way job seekers and employers connect. We are excited to embark on this assignment and create a valuable solution that meets the needs of the job market today and in the future.

Overall, our project has successfully addressed the challenges of building a dynamic job portal by leveraging the strength of MongoDB and PHP integration. By creating a user-friendly platform that connects job seekers with employers, we have made a significant impact on the job market, improving the overall efficiency of the job search and recruitment process. We are proud of our achievement and look forward to further enhancing the job portal based on user feedback and evolving market needs.

## References: 
Include a list of sources used in your research and development.

