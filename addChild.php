<?php
session_start();
require_once "configuration.php";
if(isset($_POST["submit"]))
{
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
$in_ch=mysqli_query($link,"insert into child(Child_name,Child_gender,Child_city,Child_birth,Child_age,Child_weight,Child_height,Child_Vax,Username) values ('$ChildName','$ChildG','$ChildC','$ChildB','$ChildA','$ChildW','$ChildH','$chkF','$uname')"); 
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  


   //other vaccineDate
   $checkbox1=$_POST['chk']; 
   $ChildB = $_POST['birthday'];
   $today = $ChildB;
  

   for ($i=0; $i<sizeof ($checkbox1);$i++) {  
       if($checkbox1[$i] == "BCG")
       {
           $d = strtotime("+1 week",strtotime($ChildB));
           $final= date("Y-m-d",$d);
                   $query="INSERT INTO vaccineDate (name,Vaccine_date,Due_date,Uname,childN) VALUES ('$checkbox1[$i]','$ChildB','$final','$uname','$ChildName')";  
                   mysqli_query($link,$query) ;
       }
       elseif($checkbox1[$i] == "Ipv")
       {
           $d = strtotime("+9 week",strtotime($ChildB));
$final= date("Y-m-d",$d);
       $query="INSERT INTO vaccineDate (name,Vaccine_date,Due_date,Uname,childN) VALUES ('$checkbox1[$i]','$ChildB','$final','$uname','$ChildName')";  
       mysqli_query($link,$query) ;
       }
       elseif($checkbox1[$i] == "Rotavirus")
       {
           $d = strtotime("+2 months",strtotime($ChildB));
$final= date("Y-m-d",$d);
       $query="INSERT INTO vaccineDate (name,Vaccine_date,Due_date,Uname,childN) VALUES ('$checkbox1[$i]','$ChildB','$final','$uname','$ChildName')";  
       mysqli_query($link,$query) ;
       }
       elseif($checkbox1[$i] == "Hepatitis A vaccine")
       {
           $d = strtotime("+12 months",strtotime($ChildB));
$final= date("Y-m-d",$d);
       $query="INSERT INTO vaccineDate (name,Vaccine_date,Due_date,Uname,childN) VALUES ('$checkbox1[$i]','$ChildB','$final','$uname','$ChildName')";  
       mysqli_query($link,$query) ;
       }
   }  
      





   //VaccineDate
  

}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styleAddChild.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>EVax</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<h1>Add child</h1>
             
				<input type="text" placeholder="Enter Your Child Full Name" name="txtChildName"/><br>
                Choose Gender
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="Female">FeMale
                <select name="City" id="City"><br>
                <option value="Gandhidham">Gandhidham</option>
                <option value="Anjar">Anjar</option>
                <option value="Bhuj">Bhuj</option>
                </select><br>
                Choose Birthdate
                <input type="date" id="birthday" name="birthday"><br>
                <input type="text" placeholder="Enter Your Child Age" name="txtAge"  /><br>
                <input type="text" placeholder="Enter Your child weight in kg" name="txtWeight"  /><br>
                <input type="text" placeholder="Enter Your child height ft" name="txtHeight"  /><br>
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