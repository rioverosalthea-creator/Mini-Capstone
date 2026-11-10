<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['user_id'] = 1;

    header("Location: index.php");
    exit();
}
?>