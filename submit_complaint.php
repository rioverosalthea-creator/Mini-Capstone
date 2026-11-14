
<?php
session_start();

if (!isset($_SESSION['profile']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'resident') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: Complaint.php");
    exit();
}

$requiredFields = [
    'fullname',
    'contact_number',
    'address',
    'respondent_name',
    'respondent_address',
    'complaint',
    'incident_date',
    'incident_time',
    'location',
    'description'
];

foreach ($requiredFields as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        echo "<script>
            alert('Please complete all complaint fields.');
            window.location.href = 'Complaint.php';
        </script>";
        exit();
    }
}

if (!isset($_SESSION['complaint_requests'])) {
    $_SESSION['complaint_requests'] = [];
}

$request = [
    'request_id' => 'CMP-' . str_pad(
        count($_SESSION['complaint_requests']) + 1,
        3,
        '0',
        STR_PAD_LEFT
    ),

    'fullname' => trim($_POST['fullname']),
    'contact_number' => trim($_POST['contact_number']),
    'address' => trim($_POST['address']),
    'respondent_name' => trim($_POST['respondent_name']),
    'respondent_address' => trim($_POST['respondent_address']),
    'complaint' => trim($_POST['complaint']),
    'incident_date' => $_POST['incident_date'],
    'incident_time' => $_POST['incident_time'],
    'location' => trim($_POST['location']),
    'description' => trim($_POST['description']),

    'request_status' => 'Pending',
    'date_submitted' => date('Y-m-d')
];

$_SESSION['complaint_requests'][] = $request;

echo "<script>
    alert('Complaint submitted successfully!');
    window.location.href = 'Complaint.php';
</script>";
exit();
?>
