<?php
include "db.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6fa;
        }
        .form-box {
            max-width: 420px;
            margin: 60px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-box">

        <h3 class="text-center mb-4">Add New Student</h3>

        <form action="insert.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Student Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control" placeholder="Enter age" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="example@mail.com" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Save Student</button>

        </form>

        <div class="text-center mt-3">
            <a href="index.php" class="text-decoration-none">⬅ Back to Dashboard</a>
        </div>

    </div>
</div>

</body>
</html>
