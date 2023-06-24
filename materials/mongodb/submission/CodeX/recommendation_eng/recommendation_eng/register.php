<?php include 'headermain.php'; ?>

<body>
<div class="container">

  <form class="form-horizontal" method="POST" action="registerprocess.php">
    <fieldset>
      <legend>Registration Form</legend>

      <div class="form-group">
        <label for="inputIC" class="col-lg-2 control-label">IC Number</label>
        <div class="col-lg-10">
          <input type="text" name ="fic" class="form-control" id="inputIC" placeholder="Please enter your IC Number without dash (-)" required>
        </div>
      </div>


      <div class="form-group">
        <label for="inputName" class="col-lg-2 control-label">Name</label>
        <div class="col-lg-10">
          <input type="text" name ="fname" class="form-control" id="inputName" placeholder="Please Enter Your Full Name" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input type="password" name ="fpwd" class="form-control" id="inputPassword" placeholder="Please Create a Strong Password" required onkeyup='check();'/>
        </div>
      </div>

      <div class="form-group">
        <label for="inputConfirmPassword" class="col-lg-2 control-label">Confirm Password</label>
        <div class="col-lg-10">
          <input type="password" name ="fcpwd" class="form-control" id="inputConfirmPassword" placeholder="Please Enter Your Password Again" required onkeyup='check();'/>
          <span id='message'></span>
        </div>
      </div>
      
     
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="submit" name="submit" class="btn btn-primary">Register</button>
          <button type="reset" class="btn btn-danger">Clear</button>
        </div>
      </div>
    </fieldset>
  </form>

</div>
<br><br><br><br><br><br>

<?php include 'footer.php'; ?>
      <script>
              var check = function() {
        if (document.getElementById('inputPassword').value ==
          document.getElementById('inputConfirmPassword').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'matched';
        } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'incorrect password';
        }
      }
      </script>