<?php
require_once "configuration.php";
// Create linkection
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.

 //

 $Vaccine=$_POST["Vaccine"];
 $sqlSe = "select VaccineName from vaccine where VaccineName='$Vaccine'";
 $result = $link->query($sqlSe);
 
 if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
   echo "This vaccine is already there";
    

   }
 } else {
    mysqli_query($link,"INSERT INTO vaccine (VaccineName) VALUES ('$Vaccine')"); 

    echo " Added Successfully ";
 }


 //

}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

<p><a href="Admin.php">Home</a> 
| <a href="logout.php">Logout</a></p>
<label for="Vaccines">Select a vaccine</label>
  <select name="Vaccine" id="vac">
  
    <option value="BCG">BCG</option>
    <option value="Rotavirus">Rotavirus vaccine</option>
    <option value="HepatitisA">Hepatitis A vaccine</option>
    <option value="Ipv">Ipv</option>
    <option value="OPVBirthdose">OPV Birth dose</option>
    <option value="VitaminA">Vitamin A</option>
  </select>
  <button type="submit" name="submit" >Submit</button>
  <br><br>
  </form>
</body>

<?php include('includes/footer.php');?>
</html>