# Car Booking System
- [Introduction](#introduction)
- [System Design](#system-design)
- [Implementation](#implementation)
- [Web Interface](#web-interface)
- [Testing and Validation](#testing-and-validation)
- [Conclusion](#conclusion)


## Introduction
<p align="justify">
The Car Booking System using MongoDB is a powerful solution designed to simplify the process of reserving and managing car rentals. MongoDB, serves as the backbone for this system, providing flexibility and efficiency in storing and retrieving data. By utilizing MongoDB's document-oriented database model, the Car Booking System can handle diverse requirements and accommodate varying data structures without the need for a predefined schema. This flexibility allows for easy expansion and modification of the system as the business evolves. MongoDB's indexing capabilities further optimize data retrieval and searching operations, ensuring fast response times for queries related to available cars, customer bookings, and pricing. Additionally, the scalability features of MongoDB enable the system to handle growing data volumes and user demands, making it an ideal choice for car rental businesses.
</p>

## System Design
1.``Use Case Diagram``: Use Case diagram consisting of 2 users which are Admin and Customer where both the user can perform User Authentication and Manage Booking which includes the CRUD operation 

<p align="center">
   <img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/997b65e63357896b1e727d460d9097c2b738fd1f/materials/mongodb/submission/DataSphere/images/UseCase.jpg">
</p>


## Implementation
1.``Install MongoDB``: Start by installing MongoDB on our system. Visited the official MongoDB website and download the appropriate version for our operating system. Followed the installation instructions provided by MongoDB to complete the installation process.
<p align="center">
  <img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/576dd47228bdc06b53705db8aaff9be071709785/materials/mongodb/submission/DataSphere/images/Mongodb_Download.jpg">
</p>


2.``Set up MongoDB Server``: Once MongoDB is installed, we need to set up a MongoDB server. Open a terminal or command prompt and start the MongoDB server by running the appropriate command.
<p align="center">
<img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/576dd47228bdc06b53705db8aaff9be071709785/materials/mongodb/submission/DataSphere/images/Mongodb_setUp.jpg">
</p>

3.``Create a MongoDB Database``: Next, we'll need to create a MongoDB database specifically for the Car Booking System. We use MongoDB GUI tool (such as MongoDB Compass) to create a new database. Named a suitable name for the database, such as "cbs"
<p align="center">
<img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/73668a45669ac69f232e359fa69518737ecd1e6f/materials/mongodb/submission/DataSphere/images/mongodbDatabase.jpg">
</p>

4.``Design the Database Schema``: Determined the structure of my database by designing the schema for the Car Booking System. 
<p align="center">
<img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/6468ab31d7afcb2fc911b91f4c1c895407f867a1/materials/mongodb/submission/DataSphere/images/DeleteBookingMongodb.jpg">
</p>

5.``Connect to MongoDB in Our Application``:In our Car Booking System application's code, we need to establish a connection to MongoDB. Install the MongoDB driver or library for your programming language (e.g., pymongo for Python). Import the necessary libraries and use the appropriate code to connect to the MongoDB server and the specific database you created.
<p align="center">
   <img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/d56e1fa28b00a1894b7844ad8df2c812108a7c6f/materials/mongodb/submission/DataSphere/images/CreateBookingMongodb.jpg">
</p>

## Web Interface
- Admin Landing Page
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/4e6e4dc53bf5549108c0dd5f59514da2be8ddf31/materials/mongodb/submission/DataSphere/images/indexpage.jpg">
</p>

- Customer Landing Page
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/7db4da23297b791c61fefdfc9cd7776ade67f0a4/materials/mongodb/submission/DataSphere/images/customerIndex.jpg">
</p>

- Customer Register Page
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/1fc9fc0951371c396da3b99130a40042d9f54330/materials/mongodb/submission/DataSphere/images/registerpage.jpg">
</p>

- Customer Profile Page
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/d5de6c41098987a8f69829ce7993a7d4f1153c0e/materials/mongodb/submission/DataSphere/images/customerProfile.jpg">
</p>


- Customer Booking Page
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/f037882be156a127eff339c76d1a237f9bfdc014/materials/mongodb/submission/DataSphere/images/customerBooking.jpg">
</p>

- Customer Booking Form Page
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/0e7dd99c9f7109a9c027832d396ed64f1e4c8fd6/materials/mongodb/submission/DataSphere/images/customerBookingForm.jpg">
</p>

- Customer Manage Booking Page
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/d71253e1ccfd938ed14693412898b398aecf6fc0/materials/mongodb/submission/DataSphere/images/customerManageBooking.jpg">
</p>


- Admin Modify Booking Page
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/a7233d511dee3040107ac66fe9e2b2df072c2198/materials/mongodb/submission/DataSphere/images/TestDeleteBooking.jpg">
</p>




## Testing and Validation
### 1. Create

- Create new booking
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/testCreateBooking.jpg">
</p>

- New booking create in MySQL and MongoDB
<p align="center">
<img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/CreateBookingMysql.jpg">
<img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/CreateBookingMongodb.jpg">
</p>

### 2. View
- View booking list in the manage page
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/TestViewBooking.jpg">
</p>

### 3. Update
- Update existing booking details by clicking Modify button
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/TestViewBooking.jpg">
</p>

- Update booking detail and click Modify
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/TestModifyBookingForm.jpg">
</p>

- Update successfully
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/TestModifyResult.jpg">
</p>

- Update details in MySQL and Mongodb
<p align="center">
   <img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/ModifyBookingMysql.jpg">
<img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/ModifyBookingMongodb.jpg">
</p>

### 4. Delete
- Delete existing booking by clicking Cancel. Delete successfully 
<p align="center"><img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/TestDeleteBooking.jpg">
</p>

- Delete details in MySQL and Mongodb
<p align="center">
   <img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/DeleteBookingMysql.jpg">
<img width="600" alt="image" src="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/DataSphere/images/DeleteBookingMongodb.jpg">
</p>

## Conclusion
<p align="justify">
In conclusion, the integration of MongoDB into the Car Booking System provides numerous benefits for car rental businesses. MongoDB's flexibility, scalability, and efficient data storage capabilities make it an ideal choice as the backend database. The system can handle diverse data structures without a predefined schema, allowing for easy expansion and modification as the business evolves. MongoDB's indexing and querying capabilities ensure fast and efficient data retrieval, enhancing the user experience and streamlining operations. Furthermore, MongoDB's scalability features enable the system to handle growing data volumes and user demands, ensuring optimal performance even as the business expands. By leveraging MongoDB's strengths, the Car Booking System offers a robust and efficient solution for car rental businesses, improving customer satisfaction and driving operational efficiency.
</p>


