
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === 'admin123' && $password === 'admin321') {

        $_SESSION['user_id'] = 999;
        $_SESSION['username'] = 'Admin User';
        $_SESSION['role'] = 'admin';

        header("Location: admin_dashboard.php");
        exit();
    }

    elseif (
        isset($_SESSION['users'][$username]) &&
        password_verify($password, $_SESSION['users'][$username]['password'])
    ) {

        $resident = $_SESSION['users'][$username];

        $_SESSION['user_id'] = $resident['resident_number'];
        $_SESSION['username'] = $resident['full_name'];
        $_SESSION['role'] = 'resident';
        $_SESSION['profile'] = $resident;

        header("Location: index.php");
        exit();
    }

    else {
        echo "<script>
            alert('Wrong username or password! Try again.');
            window.location.href = 'login.php';
        </script>";
        exit();
    }
}
?>
