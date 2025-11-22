<?php
session_start();
include "db.php";
$admin = $_SESSION['admin'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url("https://images.unsplash.com/photo-1524995997946-a1c2e315a42f") no-repeat center center;
            background-size: cover;
        }
        .content-box {
            background: rgba(255,255,255,0.85);
            padding: 35px;
            border-radius: 12px;
            max-width: 450px;
         
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .menu-card {
            padding: 18px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            margin-bottom: 15px;
            transition: 0.2s;
        }
        .menu-card:hover {
            background: #f7f7f7;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
<div class="content-box text-center">
    <h2 class="mb-4">Welcome, <?php echo $admin; ?> 👋</h2>

    <a href="add.php" class="text-decoration-none text-dark">
        <div class="menu-card">
            <h5>➕ Add Student</h5>
        </div>
    </a>

    <a href="list.php" class="text-decoration-none text-dark">
        <div class="menu-card">
            <h5>📋 View Students</h5>
        </div>
    </a>

    <a href="logout.php" class="text-decoration-none text-dark">
        <div class="menu-card">
            <h5>🚪 Logout</h5>
        </div>
    </a>
</div>
</div>

</body>
</html>
