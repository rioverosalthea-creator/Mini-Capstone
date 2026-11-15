
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
    header("Location: BarangayClearance.php");
    exit();
}

$fullname = trim($_POST['fullname'] ?? '');
$birthdate = $_POST['birthdate'] ?? '';
$sex = trim($_POST['sex'] ?? '');
$status = trim($_POST['status'] ?? '');
$contact_number = trim($_POST['contact_number'] ?? '');
$address = trim($_POST['address'] ?? '');
$purpose = trim($_POST['purpose'] ?? '');
$claim_date = $_POST['claim_date'] ?? '';

$user_id = $_SESSION['user_id'];

if (
    $fullname === '' ||
    $birthdate === '' ||
    $sex === '' ||
    $status === '' ||
    $contact_number === '' ||
    $address === '' ||
    $purpose === '' ||
    $claim_date === ''
) {
    echo "<script>
        alert('Please complete all required fields!');
        window.location.href = 'BarangayClearance.php';
    </script>";
    exit();
}

$request_id = 'CLR-' . date('ymd') . random_int(100000, 999999);

$sql = "INSERT INTO clearance_requests (
    request_id,
    user_id,
    fullname,
    birthdate,
    sex,
    status,
    contact_number,
    address,
    purpose,
    claim_date
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL Error: " . $conn->error);
}

$stmt->bind_param(
    "sissssssss",
    $request_id,
    $user_id,
    $fullname,
    $birthdate,
    $sex,
    $status,
    $contact_number,
    $address,
    $purpose,
    $claim_date
);

if ($stmt->execute()) {
    echo "<script>
        alert('Barangay Clearance request submitted successfully!');
        window.location.href = 'Profile.php';
    </script>";
} else {
    echo "Request submission failed: " . htmlspecialchars($stmt->error);
}

$stmt->close();
$conn->close();
exit();
?>
