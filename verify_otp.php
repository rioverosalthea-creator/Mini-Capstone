
<?php
session_start();
require_once "db.php";

if (!isset($_SESSION['otp_verified']) || $_SESSION['otp_verified'] !== true) {
    echo "<script>
        alert('Unauthorized access! Please verify your OTP first.');
        window.location.href = 'otp.php';
    </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm_password) {
        echo "<script>
            alert('Your password doesn\\'t match!');
            window.history.back();
        </script>";
        exit();
    }

    if (empty($_SESSION['reset_email'])) {
        die("Reset email not found. Please restart the password reset process.");
    }

    $email = $_SESSION['reset_email'];

    // Hash the new password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Update password in the existing users table
    $stmt = $conn->prepare(
        "UPDATE users SET password = ? WHERE email = ?"
    );

    $stmt->bind_param("ss", $hashed_password, $email);

    if ($stmt->execute()) {

        if ($stmt->affected_rows > 0) {

            unset($_SESSION['otp']);
            unset($_SESSION['reset_email']);
            unset($_SESSION['otp_verified']);

            echo "<script>
                alert('Password successfully changed!');
                window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
                alert('No account was updated. Please check your registered email.');
                window.location.href = 'login.php';
            </script>";
        }

    } else {
        echo "Error updating password: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>
