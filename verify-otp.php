<?php

include_once 'config/settings-configuration.php'

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/formStyle.css">
</head>

<body>

    <h1>Enter OTP</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
        <input type="number" name="otp" placeholder="Enter OTP" required>
        <br>
        <button type="submit" name="btn-verify">VERIFY</button>

    </form>

</body>

</html>