<?php
include "db.php";
if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit; }

$name  = $_POST['name'];
$age   = $_POST['age'];
$email = $_POST['email'];

$sql = "INSERT INTO student (name, age, email) VALUES ('$name','$age','$email')";

if(mysqli_query($conn, $sql)){
    // Redirect with success message
    header("Location: list.php");
    exit;
} else {
    header("Location: list.php");
    exit;
}
?>

