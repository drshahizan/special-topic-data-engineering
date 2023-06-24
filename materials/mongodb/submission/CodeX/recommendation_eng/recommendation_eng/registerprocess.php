<?php
//session_start();

//Connect to Database
include ('dbconnect.php');

//Retrieve data from form
$fic = $_POST['fic'];
$femail = $_POST['femail'];
$fname = $_POST['fname'];
$fpwd = $_POST['fpwd'];



            //$options = array("cost"=>4);
           // $hashPwd = password_hash($fpwd,PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO tb_user (u_ic, u_name, u_pwd, u_type) 
                  VALUES ('".$fic."', '".$fname."', '".$fpwd."', '2')";

/*$sql = "INSERT INTO tb_user (u_ic, u_pwd, u_name, u_type)
      VALUES ('$fic', '$encrypted_pwd', '$fname', '2')";*/



      mysqli_query($con, $sql);

      header ('Location: login.php');
