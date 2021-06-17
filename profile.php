<?php
// Include config file
require_once "configuration.php";
session_start(); 
 

	if(isset($_SESSION['user'])){

        $uname = $_SESSION['user'];
	
		$id = $_SESSION['userid'];
        $sql = "SELECT role_id FROM rolesdetails WHERE user_id='$id'";
		if ($result = $link -> query($sql)) {
		while($row = $result->fetch_assoc()) {
		$role_id = $row['role_id'];
		$sql1 = "SELECT R_name FROM roles WHERE id='$role_id'";
		$result1 = $link -> query($sql1); 
		while($row1 = $result1->fetch_assoc()) {
		$user_role = $row1['R_name'];
		if($user_role == "Admin")
		{
			echo "hello admin";
			header("Location: Admin.php");
exit();
			echo "hello admin";
		}
		else
		{
			echo "hi";
			header("Location: User.php");
			exit();
			//do something meaningful
		
		}
		
		}
		
		
  }
		//echo "Returned rows are: " . $result -> num_rows;
		// Free result set
		$result -> free_result();
}
}
    // Close connection
    mysqli_close($link);
?>