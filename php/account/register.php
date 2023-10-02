<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="../../style/login.css">
</head>
<body>
	<?php
	session_start();
	if(isset($_POST['submit']))
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Register</p>
 
		<form action="register_action.php" method="post">
			<label>Display name</label>
			<input type="text" name="display_name" class="form_login" placeholder="Display Name .." required="required">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<input type="submit" class="tombol_login" value="Register">
 
			<br/>
			<br/>
			<a class="link" href="../homepage.php">Back</a>
		</form>
		
	</div>
 
 
</body>
</html>