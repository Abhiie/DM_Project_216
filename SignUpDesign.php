<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styleRegistration.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>EVax</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>

<script type="text/javascript">
	 $(function () {
            $("#txtN").keypress(function (e) {
                var keyCode = e.keyCode || e.which;

                $("#Message").html("");

                //Regex for Valid Characters i.e. Alphabets.
                var regex = /^[A-Za-z]+$/;

                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                   // alert("Alphabets are allowed")
                   $("#Message").html("Alphabets are allowed");

                }

                return isValid;
            });
        });
	function passCheck()
	{
	var p1=document.getElementById("cpass").value;
	var p2=document.getElementById("cpass1").value;
	if (p1!=p2)
	{
		
		document.getElementById("Pass1").innerHTML="**Password must be same";
		return false;
	}
	
	
	}
	
</script>

</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="post">
				<h1>Sign Up</h1>
				<input type="text" placeholder="Enter Your Child's Name" id="txtN" name="txtN" autocomplete="off" required/>
				<span id="Message" style="color:red"></span>
                <input type="Email" placeholder="Enter Your Email Address" name="txtEmail" autocomplete="off" required/>
                <input type="text" placeholder="Enter Your Unique id" name="txtId"  />
                <input type="password" placeholder="Enter Your Password" name="txtPwd" id="cpass" autocomplete="off" required/>
				<span id="Pass" style="color:red"></span>
                <input type="password" placeholder="Re-Enter Your Password" name="txtCPwd"  id="cpass1"autocomplete="off" onfocusout="passCheck()" required/>
				<span id="Pass1" style="color:red"></span>
        <button type="submit" formaction="SignUp.php">SignUp</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Welcome User</h1>
					<p>Register Yourself.Stay safe Stay Happie.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>