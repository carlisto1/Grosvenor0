<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "dbs";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert(' Database Connection Failed.')</script>");
    
}

?>