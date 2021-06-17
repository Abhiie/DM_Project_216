<?php

session_start();

include('includes/header.php');
if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
  
 }
 else
 {
    header("Location: index.php");
 }
?>
<html>
   <head>

   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<title>View Records</title>
</head>
<body>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
    <div class="col">
   <div class="card" style="width: 18rem;">
   <img src="images/AddC.png" class="card-img-top" alt="...">
   <div class="card-body">
      <h5 class="card-title">Add child</h5>
      <p class="card-text">You can add your child form here.</p>
      <a href="addChild.php" class="btn btn-primary">Add child</a>
   </div>
   </div>
</div>
<div class="col">
   <div class="card" style="width: 18rem;">
   <img src="images/ViewC.png" class="card-img-top" alt="...">
   <div class="card-body">
      <h5 class="card-title">View Child</h5>
      <p class="card-text">You can view your child details from here.</p>
      <a href="ViewChildDetails.php" class="btn btn-primary">View Child</a>
   </div>
   </div>
</div>

<div class="col">
   <div class="card" style="width: 18rem;">
   <img src="images/vaccine.png" class="card-img-top" alt="...">
   <div class="card-body">
      <h5 class="card-title">Vaccine status</h5>
      <p class="card-text">You can view your child Vaccine status.</p>
      <a href="allotedStatus.php" class="btn btn-primary">View Child</a>
   </div>
   </div>
</div>
<div class="col">
   <div class="card" style="width: 18rem;">
   <img src="images/rem.png" class="card-img-top" alt="...">
   <div class="card-body">
      <h5 class="card-title">Vaccine reminder</h5>
      <p class="card-text">You can view your vaccine reminders details from here.</p>
      <a href="MyVaccineRemider" class="btn btn-primary">Vaccine reminder</a>
   </div>
   </div>
</div>
</div>
</div>
</div>
<?php include('includes/footer.php');?>
</body>
</html>