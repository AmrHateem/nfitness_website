
<html>
  <body>

<?php
$firstname=$_GET["num1"];
$lastname=$_GET["num2"];
$email=$_GET["num3"];
$phone=$_GET["num4"];
$password=$_GET["num5"];
$sub=$_GET["num6"];
$exc=$_GET["num7"];
$meal=$_GET["num8"];
$promo=$_GET["num9"];
$conn=mysqli_connect("localhost","root","","nfitness22");
if($conn==TRUE)
  echo "successfuly connected to the database";

  else {
      
    echo "Error";
    die();}

$stmt= "INSERT INTO `customer` (`firstname` ,`lastname` ,`email`,`phone` ,`password` ,`subscription` ,`exercise`,`meal` ,`promo`) VALUES ('$firstname' ,'$lastname'
,'$email' ,'$phone' ,'$password','$sub' ,'$exc' ,'$meal' ,'$promo')";

$result= mysqli_query($conn,$stmt);
if($result==FALSE)

echo "Error";

else

header("Location: login.html"); 
exit;


?>

  </body>
  </html>




