<?php
$conn= mysqli("localhost", "root", "", "barangay_db");

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
?>