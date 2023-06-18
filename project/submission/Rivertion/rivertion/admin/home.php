<?php 
  include 'headerhome.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rivertion | Home</title>
    <style>
      .container {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(50, 50, 50, 0.8); /* Adj`ust the opacity by changing the last value */
        padding: 50px;
        width: 400px; /* Adjust the width and height to make it more square */
        height: 250px;
        text-align: center;
        color: white;
        border-radius: 20px; /* Add rounded corners to the container */
        
      }

      .container span {
      font-size: 30px; /* Increase the font size */
      font-weight: bold;
    }
    </style>
  </head>
  <body background="../images/apple-bg.jpg">
    <div class="container">
      <span>Admin - Home</span><br><br>
      <span>Rotten Fruit Detection System</span>
    </div>
  </body>
</html>