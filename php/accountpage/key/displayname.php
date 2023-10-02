<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user-level";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn, $dbname);
$sql = "SELECT display_name FROM user WHERE id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$display_name = $row['display_name'];
echo "@$display_name";
mysqli_close($conn);
?>
