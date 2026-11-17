<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_otp = trim($_POST['otp_code']);

    if (isset($_SESSION['otp']) && $user_otp == $_SESSION['otp']) {
        $_SESSION['otp_verified'] = true;

        echo "<script>
                window.location.href = 'verify_otp.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Invalid OTP code! Please try again.');
                window.location.href = 'otp.php';
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
    <title>Enter OTP Page</title>
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
            <h2>Enter OTP</h2>
            <p>Enter the OTP that is sent to your email.</p>
            
            <form action="otp.php" method="POST">
                <div class="log-group">
                    <label>OTP Code:</label>
                    <input type="text" name="otp_code" placeholder="Enter your OTP" required>
                </div>

                <button type="submit" class="log-button" name="verify">
                    VERIFY OTP
                </button>
            </form>

            <div class="log-footer">
                <p>Didn't receive code? <a href="forgot_password.php">Resend OTP</a></p>
            </div>
        </div>
    </div>
</body>
</html>