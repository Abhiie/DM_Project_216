<?php
session_start();
require_once "configuration.php";
$id=$_REQUEST['id'];
$query = "DELETE FROM child WHERE id=$id"; 
$result = mysqli_query($link,$query) or die ( mysqli_error());
header("Location: ViewChildDetails.php"); 
?>