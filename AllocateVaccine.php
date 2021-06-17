<?php
session_start();
require_once "configuration.php";

?>
<!DOCTYPE html>
<html>
<head>

<title>Status</title>
<link rel="stylesheet" href="css/style.css" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<div class="form">
<p><a href="Admin.php">Home</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" class="table table-success table-striped">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Vaccine Name</strong></th>
<th><strong>Vaccine Date</strong></th>
<th><strong>Due Date</strong></th>
<th><strong>Username</strong></th>
<th><strong>Child name</strong></th>
<th><strong>Status</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$uname=$_SESSION['user'] ;
$sel_query="Select * from vaccineDate  ORDER BY id desc;";
$result = mysqli_query($link,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["Vaccine_date"]; ?></td>
<td align="center"><?php echo $row["Due_date"]; ?></td>
<td align="center"><?php echo $row["Uname"]; ?></td>
<td align="center"><?php echo $row["childN"]; ?></td>

<td align="center">
<?php
 $s=$row["status"];
  if($s!="Allocated")
  {
    ?>
    <a href="allocate.php?id=<?php echo $row["id"]; ?>">Allocate</a>
    <?php
  }
  else
  {
      echo "<span>&#10003;</span>"; 
  }
?>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
<?php include('includes/footer.php');?>
</html>