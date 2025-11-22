<?php
include "db.php";
if(!isset($_SESSION['admin'])){ header("Location: login.php"); }

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM student WHERE id=$id");

header("Location: list.php");
?>
