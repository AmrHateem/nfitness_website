<html>
<head></head>
<?php
$user=$_POST["NUM1"];
$pwd=$_POST["NUM2"];    
$conn=mysqli_connect("localhost","root","","nfitness22");
 if($conn==TRUE)
 {
     echo "connected";
 }
 else{
     echo "not connected";
 }

$stmt="select * from `customer` where `email`='$user' AND `password`='$pwd'";

$result=mysqli_query($conn,$stmt);
$login=false;
while($row=mysqli_fetch_array($result))
{
    header("Location:cart2.html");
    exit;
   
}

?>

</html>


