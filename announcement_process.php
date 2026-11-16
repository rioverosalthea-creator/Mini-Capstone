<?php
date_default_timezone_set('Asia/Manila');

session_start();
include 'db.php'; 

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $category = trim($_POST['category']);
    $content = trim($_POST['content']);

    $stmt = $conn->prepare("INSERT INTO announcements (title, category, content) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $category, $content);
    
    if ($stmt->execute()) {
        $stmt->close();
        header("Location: admin_dashboard.php?announcement=success");
        exit();
    } else {
        $stmt->close();
    }
}

header("Location: admin_dashboard.php?announcement=error");
exit();
?>