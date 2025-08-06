<?php
session_start();
if ($_POST && $_POST['username'] === 'admin' && $_POST['password'] === 'admin123') {
    $_SESSION['logged_in'] = true;
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Login</title></head>
<body>
  <h2>Login</h2>
  <form method="POST">
    <input name="username" placeholder="Username" required><br>
    <input name="password" type="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
