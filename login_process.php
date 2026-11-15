<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit();
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($username === '' || $password === '') {
    echo "<script>
        alert('Please enter your username and password.');
        window.location.href = 'login.php';
    </script>";
    exit();
}

$sql = "SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Database error: " . $conn->error);
}

$stmt->bind_param("ss", $username, $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    $is_password_correct = false;

    // ** PASSWORD VERIFICATION DITO **
    // 1. Sinusuri kung tugma ang hashed password gamit ang password_verify
    if (password_verify($password, $user['password'])) {
        $is_password_correct = true;
    } 
    // 2. Fallback kung sakaling plain text pa ang lumang password sa database
    elseif ($password === $user['password']) {
        $is_password_correct = true;
    }

    if ($is_password_correct) {
        session_regenerate_id(true);

        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['profile'] = $user;

        if ($user['role'] === 'admin') {
            header("Location: admin_dashboard.php");
            exit();
        } else {
            header("Location: Profile.php");
            exit();
        }

    } else {
        echo "<script>
            alert('Incorrect username or password.');
            window.location.href = 'login.php';
        </script>";
        exit();
    }

} else {
    echo "<script>
        alert('Incorrect username or password.');
        window.location.href = 'login.php';
    </script>";
    exit();
}

$stmt->close();
$conn->close();
?>