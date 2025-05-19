<?php 

$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = "";
$db = "latihan_login_db";

$conn = mysqli_connect($host, $username, $password, $db);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>