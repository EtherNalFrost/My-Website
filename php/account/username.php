<?php
$conn = mysqli_connect("localhost", "root", "", "user-level");
mysqli_select_db($conn, "user-level");
$query = "SELECT displayname FROM user WHERE id = 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
echo $row['displayname'];
mysqli_close($conn);
?>