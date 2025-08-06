<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit();
}
$about = file_get_contents('../data/about.json');
$projects = file_get_contents('../data/projects.json');
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
  <h2>Admin Dashboard</h2>
  <a href="logout.php">Logout</a>
  
  <h3>Edit About Info</h3>
  <form method="POST" action="update_about.php">
    <textarea name="about"><?php echo $about; ?></textarea><br>
    <button type="submit">Update</button>
  </form>

  <h3>Edit Projects</h3>
  <form method="POST" action="update_projects.php">
    <textarea name="projects"><?php echo $projects; ?></textarea><br>
    <button type="submit">Update</button>
  </form>
</body>
</html>
