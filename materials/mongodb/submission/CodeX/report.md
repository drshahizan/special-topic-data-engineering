<h1 align='center'>TV Shows Recommendation System</h1>


- [Introduction](#introduction)
- [System Design](#system-design)
- [Implementation](#implementation)
- [Web Interface](#web-interface)
- [Testing and Validation](#testing-and-validation)
- [Conclusion](#conclusion)
- [References](#references)


## Introduction
CodeX Recommendation System is a TV shows recommendation system built using PHP, MySQL, and MongoDB. It leverages the power of these technologies to provide personalized TV show recommendations to users. The system collects user preferences, such as their favorite genres, actors, and previous viewing history, and stores this information in a MySQL database. MongoDB is used for efficient storage and retrieval of TV show data, including details like titles, genres, actors, and ratings.

The recommendation algorithm analyzes the user preferences and compares them with the attributes of various TV shows available in the database. It employs collaborative filtering and content-based filtering techniques to generate accurate recommendations. PHP acts as the backbone of the system, facilitating seamless communication between the front-end interface and the database. The CodeX Recommendation System provides an intuitive user interface where users can explore recommended TV shows, view ratings to enhance their overall viewing experience.


## System Design

### Data Requirements
 The data requirements for this system are listed as follows:
  <table>
  <tr>
    <th>Field</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>u_id</td>
    <td>A identifier for each user</td>
  </tr>
  <tr>
    <td>u_ic</td>
    <td>Act as a username</td>
  </tr>
  <tr>
    <td>u_name</td>
    <td>Name of the user</td>
  </tr>
  <tr>
    <td>u_pwd</td>
    <td>Password of the account</td>
  </tr>
  <tr>
    <td>u_type</td>
    <td>The type of user either admin or normal user</td>
  </tr>
  <tr>
    <td>type_id</td>
    <td>The identifier of each user type</td>
  </tr>
  <tr>
    <td>type_desc</td>
    <td>The description of each user type</td>
  </tr>
  <tr>
    <td>show_id</td>
    <td>The identifier of each show</td>
  </tr>
  <tr>
    <td>show_name</td>
    <td>The name of the show</td>
  </tr>
    <tr>
    <td>rate_id</td>
    <td>The identifier of the rating inserted by the user</td>
  </tr>
    <tr>
    <td>rate_show_id</td>
    <td>Reflects the show_id of the rated TV Show</td>
  </tr>
     <tr>
    <td>rate</td>
    <td>Rating from the user of the specific TV Show from scale of 1 to 5 and can enter up to 1 decimal places</td>
  </tr>
</table>

### Functionalities
CodeX TV Shows Recommendation Systems offers different functionalities to different user type. Below are the lists according to the user type.

Admin:
**1. Add New TV Show:** Administrators can enter and save new tv shows by entering its name.
**2. View TV Shows Rating by Multiple User:** Administrators view the rating scores from multiple users for all the TV shows.

User:
**1. View TV Show:** Users can view the list of TV Shows added by the admin.
**2. Add Rating to TV Show:** Users can add rating to their choice of TV Shows in the list.
**2. View Recommended TV Show:** Users can view the recommended TV Shows. In the list, User can search on the left column what show they like, and they can see on the right column, how recommended the other shows was with the show that they like. If it is red, it means that, they might not like the show and if it is green, the user might likely liked the recommended show.

## Implementation

### 1. Download All Required Software

1.1 Install [XAMPP](https://www.apachefriends.org/download.html) <br>
1.2 Install [Composer](https://getcomposer.org/download/)
1.3 Install [MongoDB](https://www.mongodb.com/try/download/community) <br>
1.4 Install [MongoDB PHP Driver](https://pecl.php.net/package/mongodb) <br>

### 2. Connect to database

## Web Interface
- Landing Page
  
![Landing Page](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/landing_page.png)

- Login Page
  
![Login](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/login_page.png)

- Registration Page for New User
  
![Register](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/register.png)

- Logout
  
![Logout](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/logout.png)

- Admin Landing Page
  
![Admin Land](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/admin_land.png)

- Admin Add New Show Page
  
![New_Show_1](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/admin_add_show.png)

OR

![New_Show_2](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/admin_add_show2.png)

- Admin User Rating Collection Page
  
![](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/admin_rating_view.png)

- User Landing Page
  
![Use Land](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/user_land.png)

- User Add Rating Page
  
![Add Rate](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/user_rate.png)

- User Recommendation Page
  
![Rec](https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/mongodb/submission/CodeX/img/recommendation_view.png)


## Conclusion

In conclusion, the CodeX Recommendation System successfully utilizes PHP, MySQL, and MongoDB to create a robust TV shows recommendation platform. By collecting and analyzing user preferences, it generates personalized recommendations using collaborative filtering and content-based filtering techniques. The system efficiently stores and retrieves TV show data using MongoDB, while PHP ensures seamless communication between the front-end and the database.

The CodeX Recommendation System enhances the user experience by providing accurate recommendations based on individual preferences, allowing users to discover new TV shows tailored to their tastes. With features like exploring recommended shows, viewing ratings, and marking favorites, the system creates an engaging and interactive platform for TV show enthusiasts. Through its effective use of technologies, the CodeX Recommendation System offers an efficient and user-friendly solution for discovering and enjoying TV shows.

## References


