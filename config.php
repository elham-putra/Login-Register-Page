<?php 

$server = "localhost";
$user = "root";
$pass = "password";
$database = "log_req";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>