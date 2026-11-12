<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In Page</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="login-body">

    <div class="log-container">

        <div class="log-header">
            <img src="logo.png" alt="Barangay Logo">
            <h1>Barangay Pag-asa</h1>
            <p>Resident Portal</p>
        </div>

        <div class="log-content">

            <h2>Welcome Back!</h2>
            <p>Log in to access your resident account.</p>

            <form action="login_process.php" method="POST">

                <div class="log-group">
                    <label>Username or Email</label>
                    <input type="text" name="username"
                           placeholder="Enter username or email" required>
                </div>

                <div class="log-group">
                    <label>Password</label>
                    <input type="password" name="password"
                           placeholder="Enter your password" required>
                </div>

                <div class="log-options">
                    <label>
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>

                    <a href="forgot_password.php">Forgot Password?</a>
                </div>

                <button type="submit" class="log-button" name="login">
                    LOG IN
                </button>

            </form>

            <div class="log-footer">
                <p>Don't have an account?
                    <a href="signup.php">Create an Account</a>
                </p>
            </div>

        </div>
    </div>

</body>
</html>