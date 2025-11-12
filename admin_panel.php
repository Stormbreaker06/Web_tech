<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
  header("Location: admin_login.php");
  exit();
}

include 'db_config.php';
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="admin-header">
  <h2>Admin Dashboard</h2>
  <a href="logout.php" class="logout-btn">Logout</a>
</div>


  <div class="dashboard-container">
    <h2>Registered Students</h2>
    <table>
      <tr>
        <th>USN</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course</th>
      </tr>

      <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row['usn']) ?></td>
        <td><?= htmlspecialchars($row['full_name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['phone']) ?></td>
        <td><?= htmlspecialchars($row['course']) ?></td>
      </tr>
      <?php endwhile; ?>
    </table>
  </div>
</body>
</html>
