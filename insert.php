<?php
include "db.php";
session_start();
$name  = $_POST['name'];
$age   = $_POST['age'];
$email = $_POST['email'];

$sql = "INSERT INTO student1 (name, age, email) VALUES ('$name','$age','$email')";

if(mysqli_query($conn, $sql)){
    // Redirect with success message
    header("Location: list.php");
    exit;
} else {
    header("Location: list.php");
    exit;
}
?>


