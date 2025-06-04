<?php

include_once 'config/settings-configuration.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/formStyle.css">
</head>

<body>
    <div class="card">
        <h3>Find Your Account</h3>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST" novalidate>
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>" />

            <div class="mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="you@example.com"
                    required
                    autocomplete="email"
                    autofocus />
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <button type="submit" name="btn-find-email" class="btn btn-primary">Search Email</button>
        </form>

        <a href="login.php" class="back-link">Back to Login</a>

        <p class="help-text">Enter the email associated with your account and we'll send instructions to reset your password.</p>
    </div>

    <!-- <script>
        // Bootstrap 5 custom form validation
        (() => {
            'use strict';
            const forms = document.querySelectorAll('form');
            Array.from(forms).forEach((form) => {
                form.addEventListener(
                    'submit',
                    (event) => {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    },
                    false
                );
            });
        })();
    </script> -->
</body>

</html>