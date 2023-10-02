<!DOCTYPE html>
<html>
<head>
	<title>EtherNal</title>
	<link rel="stylesheet" href="../../style/accountpage/ethernal.css">
</head>
<body>
	<audio id="player" preload="auto" autoplay="autoplay" loop>
		<source src="src/audio/Strangers.mp3" type="audio/mp3">
	</audio>	

	<header>
		<h1 class="judul">EtherNal Private Website</h1>
		<p class="deskripsi">- .... .. ... / .. ... / .- / - . -- .--. .-.. .- - . / ..-. .-. --- -- / -- .- .-.. .- ... -. --. --- -.. .. -. --. .-.-.- -.-. --- --</p>
	</header>
	
	<div class="wrap">
		<div class="menu-malasngoding">
            <ul>
                <li class="menu"><a href="../homepage.php">Home</a></li>
                <li class="menu"><a href="#">Information</a></li>
                <li class="dropdown"><a href="#">
				<?php
				session_start();
				if (isset($_SESSION['username'])) {
  					$username = $_SESSION['username'];
					$mysql = new mysqli("localhost", "root", "", "user-level");
  					$query = "SELECT display_name FROM user WHERE username = '$username'";
  					$result = $mysql->query($query);
  					$row = mysqli_fetch_assoc($result);
  					if (isset($row['display_name'])) {
					$display_name = $row['display_name'];
					}
					echo "Welcome, $display_name!";
				} else {
 					echo "You are not logged in.";
				}
				?>
				</a>
                    <ul class="isi-dropdown">
					<?php
					if (!isset($_SESSION['username'])) {
						echo '<li><a href="account/register.php" class="register-link">Register</a></li>';
						echo '<li><a href="account/login.php" class="login-link">Login</a></li>';
					} else if ($_SESSION['level'] == "owner") {
						echo '<li><a href="../secret">Secret</a></li>';
						echo '<li><a href="settings.php" class="settings-link">Settings</a></li>';
						echo '<li><a href="account/logout.php" class="logout-link">Logout</a></li>';
					} else {
						echo '<li><a href="settings.php" class="settings-link">Settings</a></li>';
						echo '<li><a href="account/logout.php" class="logout-link">Logout</a></li>';
					}
					?>
                    </ul>
                </li>
            </ul>
		</div>

		<aside class="sidebar">
			<div class="widget">
				<h2>Website Status</h2>
				<p>Website in development</p>
			</div>
			<div class="widget">
				<h2>Owner</h2>
				<p>@EtherNal</p>
			</div>
			<div class="widget">
				<h2>Download my godot main menu</h2>
				<a href="../download/main_menu.zip" download>Download</a>
			</div>
		</aside>

		<div class="accountinfo">
			<div class="conteudo">
				<div>
					<img class="pfp">
					<h1><?php include 'key/displayname.php'?> | <class="level"><?php include 'key/level.php'?></class></h1>
					<h3>The maker of the web, and some stupid teen</h3>
				</div>

			</div>
		</div>
	</div>

</body>
</html>