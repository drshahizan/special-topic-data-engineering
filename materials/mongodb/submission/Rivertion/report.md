# Movie Recommendation System
- [Introduction](#introduction)
- [System Design](#system-design)
- [Implementation](#implementation)
- [Web Interface](#web-interface)
- [Testing and Validation](#testing-and-validation)
- [Conclusion](#conclusion)
- [References](#references)

## Introduction

Movie Recom is a movie recommendation system which is built using PHP, MySQL, and MongoDB to provide personalized movie recommendations to users. This system is designed to analyze user preferences, movie data, and user interactions to generate accurate and relevant movie suggestions.

The movie recommendation system combines the strengths of PHP, MySQL, and MongoDB to deliver personalized movie suggestions to users. The system employs advanced algorithms, such as collaborative filtering, content-based filtering, or hybrid approaches, to analyze user preferences and movie attributes. These algorithms leverage the stored data in MySQL and MongoDB to generate recommendations based on similarities, user preferences, and past interactions.

The user interface of the movie recommendation system allows users to add movies, edit, delete and view. PHP handles the presentation layer, rendering dynamic web pages, and interacting with the backend components. Through intuitive user interfaces, users can provide feedback, explore movie details, and receive recommendations tailored to their interests.

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
    <td>A unique identifier for each movie</td>
  </tr>
  <tr>
    <td>Title</td>
    <td>The title attribute represents the name or title of the movie</td>
  </tr>
    <tr>
    <td>Genre</td>
    <td>The genre attribute categorizes the movie into a specific genre or genres</td>
  </tr>
    <tr>
    <td>Director</td>
    <td>The director attribute identifies the individual or individuals responsible for directing the movie</td>
  </tr>
  <tr>
    <td>Producer</td>
    <td>The producer attribute denotes the individual or individuals who oversee the financial and organizational aspects of the movie's production</td>
  </tr>
    <tr>
    <td>Writer</td>
    <td>The writer attribute refers to the individual or individuals who have authored the screenplay or script for the movie</td>
  </tr>
    <tr>
    <td>Actor</td>
    <td>The actor attribute lists the actors or actresses who portray characters in the movie</td>
  </tr>
    <tr>
    <td>Description</td>
    <td>The description attribute provides a brief overview or synopsis of the movie</td>
  </tr>
    <tr>
    <td>Released Date</td>
    <td>The released date attribute indicates the date on which the movie was officially released or made available to the public</td>
  </tr>
</table>

### Functionalities

## Implementation

### Step 1: Install and Set Up Tools
1. Install Xampp, MongoDB and any developer tools such as Visual Studio Code.
2. Configure all tools on your server or local machine.

### Step 2: Create Database Schemas in MySQL
1. Open Xampp and click 'Start' for both Apache and MySQL.
2. Click 'Admin' beside MySQL.
<div align="center">
  <img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/xampp.png">
</div>
3. Create new database (add tables and attributes for each table).
<div align="center">
  <img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/msrps_db.png">
</div>

### Step 3: Connect to Database
1. ```Mysql```: Create a new PHP file to connect to Mysql.
   ```php
   <?php 
   
    class DBConnection{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'msrps_db';
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
    public function __destruct(){
        $this->conn->close();
    }
   }
   ?>
   ```

2. ```MongoDB```: Create a new PHP file to connect to mongodb.
     ```php
     <?php
     require 'vendor/autoload.php'; // Include the MongoDB PHP driver

     // Connect to MongoDB
     $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

     // Select a database
     $database = $mongoClient->selectDatabase('msrps_db');
     ?>
     ```
   
### Step 4: Implement CRUD Operations

CRUD is an acronym that stands for Create, Read, Update, and Delete. It refers to the basic operations or actions that can be performed on data in a database or system. These operations are fundamental to managing and manipulating data and are commonly used in software development and database management.

<table>
  <tr>
    <td>Create (C)</td>
    <td>The Create operation involves adding new data or records to a database. For example, in a movie database, creating a new movie record would involve providing details like title, genre, director, etc., and inserting it into the database as a new entry.</td>
  </tr>
    <tr>
    <td>Read (R)</td>
    <td>The Read operation involves retrieving or fetching data from a database. For example, reading data from a movie database would involve retrieving information about a particular movie or displaying a list of all movies available.</td>
  </tr>
    <tr>
    <td>Update (U)</td>
    <td>The Update operation involves modifying or updating existing data in a database. For example, updating a movie record might involve changing the director or modifying the release date of the movie. The update operation typically involves selecting the record to be updated, making the necessary changes, and saving the updated data back to the database.</td>
  </tr>
    <tr>
    <td>Delete (D)</td>
    <td>The Delete operation involves removing or deleting existing data from a database. For example, deleting a movie record would involve selecting the movie to be deleted and removing it from the database. The delete operation permanently removes the data, and it's essential to exercise caution when performing deletion operations.</td>
  </tr>
</table>

CRUD operations provide a standardized and comprehensive set of functionalities for managing data in applications and databases. They form the foundation for data manipulation and maintenance, enabling developers to create, retrieve, update, and delete data as needed to ensure data integrity and flexibility in their systems.

### Step 6: Preprocessing and Analysis Data
It has been found that all of the data does not consist of any missing value and we have applied statistical analysis and visualized the data to gain insight into it. 

### Step 7: Develop Web Application
1. Design the user interface for movie recommendation system. Create wireframes or mockups to visualize the layout, navigation, and functionality of the system.
2. Implement the user interface using HTML, CSS, and JavaScript. Use PHP to embed dynamic content and handle user interactions.
3. Implement the server-side functionality of this movie recommendation system using PHP. Write PHP code to handle user registration, login, user profile management, movie search, rating submission, and recommendation generation.
4. Connect the PHP code to the MySQL database. Implement functions or classes to handle database operations, such as inserting new movies, retrieving movie details, updating user ratings, etc.

## Web Interface

  - Homepage</br>
  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/homepage.png"></div>
  
  - Login</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/login.png"></div>
  
  - Dashboard</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/dashboard.png"></div>
  
  - Movie List</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/movie.png"></div>
  
  - Movie List (after click Action)</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/movie2.png"></div>
  
  - Add Movie</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/add.png"></div>
  
  - Edit Movie</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/edit.png"></div>

## Testing and Validation

  - Add New Movie</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/edit.png"></div>
  
  - View Added Movie</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/view2.png"></br>
  <img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/view3.png"></br>
  <img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/view4.png"></div>
  
  - Edit Added Movie</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/edit.png"></div>
  
  - Delete Added Movie</br>

  <div align="center"><img width="500" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/Rivertion/img/delete.png"></div>

## Conclusion


## References
