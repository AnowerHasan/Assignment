<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if($_SESSION['username']==$username && $_SESSION['password']==$password)
{
 	echo "Login Successfull";
	header( "refresh:1; url=loginaccount.php");
	die;
}else {
$Message = "username and password not match";
header("Location:login.php?Message=".$Message);
}
?>