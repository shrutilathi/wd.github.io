<!DOCTYPE html>
<html>
<body>

<?php

$server="localhost";
$username="root";
$password="root";
$db="bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>

</body>
</html>