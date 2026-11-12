
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: BarangayClearance.php");
    exit();
}

if (!isset($_SESSION['clearance_requests'])) {
    $_SESSION['clearance_requests'] = [];
}

$request = [
    'request_id' => 'CLR-' . str_pad(
        count($_SESSION['clearance_requests']) + 1,
        3,
        '0',
        STR_PAD_LEFT
    ),

    'fullname' => $_POST['fullname'] ?? '',
    'birthdate' => $_POST['birthdate'] ?? '',
    'sex' => $_POST['sex'] ?? '',
    'status' => $_POST['status'] ?? '',
    'contact_number' => $_POST['contact_number'] ?? '',
    'address' => $_POST['address'] ?? '',
    'purpose' => $_POST['purpose'] ?? '',
    'claim_date' => $_POST['claim_date'] ?? '',
    'request_status' => 'Pending',
    'date_submitted' => date('Y-m-d')
];

$_SESSION['clearance_requests'][] = $request;

echo "<script>
    alert('Your Barangay Clearance request has been submitted successfully!');
    window.location.href = 'BarangayClearance.php';
</script>";

exit();
?>
