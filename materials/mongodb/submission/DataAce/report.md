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
## Web Interface
## Testing and Validation
## Conclusion
## References
