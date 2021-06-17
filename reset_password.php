<?php
	session_start();
	if(isset($_GET['token'])){
		$_SESSION['token']=$_GET['token'];
	}
	else{
		echo " done!!";
			if($_POST['Password']!=$_POST['Confirm_Password']){
				echo "Paswords are not matched";
			}
			else{
				require_once "configuration.php";
				$Password = $_POST['Password'];
				$token =  $_SESSION['token'];
				$query = "UPDATE login SET Pwd='$Password' WHERE token = '$token'";
				$result = mysqli_query($link,$query);
				//redirect to log in page 
				header('Location:index.php');
			}
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>EVax</title>
</head>
<body>

<div class="container" id="container">
		<div class="form-container log-in-container">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<h1>Forgot Password</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
				</div>
				<span>or use your account</span>
				<input type="password" name="Password" placeholder="New Password">
	<input type="password" name="Confirm_Password" placeholder="Confirm New Password">
        <button type="submit">Confirm</button>
       
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Welcome User</h1>
					<p>Add new password.Stay safe Stay Happie.</p>
				</div>
			</div>
		</div>
	</div>

</body>
</html>