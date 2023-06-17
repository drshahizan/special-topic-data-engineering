<?php  


include 'cbssessionAdmin.php'; 
if(!session_id())
{
  session_start();
}


include 'dbconnect.php';

//Get Booking ID
If(isset($_GET['id']))
{
  $vid = $_GET['id'];
}



//Retrive info from table and check for existing Vehicle.
$sqlCheck = "SELECT * FROM tb_vehicle WHERE v_reg ='$vid'";

// Execute SQL
$result = mysqli_query($con, $sqlCheck); // Execute SQL Statement
$row = mysqli_fetch_array($result); // Retrieve result


$path = "img/";

$file_pointer = $path.$row['v_pic'];;


if (!unlink($file_pointer)) { 
    echo "<script type='text/javascript'>alert(\"Oops Something Went Wrong.\")</script>";
} 
else 
{ 


        $sqlDelete = "DELETE FROM tb_vehicle WHERE v_reg = '$vid'";



                if(mysqli_query($con,$sqlDelete)){

                       //Redirect Unsuccessfull notification
                      echo "<script type='text/javascript'>alert(\"Car was sucessfully deleted.\")</script>";
                      //header("location:page1.php");
                      include("adminCars.php");
                    
                }
                
                else{
                   //Redirect Unsuccessfull notification
                  echo "<script type='text/javascript'>alert(\"Car was not sucessfully deleted.\")</script>";
                  //header("location:page1.php");
                  include("adminCars.php");
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