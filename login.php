<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">      
    <title>Admin Login</title>

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

    <style>
        body {
      background: linear-gradient(135deg, #6977a7ff, #364c8fff, #ffffff);
    min-height:100vh;
        }
        .login-card {
            border-radius: 15px;
            padding: 40px;
            width: 500px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
            background: #fff;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">

        <div class="login-card">

            <h3 class="text-center mb-4">Admin Login</h3>

            <form action="login_check.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input 
                        type="text" 
                        name="Username" 
                        class="form-control" 
                        placeholder="Enter username" 
                        required
                    >
                </div>

                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input 
                        type="password" 
                        name="Password" 
                        class="form-control" 
                        placeholder="Enter password" 
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Login
                </button>

            </form>
        </div>
   
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
