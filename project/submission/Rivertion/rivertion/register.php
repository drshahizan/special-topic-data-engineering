<?php 
  include 'headermain.php';
  include 'dbconnect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rivertion | Register</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    
    <style>
      .container {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(50, 50, 50, 0.8); /* Adj`ust the opacity by changing the last value */
        padding: 50px;
        width: 400px; /* Adjust the width and height to make it more square */
        height: auto;
        text-align: center;
        color: white;
        border-radius: 20px; /* Add rounded corners to the container */
        
      }

      .container span {
      font-size: 30px; /* Increase the font size */
      font-weight: bold;
    }

      .has-error label,
        .has-error input,
        .has-error textarea {
            color: red;
            border-color: red;
        }

      .list-unstyled li {
            font-size: 13px;
            padding: 4px 0 0;
            color: red;
        }
    </style>
  </head>
  <body background="images/apple-bg.jpg">
    <div class="container">
      <h3>Register</h3>
      <form role="form" data-toggle="validator" method="POST" action="registerprocess.php">

          <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" data-error="You must have a name." name="fname" id="inputName" placeholder="Name" required>
              <!-- Error -->
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="femail" id="inputEmail" placeholder="Email" required>
              <!-- Error -->
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label>Password</label>
              <div class="form-group">
                  <input type="password" data-minlength="1" class="form-control" id="inputPassword"
                      data-error="Have at least 1 characters" name="fpword" placeholder="Password" required />
                  <!-- Error -->
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="form-group">
              <label>Confirm Password</label>
              <div class="form-group">
                  <input type="password" class="form-control" id="inputConfirmPassword"
                      data-match="#inputPassword" data-match-error="Password don't match"
                      placeholder="Confirm Password" required />
                  <!-- Error -->
                  <div class="help-block with-errors"></div>
              </div>
          </div>
          <br>
          <div class="form-group">
              <button type="submit" name="register" id="submit_register" class="btn btn-primary btn-block">Register</button>
          </div>

      </form>
    </div>
  </body>
</html>