
<?php
require_once "configuration.php";
if(isset($_POST["submit"]))
{
    $checkbox1=$_POST['chk']; 
    $ChildB = $_POST['birthday'];
    $today = $ChildB;
   

    for ($i=0; $i<sizeof ($checkbox1);$i++) {  
        if($checkbox1[$i] == "AMths")
        {
            $d = strtotime("+1 week",strtotime($ChildB));
            $final= date("Y-m-d",$d);
                    $query="INSERT INTO vaccineDate (name,Vaccine_date,Due_date) VALUES ('$checkbox1[$i]','$ChildB','$final')";  
                    mysqli_query($link,$query) ;
        }
        elseif($checkbox1[$i] == "DBMS")
        {
            $d = strtotime("+9 week",strtotime($ChildB));
$final= date("Y-m-d",$d);
        $query="INSERT INTO vaccineDate (name,Vaccine_date,Due_date) VALUES ('$checkbox1[$i]','$ChildB','$final')";  
        mysqli_query($link,$query) ;
        }
    }  
        echo "Record is inserted";  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type='checkbox' value="AMths" name="chk[]">Maths
    <input type='checkbox' value="DBMS" name="chk[]">DBMS
    <input type="date" id="birthday" name="birthday"><br>
    <button type="submit" name="submit" >Submit</button>
    </form>
    </body>
</html>