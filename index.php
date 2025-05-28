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

    <div class="mb-3">
        <h1>SIGN IN</h1>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
            <label for="signin-email">Email Address:</label>
            <input type="email" name="email" id="signin-email" placeholder="Enter Email" required><br>
            <label for="signin-password">Password:</label>
            <input type="password" name="password" id="signin-password" placeholder="Enter Password" required><br>
            <a href="forgot-password.php">Forgot Password</a>
            <button type="submit" name="btn-signin">SIGN IN</button>
        </form>
    </div>

    <div class="mb-3">
        <h1>REGISTRATION </h1>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
            <label for="register-username">Username:</label>
            <input type="text" name="username" id="register-username" placeholder="Enter Username" required><br>
            <label for="register-email">Email Address:</label>
            <input type="email" name="email" id="register-email" placeholder="Enter Email" required><br>
            <label for="register-password">Password:</label>
            <input type="password" name="password" id="register-password" placeholder="Enter Password" required><br>
            <button type="submit" name="btn-signup">SIGN UP</button>
        </form>
    </div>
    
    
</body>
</html>