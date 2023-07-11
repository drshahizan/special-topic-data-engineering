# Student Result Analysis System
- [Introduction](#introduction)
- [System Design](#system-design)
- [Implementation](#implementation)
- [Web Interface](#web-interface)
- [Testing and Validation](#testing-and-validation)
- [Conclusion](#conclusion)
- [References](#references)

## Introduction
Student result analysis system have greatly transformed the way assessments are conducted. Instead of traditional paper based methods, these systems offer efficient and easily accessible alternatives. This brings flexibility as exams can now be scheduled and completed remotely. Moreover, enhanced security measures including authentication mechanisms ensure that the results obtained are reliable. Although there may be challenges in terms of technical requirements and data security these can be overcome through careful planning, by utilizing student result analysis system, educators have access to analytics and personalized assessments that empower them in their teaching practices. At the same time, students and professionals benefit from the convenience and flexibility of self paced learning. By embracing the potential of student result analysis system we can envision a future where assessments seamlessly integrate into the digital landscape. This empowers individuals and organizations to thrive in an interconnected world.

In this assignment, we will be creating an student result analysis system. There are three user type in this system which are student, teacher and admin. The teacher able to create questionnaire, manage preboard exams ad view the students' result. While for the students, they can take their examinations and view their results. The admin has the full acces to the system. They can manage the questionnaire, preboard exams and the students' result. We will discussed in details about the system architecture, data requirements, functionalities, development steps, user interface and testing in this report.

## System Design
The student result analysis system is developed by using two different type of database which are MongoDB and MyPhpAdmin. As the student result analysis system is specifically created to replace the way of conducting the physical written examination, the user interface is developed to effectively present the information ensuring that users are provided with a clear overview of the questionnaire and students' results. The system consists of several components, such as data storage, data manipulation and processing and a web interface. Below is the diagram to illustrate the system design:

### System Architecture
<p align="center">
<img width="500" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/assets/120616141/b664674a-be31-487d-bcfe-d062665415ff">
</p>

### Data Requirements

The data requirements for the systems are as follows:
  <table>
  <tr>
    <th>Field</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Position</td>
    <td>Position on charts</td>
  </tr>
    <tr>
    <td>Track Name</td>
    <td>Title of song</td>
  </tr>
    <tr>
    <td>Artist</td>
    <td>Name of musician or group</td>
  </tr>
  <tr>
    <td>Streams</td>
    <td>Number of streams</td>
  </tr>
    <tr>
    <td>URL</td>
    <td>Website link to song</td>
  </tr>
    <tr>
    <td>Date</td>
    <td></td>
  </tr>
    <tr>
    <td>Region</td>
    <td>Country code</td>
  </tr>
</table>

The initial data is obtain from [here](https://www.kaggle.com/datasets/edumucelli/spotifys-worldwide-daily-song-ranking?resource=download).

### Functionalities

The key functionalities of the system are as follows:

#### Admin

The admin can manage the questionnaire and exams by adding questions, subject, multiple options, choosing difficulties, and attachment files. , examination, preboard examinations, and results. The admin also has the permission of managing the users in the system.

#### Teacher

The teacher can manage the questionnaire and exams by adding questions, subject, multiple options, choosing difficulties, and attachment files. , examination, preboard examinations, and results. The teacher can also manage the preboard exams and view the students' result.

#### Student

The student can take the examinations and view their own results.

## Implementation
### Step 1: Dowload necessary tools and software
1. Install all tools and software that are needed:
  - [XAMPP](https://www.apachefriends.org/download.html)
  - [MongoDB](https://www.mongodb.com/try/download/community)
  - [Composer](https://getcomposer.org/download/)
2. Make sure that the MongoDB is running and accessible.
3. In the command prompt, go to your project directory. Run the command to install the MongoDB PHP driver.
   ```
   composer require mongodb/mongodb
   ```
### Step 2: Create Database in MySQL
1. Create a database and table in mysql to store the song data. 

<img width="500" alt="image" src="">

### Step 3: Connect to Database
1. MySQL
   
   ```php
    <?php
    //Set db parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_song";

    //Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);
    ?>
    ```

2. MongoDB
   
     ```php
     <?php
     require 'vendor/autoload.php'; // Include the MongoDB PHP driver

     // Connect to MongoDB
     $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

     // Select a database
     $database = $mongoClient->selectDatabase('song');
     ?>
     ```
   
### Step 4: Implement CRUD Operations with MySQL
Develop PHP scripts to perform CRUD operations on the MySQL database:
1. ```Create```: Implement functionality to insert new data records into MySQL.
2. ```Read```: Retrieve and display data from MySQL.
3. ```Update```: Allow updating existing data records in MySQL.
4. ```Delete```: Provide the ability to remove unwanted data entries from MySQL.

### Step 5: Implement CRUD Operations with MongoDB
Develop PHP scripts to perform CRUD operations on the MongoDB database:
1. ```Create```:: Implement functionality to insert new data records into MongoDB.
2. ```Read```: Retrieve and display data from MongoDB.
3. ```Update```: Allow for updating existing data records in MongoDB.
4. ```Delete```: Provide the ability to remove unwanted data entries from MongoDB.

### Step 6: Preprocessing and Analysis of Data
It has been found that all of the data does not consist of any missing value, and we have applied statistical analysis and visualized the data to gain insight into it. 

### Step 7: Develop a Web Application


## Web Interface
- Landing page
<img  src="./Images/1.jpg"></img><br>

- Login Page
<img  src="./Images/Screenshot_1.jpg"></img><br>

### Admin
- Home Page (Student results)
<img  src="./Images/Screenshot_2.jpg"></img><br>

- Print Result
<img  src="./Images/Screenshot_3.jpg"></img><br>

- Question Bank
<img  src="./Images/Screenshot_4.jpg"></img><br>

- Create Question
<img  src="./Images/Screenshot_7.jpg"></img><br>

- Exam List
<img  src="./Images/Screenshot_5.jpg"></img><br>

- Create Exam
<img  src="./Images/Screenshot_6.jpg"></img><br>

- User List
<img  src="./Images/Screenshot_8.jpg"></img><br>

- Student List
<img  src="./Images/Screenshot_9.jpg"></img><br>

- Create Student
<img  src="./Images/Screenshot_11.jpg"></img><br>

- Admin List
<img  src="./Images/Screenshot_10.jpg"></img><br>

- Create Admin
<img  src="./Images/Screenshot_12.jpg"></img><br>

### Student
- Home Page (Exam List)
<img  src="./Images/Screenshot_13.jpg"></img><br>

- Take Exam
<img  src="./Images/Screenshot_16.jpg"></img><br>

- View Result
<img  src="./Images/Screenshot_17.jpg"></img><br>

## Testing and Validation
1. Create Operation Testing

  Insert song information and click the "Add Song" button
  <img width="947" alt="image" src="">

  Check the data in MongoDB and Mysql
  - Mysql
  <img width="947" alt="image" src="">
  
  - MongoDB
  <img width="947" alt="image" src="">

2. View Operation Testing
 <img width="960" alt="image" src="">
 
3. Update Operation Testing

  Update song information and click "Update Song" button
  <img width="946" alt="image" src="">
  
  Check the data in MongoDB and Mysql
  - Mysql
  <img width="946" alt="image" src="">
  
  - MongoDB
  <img width="946" alt="image" src="">

4. Delete Operation Testing

  Delete song information and click the "OK" button
  <img width="960" alt="image" src="">

  Check the data in MongoDB and Mysql
  - Mysql
  <img width="394" alt="image" src="">

  - MongoDB
  <img width="741" alt="image" src=">


## Conclusion
This Student Result Analysis System developed using PHP, MySQL and MongoDB presents valuable insights on students understanding based on examination results. By meeting its goals of data collection, storage, CRUD operations and data analysis, the system proved to be effective. The successful implementation of CRUD operations on MongoDB and MySQL ensured streamlined data management.

#### Key Findings:
Based on the overall results of students, 75% of students have good understanding on the topic learned as the majority of students got PASSED in the examination. This shows that, the students are able to cope with the teaching methods in class. Besides, students are able to 
notice the learning gaps and focus more on those areas. Furthermore, lecturers are able to identify strengths and weaknesses of each individual student to provide personalized guidance and support to help students maximize their strengths and address areas that need improvement. 

#### Challenges Faced:



#### Potential Improvements:




## References

