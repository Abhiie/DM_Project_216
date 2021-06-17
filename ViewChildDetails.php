<?php
session_start();
require_once "configuration.php";

?>
<!DOCTYPE html>
<html>
<head>
<style>
#header
{
    width:100%;
    margin-top:1px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


<div class="form">
<p><a href="User.php">Home</a> 
|
| <a href="Logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" class="table table-success table-striped">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Gender</strong></th>
<th><strong>City</strong></th>
<th><strong>Birthdate</strong></th>
<th><strong>Age</strong></th>
<th><strong>Weight</strong></th>
<th><strong>Height</strong></th>
<th><strong>Vaccine</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$uname=$_SESSION['user'] ;
$sel_query="Select * from child where Username='$uname' ORDER BY id desc;";
$result = mysqli_query($link,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>

<td align="center"><?php echo $row["Child_name"]; ?></td>
<td align="center"><?php echo $row["Child_gender"]; ?></td>
<td align="center"><?php echo $row["Child_city"]; ?></td>
<td align="center"><?php echo $row["Child_birth"]; ?></td>
<td align="center"><?php echo $row["Child_age"]; ?></td>
<td align="center"><?php echo $row["Child_weight"]; ?></td>
<td align="center"><?php echo $row["Child_height"]; ?></td>
<td align="center"><?php echo $row["Child_Vax"]; ?></td>
<td align="center">
<a href="editChild.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deleteChild.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
<?php include('includes/footer.php');?>

</html>
