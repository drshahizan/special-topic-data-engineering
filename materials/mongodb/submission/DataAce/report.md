<h1 align='center'>Student Management System</h1>
<p align="center">
  <img src="https://bigdataanalyticsnews.com/wp-content/uploads/2021/12/school-management.jpg" height= '300px' title="PHPMONGODB">
  </p>

<h2 align='center'>Group Members</h2>
<table align='center'>
  <tr>
    <th>Name</th>
    <th>Matric No</th>
  </tr>
  <tr>
    <td>Myza Nazifa binti Nazry</td>
    <td>A20EC0219</td>
  </tr>
  <tr>
    <td>Nur Izzah Mardhiah binti Rashidi</td>
    <td>A20EC0116</td>
  </tr>
    <tr>
    <td>Amirah Raihanah binti Abdul Rahim</td>
    <td>A20EC0182</td>
  </tr>
    <tr>
    <td>Radin Dafina binti Radin Zulkar Nain</td>
    <td>A20EC0135</td>
  </tr>
</table>

## Table of Contents

- [Introduction](#introduction)
- [System Design](#system-design)
- [Implementation](#implementation)
- [Web Interface](#web-interface)
- [Testing and Validation](#testing-and-validation)
- [Conclusion](#conclusion)
- [References](#references)

## Introduction

In this project, our goal is to create a comprehensive Student Management System that simplifies the process of managing student records for administrators and educators. The system will be designed to leverage the combined power of PHP, MySQL, and MongoDB, enabling efficient CRUD operations on student data. By implementing efficient CRUD operations, the system aims to enhance productivity and accuracy, leading to improved organization and management within educational institutions. The user-friendly interface will streamline administrative processes, saving time and effort for administrators and educators. Overall, our goal is to provide a practical solution that optimizes student data management, benefiting educational institutions in their day-to-day operations.

## System Design

### Data Requirements

The system's data requirements include storing and managing student information. The essential data fields may include:

<div align="center">

| Field               | Description                                                  |
|---------------------|--------------------------------------------------------------|
| Student ID          | A unique identifier for each student.                         |
| Name                | The student's full name.                                      |
| Age                 | The age or date of birth of the student.                      |
| Grade               | The academic grade or class the student is enrolled in.        |
| Contact Information | Phone number                                                    |

</div>
 
### Functionalities

The Student Management System offers the following key functionalities:

**1. Create Student Record:** Administrators and educators can enter and save student information, including their ID, name, age, grade, and contact details.

**2. Read/Retrieve Student Record:** The system allows users to search for and retrieve student records based on various criteria, such as student ID, name, or grade. It provides a listing or detailed view of student information.

**3. Update Student Record:** Users can modify student details, such as updating their name, age, grade, or contact information. The system ensures the integrity of the data and performs appropriate validations.

**4. Delete Student Record:** Administrators and educators can remove student records from the system if necessary. The system will handle the deletion and maintain data consistency.

## Implementation

### Required Software
Before we start, it is important to verify that we have the following applications and tools readily available:

- [XAMPP](https://www.apachefriends.org/download.html)
- [Composer](https://getcomposer.org/download/)
- [MongoDB]( https://www.mongodb.com/try/download/community)

Having these tools in place will enable us to set up a local development environment and work with PHP, MySQL, and MongoDB effectively.

### Connect to database
To establish a connection to the **MySQL** database using PHP:

- Create a new file called "dbconnect.php" nd save it with a ".php" extension.
- Open the file in a text editor and paste the following code:

 ```
 <?php
 //Set db parameters
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "student";

 //Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);

 // Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

// Perform database operations...

// Close the connection
mysqli_close($conn);
?>
```

Next, to connect to **MongoDB** and create a collection using PHP:

- Create a new file called "mongodb1.php" nd save it with a ".php" extension.
- Open the file in a text editor and paste the following code:

 ```
<?php
require_once 'C:\xampp1\vendor\autoload.php'; 
$client = new MongoDB\Client("mongodb://localhost:27017");

$student = $client ->student;
$result1 = $student-> createCollection('studentcollection');
var_dump($result1);

?>
```

Now, we have successfully created and connect to both databases. 

![MongoDB-dbcreated](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/mongodb-created.png)

## Web Interface
1. This is the login page where admin can login and manage student credentials in the system.
![Login](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/login-user.png)

2. User can also register their credentials to use the Student Management System
![Register](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/register-user.png)

3. To fill in or create a new student, admin can fill in the Student Information Form and submit their credentials.
![Form](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/student-form.png)

4. To view the list of students, admin is able to view them in a form of table which is compact and straight-forward.
![Table](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/student-table.png)


## Testing and Validation

**1. Create**

To add a new student, access the navigation bar and select the "Add Student" option. This action will navigate to a student details form.

![Add](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/add-user.png)

![Addr](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/add-user-result.png)


In MongoDB, the process of adding student information was completed successfully, with the data being successfully inserted into the database. 

![Mongo](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/mongodb-add-result.png)

Similarly, in MySQL, all student records were successfully added without any issues or errors.

![MySQL](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/mysql-add-result.png)

**2. Read**

![Addr](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/add-user-result.png)

**3. Update**

Next, perform a CRUD operation to modify the emergency contact number for the user named Harry.

![Edit](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/edit-user.png)

![Edit-result](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/edit-user-result.png)

**4. Delete**

Next, let's roceed with the deletion of the student named 'Betty' by performing the required CRUD operation.

![Delete](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/delete-user.png)

![DeleteResult](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/delete-result.png)

## Conclusion


Throughout the development of the student CRUD management system using MySQL, MongoDB, and PHP, several key findings have emerged. Firstly, the integration of MongoDB and MySQL proved to be advantageous for managing student data. MongoDB's document-oriented model allowed for flexible and dynamic storage of student records, accommodating varying data structures. MySQL, on the other hand, provided a structured and relational approach, ensuring data consistency and enabling complex querying capabilities. This combination allowed for efficient and effective handling of student information.

One of the challenges faced during the project was establishing a connection between MongoDB and PHP. When attempting to connect PHP with MongoDB, the system encountered difficulties due to missing or incompatible dependencies. To address these challenges, the project team researched and followed the documentation provided by MongoDB and PHP communities. They identified the appropriate version of the MongoDB PHP driver and ensured compatibility with the PHP version being used. The necessary dependencies were installed, and the MongoDB PHP driver was configured properly.

Lastly, there are potential improvements that can be made to enhance the system. One improvement could be implementing a more robust data synchronization mechanism between MongoDB and MySQL to ensure real-time consistency. This could involve exploring tools or frameworks specifically designed for data replication and synchronization between different databases. Additionally, optimizing the performance of database queries and implementing caching mechanisms can improve the system's response time, especially when dealing with a large volume of student records.

Overall, the student CRUD management system successfully leverages the strengths of MongoDB, MySQL, and PHP to provide a comprehensive solution for managing student data. By addressing the challenges faced and implementing potential improvements, the system can further enhance its functionality, performance, and data consistency, providing a reliable and efficient platform for administrators and educators in educational institutions.

## References

- [How to use MongoDB with PHP](https://www.youtube.com/watch?v=WFrZB1Zr6lo)
- [HTML Form with MySQL Database using PHP](https://www.youtube.com/watch?v=2HVKizgcfjo)
