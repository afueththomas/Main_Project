<?php
include("config.php");
include_once("../libs/bindClass.php");
if(isset($_POST["btnSave"]))
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$phone=$_POST["phone"];
	$email=$_POST["email"]; 
	$password=mysqli_real_escape_string($con,md5($_POST["password"]));
	


	function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
	
	
	$password=password_generate(7);
	
$save=mysqli_query($con,"INSERT INTO `tbl_tester`(`fname`, `lname`, `phone`, `email`, `password`) VALUES ('$fname','$lname','$phone','$email','$password')");


if($save)
{
$mailcontent=" Your Registration has been completed successfully.Please use the following credentials for your first login.username='$email' and password='$password'  ";
	$objmail->sendMail($email,"Confirmation",$mailcontent);
echo "<script> alert ('Thank you for registration !!! '); window.location='index.php'</script>";

}


}


?>
<a href=""



}


?>
<a href=""

