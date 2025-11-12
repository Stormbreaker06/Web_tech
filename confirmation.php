<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Successful</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="form-container">
    <h2>Registration Successful </h2>
    <p>Here’s what you submitted:</p>
    <table cellpadding="10" cellspacing="0">
      <tr><th>Full Name</th><td><?php echo htmlspecialchars($_GET['name']); ?></td></tr>
      <tr><th>Email</th><td><?php echo htmlspecialchars($_GET['email']); ?></td></tr>
      <tr><th>Phone</th><td><?php echo htmlspecialchars($_GET['phone']); ?></td></tr>
      <tr><th>Course</th><td><?php echo htmlspecialchars($_GET['course']); ?></td></tr>
    </table>
    <br>
    <a href="index.html" class="admin-btn">Go Back Home</a>
  </div>
</body>
</html>
