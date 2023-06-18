<?php include 'headermain.php'; ?>
<div class="container d-flex justify-content-center align-items-center">
<head>
  <style>
    body{
      background-color: lightblue;
    }

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

<form method="POST" action="loginprocess.php">

<!-- Header Start -->
   <!--  <div class="container-fluid bg-primary">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 150px">
            <h3 class="display-3 font-weight-bold text-white">Login</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Gallery</p>
            </div>
        </div>
    </div> -->
<!-- Header End -->

  
    <div class="container d-flex justify-content-center card pb-5 pt-5 pl-5 pr-5 mt-5 mb-5">
      <br><br>
    <form>
      <fieldset>
        <br>
        <legend>Login Form</legend>

        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your IC Number with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="form-label">Enter Password</label>
          <input type="password" name="fpwd" class="form-control" id="pwd" placeholder="Please enter your password" required>
          <input class="mt-3 mb-3" type="checkbox" onclick="myFunction1()">Show Password
          
        </div>

        <br>


        <button type="button" class="btn btn-warning" onclick="myFunction()">Login</button>
        <div class="form-popup" id="myForm">
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
                  <p>Are you sure want to log in?</p>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Sure</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeForm()">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <button type="reset" class="btn btn-outline-warning">Clear Form</button>
        <br><br><p>Don't have an account? <a href="register.php">Register here.</a></p>
      </fieldset>
    </form>
    <br><br>
    </div>
  <!-- <div class="col-4"></div> -->
</div>
<script>
  function myFunction(){
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm(){
    document.getElementById("myForm").style.display = "none";
  }

  function myFunction1() {
  var x1 = document.getElementById("pwd");
  if (x1.type === "password") {
    x1.type = "text";
  } else {
    x1.type = "password";
  }
}

</script>
