<!DOCTYPE html>
<html>
<head>
	<title>45746865724e616c20507269766174652057656273697465</title>
	<link rel="stylesheet" href="../style/mainpage.css">
</head>
<body>
	<audio id="player" preload="auto" autoplay="autoplay" loop>
		<source src="../src/audio/Strangers.mp3" type="audio/mp3">
	</audio>

	<script>
		var audio = document.getElementById("player");
		audio.volume = 0.5
	</script>

	<header>
		<h1 class="judul">EtherNal Private Website</h1>
		<p class="deskripsi">- .... .. ... / .. ... / .- / - . -- .--. .-.. .- - . / ..-. .-. --- -- / -- .- .-.. .- ... -. --. --- -.. .. -. --. .-.-.- -.-. --- --</p>
	</header>
	
	<div class="wrap">
		<div class="menu-malasngoding">
            <ul>
                <li class="menu"><a href="homepage.php">Home</a></li>
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
				<a href="accountpage/ethernal.php">@EtherNal</a>
			</div>
			<div class="widget">
				<h2>Download my godot main menu</h2>
				<a href="../src/download/main_menu.zip" download>Download</a>
			</div>
		</aside>

		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					Posted by <b>EtherNal</b>, Aug 23, 2023
				</div>
				<iframe src="https://www.youtube-nocookie.com/embed/NitUinQSV6s?si=9pk86MaR5VqYDGOa" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				<h1> Modern Warfare III Gameplay is out </h1>
				<hr>
				<p>
					The gameplay of Modern Warfare III has been announced
				</p>				
				<a href="https://www.youtube.com/watch?v=NitUinQSV6s" target="_blank" class="continue-lendo">View Video</a>
			</div>
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Diki Alfarabi Hadi</b>
				</div>
				<img src="https://www.malasngoding.com/wp-content/uploads/2016/02/tutorial-html-bahasa-indonesia.png">
				<h1> CS:GO 2 Beta </h1>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>				
				<a href="#" class="continue-lendo">Selengkapnya</a>
			</div>
		</div>
	</div>

</body>
</html>