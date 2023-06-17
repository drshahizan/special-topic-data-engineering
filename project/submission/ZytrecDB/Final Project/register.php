<?php
include 'headermain.php'; 
if(isset($_SESSION['message'])) {
     echo $_SESSION['message'];
     unset($_SESSION['message']);
   }
?>
<div class="container d-flex justify-content-center align-items-center">
<head>
<style>
body  {background-color: lightblue;

</style>
</head>


<head>
  <style>
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }
  </style>
</head>


<form method = "POST" action = "registerprocess.php">


<body>
  <div class = "container d-flex justify-content-center card pt-5 pb-5 pl-5 pr-5 mt-5 mb-5" >
  <form>
  <fieldset>
    <legend>Registration Form</legend>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Full Name</label>
      <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Full Name" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Create Password</label>
      <input type="password" name="fpwd" class="form-control" id="pwd" placeholder="Please create a strong password" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Confirm Password</label>
      <input type="password" class="form-control" id="re_pwd" onkeyup="validate_password()" placeholder="RE-Confirm Password" required>
    </div>

    <span id="wrong_pass_alert"></span>

    <br><input class="mt-3 mb-3" type="checkbox" onclick="myFunction()">Show Password 
   


   
   
       
    <button type="button" class="btn btn-warning" onclick="myFunction2()">Submit</button>
    <div class="form-popup" id="myForm2">
      <div class="modal" style="display: flex; justify-content: center; align-items: center;">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body">
              <p>Do you want to continue</p>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Sure</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeForm2()">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <button type="button" class="btn btn-outline-warning" onclick="myFunction1()">Clear</button>
    <div class="form-popup" id="myForm1">
      <div class="modal" style="display: flex; justify-content: center; align-items: center;">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body">
              <p>Do you want to continue</p>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-primary" onclick="closeForm1()">Sure</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeForm1()">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div> 
</form>

</div>
<br><br><br>
  </div>
</fieldset></form></body>

<script>

function myFunction1(){
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1(){
  document.getElementById("myForm1").style.display = "none";
}

function myFunction2(){
  document.getElementById("myForm2").style.display = "block";
}

function closeForm2(){
  document.getElementById("myForm2").style.display = "none";
}

function myFunction() {
  var x1 = document.getElementById("pwd");
  var x2 = document.getElementById("re_pwd");
  if (x1.type === "password") {
    x1.type = "text";
  } else {
    x1.type = "password";
  }
  if (x2.type === "password") {
    x2.type = "text";
  } else {
    x2.type = "password";
  }
}

function validate_password() {
 
    var pwd = document.getElementById('pwd').value;
    var re_pwd = document.getElementById('re_pwd').value;
    if (pwd != re_pwd) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML
          = '☒ Password not match';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
    } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML =
            '🗹 Password Matched';
        document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
    }
}

function wrong_pass_alert() {
    if (document.getElementById('pwd').value != "" &&
        document.getElementById('re_pwd').value != "") {
        alert("Your response is submitted");
    } else {
        alert("Please fill all the fields");
    }
}
</script>

