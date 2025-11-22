<?php
$conn = mysqli_connect("localhost", "root", "", "HELLO");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Database connected successfully!";
session_start();
?>
