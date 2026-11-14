<?php
include 'db.php';

$message = "";
$msg_type = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    
    $image_path = null;
    
    if (isset($_FILES['announcement_image']) && $_FILES['announcement_image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        $file_name = time() . '_' . basename($_FILES['announcement_image']['name']);
        $image_path = $upload_dir . $file_name;
        move_uploaded_file($_FILES['announcement_image']['tmp_name'], $image_path);
    }

    $query = "INSERT INTO announcements (title, content, image_path) VALUES ('$title', '$content', '$image_path')";
    
    if (mysqli_query($conn, $query)) {
        $message = "Announcement published successfully and pushed to user dashboards!";
        $msg_type = "success";
    } else {
        $message = "Error: " . mysqli_error($conn);
        $msg_type = "danger";
    }
}
?>