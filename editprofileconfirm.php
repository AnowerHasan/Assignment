<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$date = $_POST['date'];

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['gender'] = $gender;
$_SESSION['date'] = $date;

echo "Edit Profile Successfull";
header( "refresh:1; url=profile.php");
?>