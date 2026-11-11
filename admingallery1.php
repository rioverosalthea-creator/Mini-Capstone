<?php
session_start();


if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $caption = htmlspecialchars(trim($_POST['caption']));
    
    
    $target_dir = "uploads/";
    
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $target_file = $target_dir . basename($_FILES["gallery_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gallery_image"]["tmp_name"]);
    if ($check === false) {
        echo "<script>alert('Error: Ang file na ito ay hindi isang balidong larawan.'); window.location.href='adminGallery.php';</script>";
        exit();
    }

    if (move_uploaded_file($_FILES["gallery_image"]["tmp_name"], $target_file)) {
        
        $entry = $target_file . "|" . $caption . "\n";
        file_put_contents("gallery_db.txt", $entry, FILE_APPEND);

        echo "<script>alert('Matagumpay na na-upload ang larawan sa gallery!'); window.location.href='adminGallery.php';</script>";
        exit();
        
    } else {
        echo "<script>alert('May nangyaring problema habang ina-upload ang larawan.'); window.location.href='adminGallery.php';</script>";
        exit();
    }
} else {
    
    header("Location: adminGallery.php");
    exit();
}
?>