<?php
 $Firstname = $_POST["firstname"];  
  
 $lastname = $_POST["lastname"];
 
     
 $email = $_POST["emailid"];
 $code = $_POST["areacode"];

  
 $number = $_POST["telnum"];
  
  

  $message = $_POST["message"]; 
  


 
$link=mysqli_connect("localhost","root","","restaurant");
if($link === false){
	die("ERROR:Could not connect." .mysqli_connect_error());
}

$sql = "INSERT INTO contanct (firstname, lastname,emailid,areacode,telnum,message) VALUES ('$Firstname', '$lastname','$email','$code','$number', '$message')";
if (mysqli_query($link ,$sql)){
	echo"Records added successfully";

}else {
	echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>