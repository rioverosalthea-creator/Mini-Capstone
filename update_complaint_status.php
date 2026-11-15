
<?php
session_start();
require_once "db.php";

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] !== "POST" ||
    empty($_POST['request_id']) ||
    empty($_POST['request_status'])) {
    die("Invalid request information.");
}

$request_id = $_POST['request_id'];
$status = $_POST['request_status'];


$allowed_statuses = ['Pending', 'Approved', 'Rejected'];

if (!in_array($status, $allowed_statuses, true)) {
    die("Invalid status.");
}


$sql = "UPDATE complaint_requests SET request_status = ? WHERE request_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $status, $request_id);

if ($stmt->execute()) {
    header("Location: clearance.php");
    exit();
} else {
    echo "Error updating complaint status: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
