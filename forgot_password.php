<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_or_email = trim($_POST['username']);

    $otp = rand(100000, 999999);

    $_SESSION['otp'] = $otp;
    $_SESSION['reset_email'] = $username_or_email;

    echo "<script>
            alert('Your OTP Code is: " . $otp . "');
            window.location.href = 'otp.php';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Page</title>

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

            <h2>Forgot Password?</h2>
            <p></p>

            <form action="forgot_password.php" method="POST">

                <div class="log-group">
                    <label>Username or Email</label>
                    <p>Input the email that is connected to your account.</p>
                    <input type="text" name="username"
                           placeholder="Enter username or email" required>
                </div>

                <button type="submit" class="log-button" name="login">
                    SEND OTP
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