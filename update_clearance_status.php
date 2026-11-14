
<?php
session_start();

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

$updated = false;

foreach ($_SESSION['clearance_requests'] ?? [] as $index => $request) {
    if (($request['request_id'] ?? '') === $request_id) {
        $_SESSION['clearance_requests'][$index]['request_status'] = $request_status;
        $updated = true;
        break;
    }
}

if (isset($_SESSION['document_requests'])) {
    foreach ($_SESSION['document_requests'] as $index => $document) {
        if (($document['request_id'] ?? '') === $request_id) {
            $_SESSION['document_requests'][$index]['request_status'] = $request_status;
        }
    }
}

if ($updated) {
    echo "<script>
        alert('Clearance status updated successfully!');
        window.location.href = 'clearance.php';
    </script>";
} else {
    echo "<script>
        alert('Clearance request not found!');
        window.location.href = 'clearance.php';
    </script>";
}

exit();
?>
