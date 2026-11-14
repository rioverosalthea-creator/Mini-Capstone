<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "<script>
                alert('Your password doesn\'t match!');
                window.history.back();
              </script>";
        exit();
    } else {
        // Dito mo ilalagay ang code para i-update ang password sa database
        // Halimbawa: UPDATE users SET password = '$password' WHERE email = '$_SESSION[reset_email]'

        // Kapag MATCH, tutuloy sa login.php o success page
        echo "<script>
                alert('Password successfully changed!');
                window.location.href = 'login.php';
              </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP Page</title>
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
            <h2>Create New Password</h2>
            <form action="login.php" method="POST">
                <div class="log-group">
                    <label>Password</label>
                    <input type="password" name="password"
                           placeholder="Enter your password" required>
                </div>

                <div class="log-group">
                    <label>Re-enter Password</label>
                    <input type="password" name="confirm password"
                           placeholder="Re-enter your password" required>
                </div>

                <button type="submit" class="log-button" name="verify">
                    LOG IN
                </button>
            </form>

            <div class="log-footer">
                <p>Already have an account?
                    <a href="login.php">Log In</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>