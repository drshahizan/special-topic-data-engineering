<?php

if(!session_id())
{
	session_start();
}

if(isset($_SESSION['username']) != session_id())
{
	header('Location:mainlogin.php');
}

?>