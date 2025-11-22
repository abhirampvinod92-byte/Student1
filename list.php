<?php
include "db.php";
if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit; }

$result = mysqli_query($conn, "SELECT * FROM student");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student List</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6fa;
        }
        .table-box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
            margin-top: 40px;
        }
        .delete-btn {
            color: white;
            background: #dc3545;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .delete-btn:hover {
            background: #b02a37;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="table-box">

        <h3 class="text-center mb-4">📋 Student List</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th width="60">ID</th>
                    <th>Name</th>
                    <th width="80">Age</th>
                    <th>Email</th>
                    <th width="100">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['age']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td>
                        <a href="delete.php?id=<?= $row['id']; ?>" class="delete-btn">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary">⬅ Back to Home</a>
        </div>

    </div>
</div>

</body>
</html>
