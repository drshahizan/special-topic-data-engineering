<?php  


include 'cbssessionAdmin.php'; 
if(!session_id())
{
  session_start();
}

//Get Booking ID
If(isset($_GET['id']))
{
  $vid = $_GET['id'];
}

include 'dbconnect.php';


$fmodel = $_POST['fname'];
$fseats = $_POST['fseats'];
$ftype = $_POST['ftype'];
$freg = $_POST['freg'];
$fprice = $_POST['fprice'];



//Retrive info from table and check for existing Vehicle.
$sqlCheck = "SELECT * FROM tb_vehicle WHERE v_reg ='$vid'";

// Execute SQL
$result = mysqli_query($con, $sqlCheck); // Execute SQL Statement
$row = mysqli_fetch_array($result); // Retrieve result




    // Uploads files


    if (isset($_POST["submit"]))
     {    


        if($_FILES['file']['size'] == 0) {
        
            $tempImg = $row['v_pic'];

            $sqlDelete = "DELETE FROM tb_vehicle WHERE v_reg = '$vid'";

            $sql = "INSERT INTO tb_vehicle(v_reg, v_pic, v_type, v_model, v_seat, v_price) VALUES ('$freg','$tempImg','$ftype','$fmodel','$fseats','$fprice')";

                        if(mysqli_query($con,$sqlDelete)){

                            if(mysqli_query($con,$sql)){
                         
                                   //Redirect Successfull notification
                                  echo "<script type='text/javascript'>alert(\"Car was sucessfully updated.\")</script>";
                                  //header("location:page1.php");
                                  include("adminCars.php");
                              }
                            else{
                               //Redirect Unsuccessfull notification
                              echo "<script type='text/javascript'>alert(\"Car was not sucessfully updated.\")</script>";
                              //header("location:page1.php");
                              include("adminCars.php");
                            }

                        }
                        
                        else{
                           //Redirect Unsuccessfull notification
                          echo "<script type='text/javascript'>alert(\"Car was not sucessfully updated.\")</script>";
                          //header("location:page1.php");
                          include("adminCars.php");
                        }

        }


        else{

            $path = "img/";

            $file_pointer = $path.$row['v_pic'];;


            if (!unlink($file_pointer)) { 
                echo "<script type='text/javascript'>alert(\"Oops Something Went Wrong.\")</script>";
            } 
            else 
                { 
                #file name with a random number so that similar dont get replaced
                $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
             
                #temporary file name to store file
                $tname = $_FILES["file"]["tmp_name"];


                 #upload directory path
                $uploads_dir = 'img';

                #TO move the uploaded file to specific location
                move_uploaded_file($tname, $uploads_dir.'/'.$pname);
             
                #sql query to insert into database app_file = '$pname'

                $sqlDelete = "DELETE FROM tb_vehicle WHERE v_reg = '$vid'";

                $sql = "INSERT INTO tb_vehicle(v_reg, v_pic, v_type, v_model, v_seat, v_price) VALUES ('$freg','$pname','$ftype','$fmodel','$fseats','$fprice')";
             

                if ($_FILES['file']['size'] > 30000000) { 
                    // file shouldn't be larger than 30 Megabyte
                    
                    //Redirect Unsuccessfull notification 
                    echo "<script type='text/javascript'>alert(\"Image shouldn't be larger than 30 Megabyte\")</script>";
                    //header("location:page1.php");
                    include("adminCars.php"); 

                } 

                else{
                        if(mysqli_query($con,$sqlDelete)){

                            if(mysqli_query($con,$sql)){
                         
                                   //Redirect Successfull notification
                                  echo "<script type='text/javascript'>alert(\"Car was sucessfully modified.\")</script>";
                                  //header("location:page1.php");
                                  include("adminCars.php");
                              }
                            else{
                               //Redirect Unsuccessfull notification
                              echo "<script type='text/javascript'>alert(\"Car was not sucessfully modified.\")</script>";
                              //header("location:page1.php");
                              include("adminCars.php");
                            }

                        }
                        
                        else{
                           //Redirect Unsuccessfull notification
                          echo "<script type='text/javascript'>alert(\"Car was not sucessfully modified.\")</script>";
                          //header("location:page1.php");
                          include("adminCars.php");
                        }
                }

            }
        
    }



} 



















/*
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    $pname = rand(1000,10000)."-".$filename;

    // destination of the file on the server
    $destination = 'uploads/' . $pname;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf'])) {

       	//Redirect Unsuccessfull notification 
      	echo "<script type='text/javascript'>alert(\"Only pdf file allowded\")</script>";
      	//header("location:page1.php");
      	include("applicationForm.php"); 

    } 

    else if ($_FILES['myfile']['size'] > 10000000) { 
    	// file shouldn't be larger than 10 Megabyte
        
        //Redirect Unsuccessfull notification 
      	echo "<script type='text/javascript'>alert(\"File shouldn't be larger than 10 Megabyte\")</script>";
      	//header("location:page1.php");
      	include("applicationForm.php"); 

    } 

    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) 
        {
            
            $sql = "UPDATE tb_application SET app_file = '$pname' WHERE tb_application.app_id = '1')";

            if (mysqli_query($con, $sql)) 
	            {

				      	header("applicationForm.php");
	            }
        } 



        else {

	        //Redirect Unsuccessfull notification 
	      	echo "<script type='text/javascript'>alert(\"Failed to upload file.\")</script>";
	      	//header("location:page1.php");
	      	include("applicationForm.php"); 

        }
    }
}*/










?>