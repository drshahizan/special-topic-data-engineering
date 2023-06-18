<?php 
include("dbconnect.php");

$fname = $_POST['fname'];
$fpwd =$_POST['fpwd'];

$check = "SELECT * FROM tb_user WHERE u_name = '$fname'";
$checkresult = mysqli_query($con, $check);
$checkrows = mysqli_num_rows($checkresult);

if ($checkrows>0) {
  $_SESSION['message'] = '<div class="alert alert-dismissible alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>The ID you entered has been registered. Please login.</strong></a>.
                        </div>';
  header('location:login.php');
}
else{
  $sql = "INSERT INTO tb_user (u_name, u_pwd, u_type) 
    VALUES ('$fname','$fpwd', '1')";

  mysqli_query($con, $sql);
  mysqli_close($con);
}

include 'headermain.php';

?>

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
                  <p>You have successfully registered</p>
                </div>
                <div class="modal-footer">
                  <a href="login.php" class="btn btn-primary">Yes</a>
                  
</div></div></div></div>

<script>
  function myFunction(){
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm(){
    document.getElementById("myForm").style.display = "none";
  }
</script>


