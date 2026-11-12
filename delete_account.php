
<?php
session_start();

if (
    !isset($_SESSION['profile']) ||
    !isset($_SESSION['role']) ||
    $_SESSION['role'] !== 'resident'
) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: AccountSetting.php");
    exit();
}

$username = $_SESSION['profile']['username'];

unset($_SESSION['users'][$username]);

$_SESSION = [];

session_destroy();

echo "<script>
    alert('Your account has been deleted successfully!');
    window.location.href = 'login.php';
</script>";
exit();
?>
