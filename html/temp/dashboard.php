<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    die("Access denied. Please login first.");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body>
  <h2>Welcome Admin!</h2>
  <p>Your flag is safely stored in the <code>/backup</code> folder 😏</p>
</body>
</html>

