<?php
session_start();
include_once 'configuration.php';
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $result = mysqli_query($link,"SELECT * FROM login where Uname='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result); 
	$user_id=$row['Uname'];
	$email_id=$row['Email'];
  $token = $row['token'];
  if($user_id==$user_id) {
    $to = $email_id;
    $txt = "Hi, $user_id. Click http://localhost/Vaccine/reset_password.php?token=$token to reset the password";
    $headers = "From: dmlabdemo@gmail.com";
    $subject = "Reset Password";
     $msg=mail($to,$subject,$txt,$headers);
    if($msg){
      $_SESSION['msg'] = 'password link sent';
    }
    else{
    echo "mail was not sent!!";			}
  } 
				else{
					echo 'invalid userid';
				}
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>EVax</title>
</head>
<body>
<!- -!>
<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="post">
				<h1>Forgot Password</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
				</div>
				<span>or use your account</span>
                <input type='text' name='user_id' Placeholder="Enter your id"/>
                <input type='submit' name='submit' value='Submit'/>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Welcome User</h1>
					<p>Update your password here.</p>
				</div>
			</div>
		</div>
	</div>
