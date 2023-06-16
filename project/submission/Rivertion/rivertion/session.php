<?php
if(!session_id())
{
	session_start();
}

if(isset($_SESSION['u_email']) != session_id())
{
	header('Location: index.php');
}

?>