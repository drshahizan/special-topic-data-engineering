<?php 

if (!session_id())
{
    session_start();
}

include 'session.php'; 
include 'admin-header.php'; 
include 'dbconnect.php';
   
?>

<?php include 'header.php'; ?>

<?php include 'footer.php'; ?>
