<?php
session_start();

// Siguraduhing dumaan muna sa OTP verification bago makapunta dito
if (!isset($_SESSION['otp_verified']) || $_SESSION['otp_verified'] !== true) {
    echo "<script>
            alert('Unauthorized access! Please verify your OTP first.');
            window.location.href = 'otp.php';
          </script>";
    exit();
}

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
        // --- DATABASE CONNECTION & UPDATE ---
        // Palitan ang 'barangay_db' at 'residents' kung iba ang pangalan sa XAMPP mo
        $conn = new mysqli("localhost", "root", "", "barangay_db");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $email = $_SESSION['reset_email'];
        
        // UPDATE query para mapalitan ang password sa database
        $stmt = $conn->prepare("UPDATE residents SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $password, $email);

        if ($stmt->execute()) {
            // Linisin ang session para tapos na ang forgot password process
            unset($_SESSION['otp']);
            unset($_SESSION['reset_email']);
            unset($_SESSION['otp_verified']);

            echo "<script>
                    alert('Password successfully changed!');
                    window.location.href = 'login.php';
                  </script>";
            exit();
        } else {
            echo "<script>
                    alert('Error updating password: " . $conn->error . "');
                    window.history.back();
                  </script>";
        }

        $stmt->close();
        $conn->close();
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
            
            <form action="verify_otp.php" method="POST">
                <div class="log-group">
                    <label>Password</label>
                    <input type="password" name="password"
                           placeholder="Enter your password" required>
                </div>

                <div class="log-group">
                    <label>Re-enter Password</label>
                    <input type="password" name="confirm_password"
                           placeholder="Re-enter your password" required>
                </div>

                <button type="submit" class="log-button" name="verify">
                    UPDATE PASSWORD
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