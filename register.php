<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="res/master.css" type="text/css" charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
		<title>AU Pollutant Index - Register</title>
	</head>
	<body>
		<div class="hero">
			<div class="login-box">
				<img src="res/login.png" alt=""/>
				<h1>Create an Account</h1>
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$db = mysqli_connect('localhost', 'root', 'toor9812', 'dev');
				$email=$_POST['email'];
				$password=$_POST['password'];
				$passwordRPT=$_POST['passwordRPT'];
				
				if(empty($email) || empty($password) || empty($passwordRPT)){
					echo "<p id='err'>All Fields Are Required!</p>";	
					echo "<a id='failed' href='register.php'>TRY AGAIN</p>";	
					exit();
				}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					echo "<p id='err'>Invalid Email Address!</p>";	
					echo "<a id='failed' href='register.php'>TRY AGAIN</p>";	
					exit();
				}else if($password !== $passwordRPT){
					echo "<p id='err'>Passwords Do Not Match!</p>";	
					echo "<a id='failed' href='register.php'>TRY AGAIN</p>";	
					exit();
				}else{
					$sql="select UserEmail from Users where UserEmail=?";
					$stmt = mysqli_stmt_init($db);
					if(!mysqli_stmt_prepare($stmt, $sql)){
						echo "<p id='err'>Connection Failed!</p>";	
						echo "<a id='failed' href='register.php'>TRY AGAIN</p>";	
						exit();
					}else{
						mysqli_stmt_bind_param($stmt, "s", $email);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						$check=mysqli_stmt_num_rows($stmt);
						if($check > 0){
							echo "<p id='err'>Email Already Used!</p>";	
							echo "<a id='failed' href='register.php'>TRY AGAIN</p>";	
							exit();
						}else{
							$priv="user";
							$hash=password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
							$sql="insert into Users (UserEmail, UserPassword, priv) values (?,?,?)";
							$stmt = mysqli_stmt_init($db);
							mysqli_stmt_prepare($stmt, $sql);
							mysqli_stmt_bind_param($stmt, 'sss', $email, $hash, $priv);
							mysqli_stmt_execute($stmt);
							header("Location: auth.php");
							exit();
						}
					}
				}
			}
		?>
				<form action="register.php" method="post">
					<input type="text" autofocus="true" autocomplete="off" placeholder="Email" name="email" class="field"/>	
					<input type="password" autocomplete="off" placeholder="Password" name="password" class="field"/>	
					<input type="password" autocomplete="off" placeholder="Confirm Password" name="passwordRPT" class="field"/>	
					<input type="submit" value="REGISTER" name="submit" id="submit"/>	
					<a href="auth.php" id="reg">Already Have An Account?</a>
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
