<?php
	session_start();
	include "connect.php";
	if (isset($_POST['submit'])) {
		$mail =$_POST['mail'];
		$pass =$_POST['pass'];
		$sql="INSERT INTO users(Email,Password) VALUES('$mail','$pass')";
		$result=$con->query($sql);
		if ($result===TRUE) {
			header("location:login.php");
		}else{
			echo "Data not insert";
		}
	}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Log in</title>
		<link rel="stylesheet" type="text/css" href="Styles/style.css">
	</head>
	<body>
		<header>
			<div class="left-header">
			<h3>Log in system</h3>
			</div>
			<div class="right-header">
				<ul>
					<li><a href="loginPage.php" class="log_sign">Sign up </a></li>
					<li><a href="login.php" class="log_in">Login</a></li>
				</ul>
			</div>
		</header>
		<div class="content">
			<form  method="POST" action="loginPage.php">
				<table>
					<tr>
						<td>Your Email</td>
						<td><input type="email" name="mail" class="input_sign" placeholder="Your Email"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="Password" name="pass" class="input_sign" placeholder="Password"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Sign up" class="input_sign_submit">
							<input type="reset" name="reset" value="Clear" class="input_sign_reset">
						</td>

					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
