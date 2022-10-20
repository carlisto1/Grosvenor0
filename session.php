<?php 


session_start();

error_reporting(0);

$user_name=$_SESSION['user_name'];
$user_department=$_SESSION['user_department'];
$user_id=$_SESSION['user_id']; 
if (!isset($_SESSION['user_name'])) {
    header("Location: sign-in.php");  
}



?>