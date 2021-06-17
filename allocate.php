<?php
session_start();
require_once "configuration.php";
$id=$_REQUEST['id'];
$in_ch=mysqli_query($link,"update vaccinedate set status='Allocated' where id='".$id."'"); 
    if($in_ch==1)  
       {  
          echo'<script>alert("Updates Successfully")</script>';  
          header("Location: AllocateVaccine.php");
       }  
    else  
       {  
          echo'<script>alert("Failed To update")</script>';  
       } 

?>