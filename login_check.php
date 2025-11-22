<?php
include "db.php";

$u = $_POST['Username'];
$p = $_POST['Password'];

$query = "SELECT * FROM admin WHERE Username='$u' AND Password='$p'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1){
    $_SESSION['admin'] = $u;  // store session
    header("Location: index.php");
} else {
    echo "
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>

    <div class='container mt-5' style='max-width: 450px;'>
        <div class='alert alert-danger text-center' role='alert'>
            ❌ Invalid username or password
        </div>

        <div class='text-center mt-3'>
            <a href='login.php' class='btn btn-primary'>🔄 Try Again</a>
        </div>
    </div>
    ";
}

?>
