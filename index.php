<?php

include_once 'config/settings-configuration.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITELEC2-V2</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid">
    <div class="container">
        <h1>SIGN IN</h1>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
            
            <div class="container">
            <label for="signin-email" class="form-label">Email Address:</label>
            <input type="email" name="email" id="signin-email" class="form-control" placeholder="Enter Email" required>
            </div>
            
            <div class="container">
            <label for="signin-password" class="form-label">Password:</label>
            <input type="password" name="password" id="signin-password" class="form-control" placeholder="Enter Password" required>
            </div>

            <br>

            <div class="form-group">
            <a href="forgot-password.php">Forgot Password</a>
            </div>

            <br>

            <button type="submit" class="btn btn-primary" name="btn-signin">SIGN IN</button>
        </form>
        </div>

        <br> <br> <br>

    <div class="container">
        <h1>REGISTRATION </h1>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
            
            <div class="container">
            <label for="register-username" class="form-label">Username:</label>
            <input type="text" name="username" id="register-username" class="form-control" placeholder="Enter Username" required>
            </div>
            
            <div class="container">
            <label for="register-email" class="form-label">Email Address:</label>
            <input type="email" name="email" id="register-email" class="form-control" placeholder="Enter Email" required>
            </div>

            <div class="container">
            <label for="register-password" class="form-label">Password:</label>
            <input type="password" name="password" id="register-password" class="form-control" placeholder="Enter Password" required>
            </div>

            <br>

            <button type="submit" class="btn btn-primary" name="btn-signup">SIGN UP</button>
        </form>
    </div>

    </div>
    
    
</body>
</html>