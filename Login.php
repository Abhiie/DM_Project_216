<?php
// Include config file
require_once "configuration.php";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $uname = $_POST['txtUserID'];
		$pass = $_POST['txtPwd'];
		//$uname = mysql_real_escape_string($_POST['txtUserID']);
		//$pass = mysql_real_escape_string($_POST['txtPwd'];
        $sql = "SELECT * FROM login WHERE Uname='$uname' AND Pwd='$pass'";
		if ($result = $link -> query($sql)) {
		session_start();
		while($row = $result->fetch_assoc()) {
		$_SESSION['user'] = $row["Uname"];
		$_SESSION['userid'] = $row["id"];
		header("Location:profile.php");
  }
		
		
		if($result->num_rows==0)
		{
			
            header("Location:invalid.php");
		}
		// Free result set
		$result -> free_result();
}
else{
	echo "invalid;";
}

    // Close connection
    mysqli_close($link);
}
?>