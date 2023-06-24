<?php
if (!session_id()) {
	session_start();

}


if (!isset($_SESSION['u_ic'])) {
	header('Location: login.php');
	exit();
}

$uic = $_SESSION['u_ic'];

