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
    <link rel="stylesheet" href="src/css/formStyle.css">

</head>

<body>

    <div class="card">
        <ul class="nav nav-tabs mb-4" id="authTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="signin-tab" data-bs-toggle="tab" data-bs-target="#signin" type="button" role="tab">Sign In</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab">Register</button>
            </li>
        </ul>

        <div class="tab-content" id="authTabContent">
            <!-- Sign In Form -->
            <div class="tab-pane fade show active" id="signin" role="tabpanel">
                <h3>Sign In</h3>
                <form action="dashboard/admin/authentication/admin-class.php" method="POST" novalidate>
                    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">

                    <div class="mb-3">
                        <label for="signin-email" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="signin-email" placeholder="you@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="signin-password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="signin-password" placeholder="Enter password" required>
                    </div>

                    <div class="text-end mb-3">
                        <a href="forgot-password.php" class="link">Forgot Password?</a>
                    </div>

                    <button type="submit" name="btn-signin" class="btn btn-primary">Sign In</button>
                </form>
            </div>

            <!-- Registration Form -->
            <div class="tab-pane fade" id="signup" role="tabpanel">
                <h3>Register</h3>
                <form action="dashboard/admin/authentication/admin-class.php" method="POST" novalidate>
                    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">

                    <div class="mb-3">
                        <label for="register-username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="register-username" placeholder="Create a username" required>
                    </div>

                    <div class="mb-3">
                        <label for="register-email" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="register-email" placeholder="you@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="register-password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="register-password" placeholder="Create a password" required>
                    </div>

                    <button type="submit" name="btn-signup" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>