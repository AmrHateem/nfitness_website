
<?php
$firstname=$_GET["num1"];
$lastname=$_GET["num2"];
$email=$_GET["num3"];
$phone=$_GET["num4"];
$password=$_GET["num5"];
$conn=mysqli_connect("localhost","root","","nfitness22");
if($conn==TRUE)
  echo "successfuly connected to the database";

  else {      
    echo "Error";
    die();}

$stmt= "INSERT INTO `trainers` (`firstname`,`lastname`,`email`,`phone`,`password`) VALUES ('$firstname','$lastname',
'$email','$phone','$password')";
$result= mysqli_query($conn,$stmt);
if($result==FALSE)

echo "Error";

else

echo"$email was added";


?>

