<?php

$con = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($con,'store');

$name = $_POST['name'];
$name = mysqli_escape_string($con,$name);
$name = strip_tags($name);

$email = $_POST['email'];
$email = mysqli_escape_string($con,$email);
$email = strip_tags($email);

$password = $_POST['password'];
$password = mysqli_escape_string($con,$password);
$password = strip_tags($password);
$password = MD5($password);

$contact = $_POST['contact'];
$contact = mysqli_escape_string($con,$contact);
$contact = strip_tags($contact);

$profession = $_POST['profession'];
$profession = mysqli_escape_string($con,$profession);
$profession = strip_tags($profession);

$department = $_POST['department'];
$department = mysqli_escape_string($con,$department);
$department = strip_tags($department);


$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";
$query = "SELECT * FROM customer WHERE CU_Email='$email'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if ($num != 0)
	{
	$m = "<span style='color:red;'>Email Already Exists</span>";
	header('location: index.php?m1='.$m);
	}
else if (!preg_match($regex_email, $email))
	{
	$m = "<span style='color: red;'>Not a valid Email Id</span>";
	header('location: index.php?m1='.$m);
	}
else
	{
	$query = "INSERT INTO customer(CU_NAME, CU_EMAIL, CU_PASSWORD, CU_CONTACT, CU_PROFESSION, CU_DEPARTMENT)VALUES ('$name','$email','$password','$contact','$profession','$department')";
	mysqli_query($con,$query);
	session_start();
	$_SESSION['email']=$email;
	header('location: purchase.php');
	}
?>