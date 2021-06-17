<?php
error_reporting(0);
session_start();
include('includes/header.php');


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
    <center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
    <div class="col">
   <div class="card" style="width: 18rem;">
   <img src="images/invalid.png" class="card-img-top" alt="...">
   <div class="card-body">
      <h5 class="card-title">  invliad details </h5>
     
   </div>
   </div>
</div>
</div>
</div>


</center>
<?php
header( "refresh:2;url=index.php" );
?>
</body>
</html>
<?php include('includes/footer.php');?>