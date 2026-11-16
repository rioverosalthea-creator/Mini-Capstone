<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: signup.php");
    exit();
}

$fullname = trim($_POST['full_name'] ?? '');
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

$birth_date = $_POST['birth_date'] ?? '';
$sex = $_POST['sex'] ?? '';
$civil_status = $_POST['civil_status'] ?? '';
$occupation = $_POST['occupation'] ?? '';
$complete_address = $_POST['complete_address'] ?? '';

$mobile_number = $_POST['mobile_number'] ?? '';
$emergency_contact_name = $_POST['emergency_contact_name'] ?? '';
$emergency_contact_number = $_POST['emergency_contact_number'] ?? '';

$household_number = $_POST['household_number'] ?? '';
$family_head = $_POST['family_head'] ?? '';
$purok = $_POST['purok'] ?? '';

if (
    $fullname === '' ||
    $username === '' ||
    $email === '' ||
    $password === ''
) {
    echo "<script>
        alert('Please complete the required fields!');
        window.location.href = 'signup.php';
    </script>";
    exit();
}

if ($password !== $confirm_password) {
    echo "<script>
        alert('Passwords do not match!');
        window.location.href = 'signup.php';
    </script>";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
        alert('Invalid email address!');
        window.location.href = 'signup.php';
    </script>";
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (
    fullname,
    username,
    email,
    password,
    role,
    resident_number,
    birth_date,
    sex,
    civil_status,
    occupation,
    complete_address,
    mobile_number,
    emergency_contact_name,
    emergency_contact_number,
    household_number,
    family_head,
    purok
) VALUES (
    ?, ?, ?, ?, 'resident', NULL,
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL preparation failed: " . $conn->error);
}

$stmt->bind_param(
    "sssssssssssssss",
    $fullname,
    $username,
    $email,
    $hashedPassword,
    $birth_date,
    $sex,
    $civil_status,
    $occupation,
    $complete_address,
    $mobile_number,
    $emergency_contact_name,
    $emergency_contact_number,
    $household_number,
    $family_head,
    $purok
);

if ($stmt->execute()) {

    $user_id = $conn->insert_id;

    $resident_number = 'RES-' . str_pad(
        $user_id,
        4,
        '0',
        STR_PAD_LEFT
    );

    $update = $conn->prepare(
        "UPDATE users SET resident_number = ? WHERE user_id = ?"
    );

    $update->bind_param("si", $resident_number, $user_id);
    $update->execute();
    $update->close();

    echo "<script>
        alert('Account created successfully! Your Resident Number is $resident_number');
        window.location.href = 'login.php';
    </script>";

} else {

    if ($stmt->errno == 1062) {
        echo "<script>
            alert('Username or email already exists!');
            window.location.href = 'signup.php';
        </script>";
    } else {
        echo "Registration failed: " . htmlspecialchars($stmt->error);
    }
}

$stmt->close();
$conn->close();
?>
