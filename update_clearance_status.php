
<?php
session_start();
require_once "db.php";

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: clearance.php");
    exit();
}

$request_id = $_POST['request_id'] ?? '';
$request_status = $_POST['request_status'] ?? '';

$allowed_statuses = ['Pending', 'Approved', 'Rejected'];

if (
    $request_id === '' ||
    !in_array($request_status, $allowed_statuses, true)
) {
    echo "<script>
        alert('Invalid request information!');
        window.location.href = 'clearance.php';
    </script>";
    exit();
}

$check = $conn->prepare(
    "SELECT request_id FROM clearance_requests WHERE request_id = ?"
);

$check->bind_param("s", $request_id);
$check->execute();
$result = $check->get_result();

if ($result->num_rows === 0) {
    echo "<script>
        alert('Clearance request not found!');
        window.location.href = 'clearance.php';
    </script>";
    $check->close();
    exit();
}

$check->close();

$stmt = $conn->prepare(
    "UPDATE clearance_requests
     SET request_status = ?
     WHERE request_id = ?"
);

$stmt->bind_param("ss", $request_status, $request_id);

if ($stmt->execute()) {
    echo "<script>
        alert('Clearance status updated successfully!');
        window.location.href = 'clearance.php';
    </script>";
} else {
    echo "<script>
        alert('Failed to update clearance status!');
        window.location.href = 'clearance.php';
    </script>";
}

$stmt->close();
$conn->close();
exit();
?>
