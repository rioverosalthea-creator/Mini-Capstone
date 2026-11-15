<?php
require_once "db.php";

$username = "admin123";
$password = password_hash("admin222", PASSWORD_DEFAULT);

$sql = "UPDATE users
        SET password = ?, role = 'admin'
        WHERE username = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $password, $username);

if ($stmt->execute()) {

    $check = $conn->prepare(
        "SELECT password FROM users WHERE username = ?"
    );

    $check->bind_param("s", $username);
    $check->execute();

    $result = $check->get_result();
    $admin = $result->fetch_assoc();

    if ($admin && password_verify("admin222", $admin['password'])) {
        echo "SUCCESS! Admin password updated and verified.";
    } else {
        echo "Password verification failed.";
    }

    $check->close();

} else {
    echo "Database error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>