<?php
require_once "db.php";

$username = "admin123";
$newPassword = "admin222";
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

$stmt = $conn->prepare(
    "UPDATE users SET password = ?, role = 'admin' WHERE username = ?"
);
$stmt->bind_param("ss", $hashedPassword, $username);

if (!$stmt->execute()) {
    die("Database error: " . $stmt->error);
}

echo "Rows updated: " . $stmt->affected_rows . "<br>";

$check = $conn->prepare("SELECT password FROM users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();

$result = $check->get_result();
$admin = $result->fetch_assoc();

if ($admin && password_verify($newPassword, $admin['password'])) {
    echo "SUCCESS! Admin password updated and verified.";
} else {
    echo "Password verification failed.";
}

$stmt->close();
$check->close();
$conn->close();
?>