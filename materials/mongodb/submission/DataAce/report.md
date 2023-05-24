# Title
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
### System Architecture

### Data Requirements

The system's data requirements include storing and managing student information. The essential data fields may include:

**Student ID:** A unique identifier for each student.

**Name:** The student's full name.

**Age:** The age or date of birth of the student.

**Grade:** The academic grade or class the student is enrolled in.

**Contact Information:** Phone number, email address, or other contact details of the student or their parents/guardians.

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

 ```<?php
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

 ```<?php
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
## Testing and Validation
1. Create
2. Read
3. Update
4. Delete

Now, we want to try to delete student named 'Betty'. 

![Delete](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/delete-user.png)

![DeleteResult](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataAce/images/delete-result.png)

## Conclusion
## References
