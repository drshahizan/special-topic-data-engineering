<?php 

if(!session_id())
{
	session_start();
}

if(isset($_SESSION['u_id']) != session_id())
{
	header('Location: ../pages/login.php');
}

if($_SESSION['utype'] != 2)
{
  header('Location: ../pages/login.php');
}

?>