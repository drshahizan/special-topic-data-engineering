<?php 

if(!session_id())
{
	session_start();
}

if(isset($_SESSION['u_ic']) != session_id())
{
	header('Location: login.php');
}

if($_SESSION['utype'] != 1)
{
  header('Location: login.php');
}

?>