<?php 
include 'cbssessionCustomer.php'; 
if(!session_id())
{
  session_start();
}

//Connect to DB
include ('dbconnect.php');




$uic = $_SESSION['uic'];

//Retrive Booking(Join)
$sql1= "SELECT * FROM tb_user
       WHERE u_ic = '$uic'";


$result1 = mysqli_query($con, $sql1);
$row = mysqli_fetch_array($result1); 


$tempAddress = $row['u_address'];


//Retrieve data from form
$fic = $_POST['fic'];
$fpwd = $_POST['fpwd'];
$fname = $_POST['fname'];
$fphone = $_POST['fphone'];
$faddress = $_POST['faddress']; 

      //AES Encryption

      //Define cipher 
      $cipher = "aes-256-cbc"; 

      //Generate a 256-bit encryption key 
      $encryption_key = "SDVVS4D5V1S6V1SV1S546V1S61VS5DSV1"; 

      // Generate an initialization vector 
      $iv_size = openssl_cipher_iv_length($cipher); 
      $iv = "SDVVS4D5VADASDAA"; 

      //Data to encrypt  
      $encrypted_pwd = openssl_encrypt($fpwd, $cipher, $encryption_key, 0, $iv);



if($fic == $uic)
{

      if($faddress == "")
      {
           $sql2 = "UPDATE tb_user SET u_pwd='$encrypted_pwd', u_name='$fname',u_phone='$fphone' WHERE u_ic='$uic'";
            
            if(mysqli_query($con, $sql2))
            {
                  //Redirect Successfull notification
                  echo "<script type='text/javascript'>alert(\"Profile updated.\")</script>";
                  //header("location:page1.php");
                  include("customerprofile.php");   
            }
            else
            {
                  //Redirect Successfull notification
                  echo "<script type='text/javascript'>alert(\"Something Went Wrong.\")</script>";
                  //header("location:page1.php");
                  include("customerprofile.php");   
            }  
      }
      else
      {
            $sql2 = "UPDATE tb_user SET u_pwd='$encrypted_pwd', u_name='$fname',u_phone='$fphone',u_address='$faddress' WHERE u_ic='$uic'";
            
            if(mysqli_query($con, $sql2))
            {
                  //Redirect Successfull notification
                  echo "<script type='text/javascript'>alert(\"Profile updated.\")</script>";
                  //header("location:page1.php");
                  include("customerprofile.php");   
            }
            else
            {
                  //Redirect Successfull notification
                  echo "<script type='text/javascript'>alert(\"Something Went Wrong.\")</script>";
                  //header("location:page1.php");
                  include("customerprofile.php");   
            }            
      }


}


else
{
      /*$sql2= "SELECT * FROM tb_booking WHERE b_customer = '$uic'";
      $result = mysqli_query($con, $sql2);
      


      while($data = mysqli_fetch_array($result))
      {

            $sql3 = "INSERT INTO tb_booking(b_customer, b_vehicle, b_bdate, b_rdate, b_total, b_status) VALUES ('$fic','".$data["b_vehicle"]."','".$data["b_bdate"]."','".$data["b_rdate"]."','".$data["b_total"]."','".$data["b_status"]."')";
            mysqli_query($con, $sql3);

      } 

      $sql22= "DELETE FROM tb_booking WHERE b_customer = '$uic'";
      mysqli_query($con, $sql22);


      $sql4 = "DELETE FROM tb_user WHERE u_ic = '$uic'";
      
      if(mysqli_query($con, $sql4)){*/

            if($faddress == "")
            {
                  
                  $sql5 = "INSERT INTO tb_user (u_ic, u_pwd, u_name, u_phone, u_address, u_type) VALUES('$fic','$encrypted_pwd','$fname','$fphone','$tempAddress','2')";
                  
            }
            else
            {
                  
                  $sql5 = "INSERT INTO tb_user (u_ic, u_pwd, u_name, u_phone, u_address, u_type) VALUES('$fic','$encrypted_pwd','$fname','$fphone','$faddress','2')";
                  
            }

            mysqli_query($con, $sql5);


                  
                  $sql2= "SELECT * FROM tb_booking WHERE b_customer = '$uic'";
                  $result = mysqli_query($con, $sql2);
                  


                  while($data = mysqli_fetch_array($result))
                  {

                        $sql3 = "INSERT INTO tb_booking(b_customer, b_vehicle, b_bdate, b_rdate, b_total, b_status) VALUES ('$fic','".$data["b_vehicle"]."','".$data["b_bdate"]."','".$data["b_rdate"]."','".$data["b_total"]."','".$data["b_status"]."')";
                        mysqli_query($con, $sql3);

                  }

                  $sql22= "DELETE FROM tb_booking WHERE b_customer = '$uic'";
                  mysqli_query($con, $sql22);

                  $sql4 = "DELETE FROM tb_user WHERE u_ic = '$uic'";
      
                  if(mysqli_query($con, $sql4)){

                        $_SESSION['uic'] = $fic;

                        //Redirect Successfull notification
                        echo "<script type='text/javascript'>alert(\"Profile Updated\")</script>";
                        //header("location:page1.php");
                        include("customerprofile.php");              

                  }
                  else{

                        //Redirect Successfull notification
                        echo "<script type='text/javascript'>alert(\"Something Went Wrong. Data Didnt Delete\")</script>";
                        //header("location:page1.php");
                        include("customerprofile.php");

                  }

            



}




















/*

                  $_SESSION['uic'] = $fic;

                  //Redirect Successfull notification
                  echo "<script type='text/javascript'>alert(\"Profile Updated\")</script>";
                  //header("location:page1.php");
                  include("customerprofile.php");              

            }

            else
            {
                  $sql5 = "INSERT INTO tb_user (u_ic, u_pwd, u_name, u_phone, u_address, u_type) VALUES('$fic','$encrypted_pwd','$fname','$fphone','$faddress','2')";
                  mysqli_query($con, $sql5);

                  $_SESSION['uic'] = $fic;

                  //Redirect Successfull notification
                  echo "<script type='text/javascript'>alert(\"Profile Updated\")</script>";
                  //header("location:page1.php");
                  include("customerprofile.php");                      
            }


      }

      else{

            //Redirect Successfull notification
            echo "<script type='text/javascript'>alert(\"Something Went Wrong. Data Didnt Delete\")</script>";
            //header("location:page1.php");
            include("customerprofile.php");              

      }*/

      // $sql2 = "INSERT INTO tb_application(app_c_id) VALUES ('".$data["c_id"]."')";



      /*
      $sql2= "SELECT * FROM tb_iv_participants
        LEFT JOIN tb_candidate ON tb_iv_participants.par_cand = tb_candidate.c_id
        LEFT JOIN tb_user ON tb_candidate.c_username = tb_user.u_username
       WHERE  par_iv_id = '$i_id' AND par_cand IS NOT NULL";

      $result2 = mysqli_query($con, $sql2);


      while ($row2=mysqli_fetch_array($result2)){

        $sql3 = "UPDATE tb_candidate SET c_status = '6' WHERE c_username = '".$row2['c_username']."'";
        mysqli_query($con, $sql3);

      }

      */





//Close Connection
mysqli_close($con);


?>