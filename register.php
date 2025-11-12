<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usn = $_POST['usn'];
  $name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];

  $sql = "INSERT INTO students (usn, full_name, email, phone, course) 
          VALUES ('$usn', '$name', '$email', '$phone', '$course')";
  
  if ($conn->query($sql) === TRUE) {
  // Redirect to confirmation page with query params
  header("Location: confirmation.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&phone=" . urlencode($phone) . "&course=" . urlencode($course));
  exit();
} else {
  echo "Error: " . $conn->error;
}

}
$conn->close();
?>
