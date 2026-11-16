<?php
session_start();
require_once "db.php"; 

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

$user_id = $_SESSION['profile']['user_id'] ?? null;
$username = $_SESSION['profile']['username'] ?? null;

if (!$user_id && !$username) {
    die("Error: User not found in session.");
}

$sql = "DELETE FROM users WHERE user_id = ? OR username = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("is", $user_id, $username);
    $stmt->execute();
    $stmt->close();
}

$_SESSION = [];
session_destroy();

echo "<script>
    alert('Your account has been deleted successfully!');
    window.location.href = 'login.php';
</script>";
exit();
?>