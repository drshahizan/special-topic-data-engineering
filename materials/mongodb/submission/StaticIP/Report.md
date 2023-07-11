# Online Examination System
- [Introduction](#introduction)
- [System Design](#system-design)
- [Implementation](#implementation)
- [Web Interface](#web-interface)
- [Testing and Validation](#testing-and-validation)
- [Conclusion](#conclusion)
- [References](#references)

## Introduction
Online examination systems have greatly transformed the way assessments are conducted. Instead of traditional paper based methods these systems offer efficient and easily accessible alternatives. This brings flexibility as exams can now be scheduled and completed remotely. Eliminating geographical limitations. Moreover. Enhanced security measures including authentication mechanisms and question randomization ensure that the results obtained are reliable. Additionally. Automated grading saves time for both educators and learners. Although there may be challenges in terms of technical requirements and data security these can be overcome through careful planning. By utilizing online examination systems educators have access to analytics and personalized assessments that empower them in their teaching practices. At the same time. Students and professionals benefit from the convenience and flexibility of self paced learning. By embracing the potential of online examination systems we can envision a future where assessments seamlessly integrate into the digital landscape. This empowers individuals and organizations to thrive in an interconnected world.

## System Design


### System Architecture
<p align="center">
<img width="444" alt="image" src="">
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
1. **Create song and its ranking**: Admin add songs and its ranking into the system.
2. **Read song ranking**: Admin can read the song ranking record.
3. **Update song ranking**: Admin can update the song ranking and the song information.
4. **Delete song ranking**: Admin can delete the song ranking record.

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


Key Findings:



Challenges Faced:



Potential Improvements:




## References

