<?php
session_start();

if(isset($_SESSION['auth'])){
	header('location:dashboard.php');
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>College of Industrial Technology</title>
</head>
<body>

<form method="post" action="functions/auth_login.php">
	<div class="box">
		<div class="container">
			<div class="top-header">
				<span>Welcome</span>
				<header>Login as Admin</header>
			</div>
			<div class="input-field">
				<input type="text" class="input" placeholder="Username" required name="username">
				<i class='bx bx-user'></i>
			</div>
			<div class="input-field">
				<input type="password" class="input" placeholder="Password" required name ="password">
				<i class='bx bx-lock-alt'></i>
			</div>
			<div class="input-field">
				<input type="submit" class="submit" value="Login" name ="submit">
			</div>
			<div class="bottom">
				<div class="left">
					<input type="checkbox" id="check">
					<label for="check">Remember Me</label>
				</div>
				<div class="right">
					<label><a href="student_register.php">Student Registration</a></label>
				</div>
			</div>
		</div>
	</div>
</form>
	 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html> 
