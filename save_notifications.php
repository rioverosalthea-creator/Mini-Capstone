
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

$notifications = [
    'email_notifications' => isset($_POST['email_notifications']),
    'sms_notifications' => isset($_POST['sms_notifications']),
    'announcement_notifications' => isset($_POST['announcement_notifications']),
    'request_notifications' => isset($_POST['request_notifications'])
];

$_SESSION['users'][$username]['notifications'] = $notifications;
$_SESSION['profile']['notifications'] = $notifications;

header("Location: AccountSetting.php?saved=1");
exit();
?>
