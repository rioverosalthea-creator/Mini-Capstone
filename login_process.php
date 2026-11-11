<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === 'admin123' && $password === 'admin321') {
        $_SESSION['user_id'] = 999; 
        $_SESSION['username'] = 'Admin User';
        $_SESSION['role'] = 'admin'; 

        header("Location: admin_dashboard.php");
        exit();
    }
    
    elseif ($username === 'resident' && $password === 'resident123') {
        $_SESSION['user_id'] = 1; 
        $_SESSION['username'] = 'Juan Dela Cruz';
        $_SESSION['role'] = 'resident'; 

        header("Location: index.php");
        exit();
    }

    else {
        echo "<script>alert('Wrong username or password! Try again.'); window.location.href='login.php';</script>";
        exit();
    }
}
?>