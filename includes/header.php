<?php

?>
<!DOCTYPE html>
<html>
<head>
<style>
    body {
	background: #f3e0e2;
    }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#FF416C;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
<?php if(strlen($_SESSION['user']))
    {   ?>
				<li><a href="#"></i>Hello -<?php echo htmlentities($_SESSION['user']);?></a></li>
				<?php } ?>
  <li><a href="index.php">Home</a></li>
  
  <?php if(strlen($_SESSION['user'])==0)
    {   ?>
<li><a href="LoginDesign.php">
<i class="material-icons md-18"></i>  Login/Register</a></li>
<?php }
else{ 

?>

					<li><a href="Logout.php">Logout</a></li>
				<?php } ?>	











  <li><a href="#about">About</a></li>
</ul>

</body>
</html>
