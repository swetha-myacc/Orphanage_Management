<?php
include("orphanage/config.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];	

$result=mysqli_query($mysqli, "insert into donor value(' ', '$name', '$address', $email', $mobile', '$password')")
if($result)
{
	echo "You Registered Successfully, You can Login Now";
}
else{
	echo "Something wrong, data not stored";
}
}
?>