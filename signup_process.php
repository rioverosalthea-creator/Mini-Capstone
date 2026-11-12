
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: signup.php");
    exit();
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

if ($password !== $confirm_password) {
    echo "<script>
        alert('Passwords do not match!');
        window.location.href = 'signup.php';
    </script>";
    exit();
}

if (isset($_SESSION['users'][$username])) {
    echo "<script>
        alert('Username already exists!');
        window.location.href = 'signup.php';
    </script>";
    exit();
}

if (!isset($_SESSION['next_resident_number'])) {
    $_SESSION['next_resident_number'] = 1;
}

$resident_number = 'RES-' . str_pad(
    $_SESSION['next_resident_number'],
    3,
    '0',
    STR_PAD_LEFT
);

$_SESSION['next_resident_number']++;

$_SESSION['users'][$username] = [
    'resident_number' => $resident_number,

    'full_name' => $_POST['full_name'] ?? '',
    'birth_date' => $_POST['birth_date'] ?? '',
    'sex' => $_POST['sex'] ?? '',
    'civil_status' => $_POST['civil_status'] ?? '',
    'occupation' => $_POST['occupation'] ?? '',
    'complete_address' => $_POST['complete_address'] ?? '',

    'mobile_number' => $_POST['mobile_number'] ?? '',
    'email' => $_POST['email'] ?? '',
    'emergency_contact_name' => $_POST['emergency_contact_name'] ?? '',
    'emergency_contact_number' => $_POST['emergency_contact_number'] ?? '',

    'household_number' => $_POST['household_number'] ?? '',
    'family_head' => $_POST['family_head'] ?? '',
    'purok' => $_POST['purok'] ?? '',

    'username' => $username,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'account_type' => 'Resident'
];

echo "<script>
    alert('Account created successfully! Your Resident Number is $resident_number');
    window.location.href = 'login.php';
</script>";
exit();
?>
