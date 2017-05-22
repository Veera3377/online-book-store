<?php
$con = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($con,'store');


$email = $_POST['e-mail'];
$email = mysqli_escape_string($con,$email);
$email = strip_tags($email);

$password = $_POST['password'];
$password = mysqli_escape_string($con,$password);
$password = strip_tags($password);
$password = MD5($password);

$query = "SELECT CU_EMAIL, CU_PASSWORD FROM customer WHERE CU_EMAIL='$email'";
$result = mysqli_query($con,$query);
$num = mysql_num_rows($result);
$row = mysqli_fetch_array($result);
if ($num == 0)
	{
	$m = "<span style='color: red'>Email Doesn't Exist</span>";
	header('location: index.php?ml1='.$m);
	}
else
	if ($password == $row['CU_PASSWORD'])
		{
		session_start();
		$_SESSION['email']=$row['CU_EMAIL'];
		header('location: purchase.php');		
		}
	else
		{
		$m = "<span style='color: red'>Incorrect Password</span>";
		header('location: index.php?ml2='.$m);
		}
?>