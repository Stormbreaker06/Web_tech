<?php
session_start();

// Simple hardcoded credentials (can be moved to DB later)
$admin_user = "admin";
$admin_pass = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_panel.php");
        exit();
    } else {
        echo "<script>alert('Invalid credentials!'); window.location='admin_login.php';</script>";
    }
}
?>
