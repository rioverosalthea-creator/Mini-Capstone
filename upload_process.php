<?php
date_default_timezone_set('Asia/Manila');

session_start();
include 'db.php'; 

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['gallery_image']) && $_FILES['gallery_image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['gallery_image']['tmp_name'];
        $fileName = $_FILES['gallery_image']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExts = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (in_array($fileExtension, $allowedExts)) {
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $newFileName = uniqid('gal_', true) . '.' . $fileExtension;
            $destPath = $uploadDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {

                $stmt = $conn->prepare("INSERT INTO gallery_photos (image_path) VALUES (?)");
                $stmt->bind_param("s", $destPath);
                $stmt->execute();
                $stmt->close();

                header("Location: admin_dashboard.php?upload=success");
                exit();
            }
        }
    }
}

header("Location: admin_dashboard.php?upload=error");
exit();
?>