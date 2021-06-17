<?php
session_start();
require_once "configuration.php";
$id=$_REQUEST['id'];
$query = "SELECT * from child where id='".$id."'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styleAddChild.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>EVax</title>
</head>
<body>



<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
    //add


    $checkbox1=$_POST['chk'];  
    $ChildName = $_POST['txtChildName'];
    $ChildG = $_POST['gender'];
    $ChildC = $_POST['City'];
    $ChildB = $_POST['birthday'];
    $ChildA = $_POST['txtAge'];
    $ChildW = $_POST['txtWeight'];
    $ChildH = $_POST['txtHeight'];
    $chkF="";
    $uname=$_SESSION['user'] ;
    foreach($checkbox1 as $chk1)  
       {  
          $chkF .= $chk1.",";  
       }   
    $in_ch=mysqli_query($link,"update child set Child_name='".$ChildName."',Child_gender='".$ChildG."', Child_city='".$ChildC."',Child_birth='".$ChildB."' , Child_age='".$ChildA."',Child_weight='".$ChildW."', Child_height='".$ChildH."', Child_vax='".$chkF."'  where id='".$id."'"); 
    if($in_ch==1)  
       {  
          echo'<script>alert("Updates Successfully")</script>';  
          header("Location: ViewChildDetails.php");
       }  
    else  
       {  
          echo'<script>alert("Failed To update")</script>';  
       }  
}
else {
?>




	<div class="container" id="container">
		<div class="form-container log-in-container">
			

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<h1>Sign Up</h1>
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
				<input type="text" placeholder="Enter Your Child Full Name" name="txtChildName" value="<?php echo $row['Child_name']; ?>"/><br>
                Choose Gender<br>
                <?php
                if($row['Child_gender']=="Male")
                {
                ?>
               <input type="radio" name="gender" value="Male" checked="checked"> Male
               <input type="radio" name="gender" value="FeMale"> Female
                <?php
                }
                else
                {
                ?>
                <input type="radio" name="gender" value="Male" > Male
               <input type="radio" name="gender" value="FeMale" checked="checked"> Female
                <?php }?>
                <select name="City" id="City"><br>
                <option value="Gandhidham">Gandhidham</option>
                <option value="Anjar">Anjar</option>
                <option value="Bhuj">Bhuj</option>
                </select><br>
                Choose Birthdate
                <input type="date" id="birthday" name="birthday" value="<?php echo $row['Child_birth']; ?>"><br>
                <input type="text" placeholder="Enter Your Child Age" name="txtAge" value="<?php echo $row['Child_age']; ?>" /><br>
                <input type="text" placeholder="Enter Your child weight" name="txtWeight"  value="<?php echo $row['Child_weight']; ?>"/><br>
                <input type="text" placeholder="Enter Your child height" name="txtHeight"  value="<?php echo $row['Child_height']; ?>"/><br>
                Add vsccine<br>
                <?php

                    $sql = "SELECT VaccineName FROM vaccine";
                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<input type='checkbox' name='chk[]' value=".$row['VaccineName']."> ". $row['VaccineName'];
                      
                    }
                    } else {
                    echo "0 results";
                    }
                    $link->close();

                ?>
        <button type="submit" name="submit" >Submit</button>
        <?php } ?>
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