<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    // echo "Database created or already exists.";
} else {
    die("Error creating database: " . $conn->error);
}

$conn->select_db($dbname);

// Create table if not exists
$table = "CREATE TABLE IF NOT EXISTS students (
    usn VARCHAR(20) PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(15),
    course VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($table) === TRUE) {
    // echo "Table ready.";
} else {
    die('Error creating table: ' . $conn->error);
}
?>
