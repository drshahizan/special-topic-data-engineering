<?php
if(!session_id())
{
	session_start();
}

if(isset($_SESSION['username']) != session_id() || $_SESSION['role'] != 2)
{
	echo '<script>history.back()</script>';
    exit;
}


?>