<?php

if(!session_id())
{
	session_start();
}

//include '../cbssession.php';
//Connect to DB
include ('../dbconnect.php');

if(isset($_POST['upload_fruit']))
{
	$fvimg = $_FILES["fvimg"]['name'];

		$sql = "INSERT INTO tb_fruit (f_img)
				VALUES ('$fvimg')";

		$sql_run = mysqli_query($con,$sql);

		if($sql_run)
		{
			move_uploaded_file($_FILES["fvimg"]["tmp_name"], "../fruits/".$_FILES["fvimg"]["name"]);
			header('Location: upload.php');
		}
}

?>