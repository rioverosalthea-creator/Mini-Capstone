<?php
session_start();

// 1. Security check: Siguraduhing naka-log in ang admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// 2. Suriin kung galing sa POST method ang request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Kunin at linisin ang caption mula sa input
    $caption = htmlspecialchars(trim($_POST['caption']));
    
    // Pangalan ng folder kung saan ise-save ang mga in-upload na larawan
    $target_dir = "uploads/";
    
    // Kung wala pang "uploads" folder sa project directory, awtomatiko itong gagawin
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    // Buuin ang patutunguhan ng file gamit ang orihinal na pangalan nito
    $target_file = $target_dir . basename($_FILES["gallery_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // 3. I-verify kung talagang larawan ang in-upload
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
    // Kung direktang binuksan ang file na hindi nag-form submit
    header("Location: adminGallery.php");
    exit();
}
?>