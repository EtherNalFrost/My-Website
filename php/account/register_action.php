<?php
$username = $_POST['username'];
$display_name = $_POST['display_name'];
$password = $_POST['password'];
if (empty($username) || empty($display_name) || empty($password)) {
  echo "Please enter a username, display name, and password.";
  exit;
}
$mysqli = new mysqli("localhost", "root", "", "user-level");
$sql = "SELECT * FROM user WHERE username = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  echo "The username is already taken.";
  exit;
}
$sql = "INSERT INTO user (username, display_name, password) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $username, $display_name, $password);
$stmt->execute();
header("Location: login.php");
?>
