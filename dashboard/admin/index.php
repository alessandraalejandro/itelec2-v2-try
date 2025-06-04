<?php

require_once 'authentication/admin-class.php';

$admin = new ADMIN();
if (!$admin->isUserLoggedIn()) {

    $admin->redirect('../../');
}

$stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id" => $_SESSION['adminSession']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../src/css/formStyle.css">
</head>

<body>

    <div class="card">
        <h1>Welcome, <?php echo htmlspecialchars($user_data['email']); ?>!</h1>
        <p>You have successfully logged in to the Admin Dashboard.</p>
        <button><a href="authentication/admin-class.php?admin_signout" class="btn-logout">Sign Out</a></button>
    </div>

</body>

</html>