<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="res/master.css" type="text/css" charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
		<title>AU Pollutant Index - Login</title>
	</head>
	<body>
		<div class="hero">
			<div class="login-box">
				<img src="res/login.png" alt=""/>
				<h1>Login to Continue</h1>
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$db = mysqli_connect('localhost', 'root', 'toor9812', 'dev');
				$username = strip_tags($_POST['username']);
				$password = strip_tags($_POST['userpass']);

				$username = stripslashes($username);
				$password = stripslashes($password);

				$username = mysqli_real_escape_string($db, $username);
				$password = mysqli_real_escape_string($db, $password);


				$sql = "SELECT * FROM Users WHERE BINARY UserEmail='$username' LIMIT 1";
				$query = mysqli_query($db, $sql);
				$row = mysqli_fetch_array($query);
				$id = $row['UID'];
				$priv = $row['priv'];
				$db_password = $row['UserPassword'];



				if(password_verify($password, $db_password)){
					$_SESSION['UserEmail'] = "$username";
					$_SESSION['UID'] = "$id";
					if($priv == "admin"){
						header("Location: admin-dashboard.php");
					}else{
						header("Location: index.php");
					}
				}else{
					echo "<p id='err'>Incorrect Username or Password</p>";
				}
			}
		?>
				<form action="auth.php" method="post">
					<input type="text" autofocus="true" autocomplete="off" placeholder="Email" name="username" class="field"/>	
					<input type="password" autocomplete="off" placeholder="Password" name="userpass" class="field"/>	
					<input type="submit" value="LOGIN" name="submit" id="submit"/>	
					<a href="register.php" id="reg">Don't Have An Account?</a>
				</form>
				<div class="links">
					<a href="#">Legal Disclaimers</a>
					<a href="#">Attributions</a>
					<a href="#">FAQ</a>
				</div>
			</div>
		</div>
	</body>
</html>
