<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$userName = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$gender = $_POST['gender'];
$date = $_POST['date'];
if($password==$confirmPassword){
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	$_SESSION['username'] = $userName;
	$_SESSION['password'] = $password;
	$_SESSION['gender'] = $gender;
	$_SESSION['date'] = $date;

	echo "User Registration Successfull";
	header( "refresh:1; url=login.php");
	die;
}else
$Message = "password not match, try again";
header("Location:registration.php?Message=".$Message);
?>