<?php
if(!session_id())
{
	session_start();
}

if(isset($_SESSION['username']) != session_id() || $_SESSION['role'] != 3)
{
	echo '<script>history.back()</script>';
}


?>