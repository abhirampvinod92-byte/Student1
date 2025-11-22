<?php
include "db.php";
session_start();
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM student1 WHERE id=$id");

header("Location: list.php");
?>


