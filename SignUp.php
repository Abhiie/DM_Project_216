<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth";
$ChildName = $_POST["txtN"];
$EmailAdd = $_POST['txtEmail'];
$id = $_POST['txtId'];
$ChildPwd = $_POST['txtPwd'];
$token = md5($EmailAdd).rand(10,9999);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO login (Uname, Pwd,Email,token,Child_name)
VALUES ('$id', '$ChildPwd', '$EmailAdd','$token','$ChildName')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Select last row
$sqlSe = "select id from login where Uname='$id'";
$result = $conn->query($sqlSe);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $idUser=$row["id"];
    //

    




    //
  }
} else {
  echo "0 results";
}
$sql1 = "INSERT INTO rolesdetails (user_id,role_id) VALUES ('$idUser',2)";
    
    if (mysqli_query($conn, $sql1)) {
      //echo "New record created successfully FINAALLY";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }



//select last row
/*
$sql1 = "INSERT INTO rolesdetails (user_id,role_id)
VALUES ('$idUser',2)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
mysqli_close($conn);
?>