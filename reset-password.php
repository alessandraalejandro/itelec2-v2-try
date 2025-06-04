<?php

require_once 'dashboard/admin/authentication/admin-class.php';

$token = $_GET['token'];
// Verify if token exists
if (!$token) {
    echo "<script>alert('Invalid or expired reset link.'); window.location.href = '../../';</script>";
    exit;
} else {
    $admin = new ADMIN();

    
    $stmt = $admin->runQuery("SELECT * FROM user WHERE tokencode = :token");
    $stmt->execute(array(":token" => $token));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "<script>alert('Invalid or expired reset link.'); window.location.href = '../../';</script>";
        exit;
    }

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1>CHANGE YOUR PASSWORD</h1>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">

            <div class="container">
                <label for="new-password" class="form-label">Choose a new password</label>
                <input type="password" name="newPassword" id="new-password" class="form-control" placeholder="Enter new password" required><br>
            </div>

            <div class="container">
                <label for="confirm-password" class="form-label">Confirm new password</label>
                <input type="password" name="confirmPassword" id="confirm-password" class="form-control" placeholder="Confirm new password" required>
            </div>

            <button type="submit" name="btn-reset-password" class="btn btn-primary">Confirm</button>
        </form>
    </div>

</body>

</html>