
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

$username = $_SESSION['profile']['username'];

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: AccountSetting.php");
    exit();
}

$current_password = $_POST['current_password'] ?? '';
$new_password = $_POST['new_password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

if (!password_verify(
    $current_password,
    $_SESSION['users'][$username]['password']
)) {
    echo "<script>
        alert('Incorrect current password!');
        window.location.href = 'AccountSetting.php';
    </script>";
    exit();
}

if ($new_password !== $confirm_password) {
    echo "<script>
        alert('New passwords do not match!');
        window.location.href = 'AccountSetting.php';
    </script>";
    exit();
}

$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

$_SESSION['users'][$username]['password'] = $hashed_password;
$_SESSION['profile']['password'] = $hashed_password;

echo "<script>
    alert('Password changed successfully!');
    window.location.href = 'AccountSetting.php';
</script>";
exit();
?>
