<?php
session_start();
require_once "db.php";

if (
    !isset($_SESSION['user_id']) ||
    !isset($_SESSION['role']) ||
    $_SESSION['role'] !== 'resident'
) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: Complaint.php");
    exit();
}

$fullname = trim($_POST['fullname'] ?? '');
$contact_number = trim($_POST['contact_number'] ?? '');
$address = trim($_POST['address'] ?? '');
$respondent_name = trim($_POST['respondent_name'] ?? '');
$respondent_address = trim($_POST['respondent_address'] ?? '');
$complaint = trim($_POST['complaint'] ?? '');
$incident_date = $_POST['incident_date'] ?? '';
$incident_time = $_POST['incident_time'] ?? '';
$location = trim($_POST['location'] ?? '');
$description = trim($_POST['description'] ?? '');

$user_id = $_SESSION['user_id'];

// Validate required fields
if (
    $fullname === '' ||
    $contact_number === '' ||
    $address === '' ||
    $respondent_name === '' ||
    $complaint === '' ||
    $incident_date === '' ||
    $incident_time === '' ||
    $location === '' ||
    $description === ''
) {
    echo "<script>
        alert('Please complete all required fields!');
        window.location.href = 'Complaint.php';
    </script>";
    exit();
}

$request_id = 'CMP-' . date('ymd') . random_int(100000, 999999);

$sql = "INSERT INTO complaint_requests (
    request_id,
    user_id,
    fullname,
    contact_number,
    address,
    respondent_name,
    respondent_address,
    complaint,
    incident_date,
    incident_time,
    location,
    description
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL preparation failed: " . $conn->error);
}

$stmt->bind_param(
    "sissssssssss",
    $request_id,
    $user_id,
    $fullname,
    $contact_number,
    $address,
    $respondent_name,
    $respondent_address,
    $complaint,
    $incident_date,
    $incident_time,
    $location,
    $description
);

if ($stmt->execute()) {
    echo "<script>
        alert('Complaint submitted successfully!');
        window.location.href = 'Profile.php';
    </script>";
} else {
    echo "Complaint submission failed: " .
         htmlspecialchars($stmt->error);
}

$stmt->close();
$conn->close();
exit();
?>
