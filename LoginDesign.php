<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>EVax</title>
</head>
<body>


	
<div >
</div><div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="post">
				<h1>Login</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
				</div>
				<span>or use your account</span>
				<input type="text" placeholder="Enter your id" name="txtUserID"/>
				<input type="password" placeholder="Password" name="txtPwd"/>
				<a href="ForgotDesign.php">Forgot your password?</a>
        <button type="submit" formaction="Login.php">Log in</button>
        <br>
        <br>
        <br>
        <br>
        <br>
        <button type="submit" formaction="SignUpDesign.php">SignUp</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Welcome User</h1>
					<p>You can book your vaccine from this site.Stay safe Stay Happie.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>