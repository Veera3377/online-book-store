<?php
/*
$con = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($con,'store');

$b_name = $_POST['b_name'];
$b_name = mysqli_escape_string($con,$b_name);
$b_name = strip_tags($b_name);

$b_aut = $_POST['b_aut'];
$b_aut = mysqli_escape_string($con,$b_aut);
$b_aut = strip_tags($b_aut);

$b_months = $_POST['b_months'];
$b_months = mysqli_escape_string($con,$b_months);
$b_months = strip_tags($b_months);

$b_price = $_POST['b_price'];
$b_price = mysqli_escape_string($con,$b_price);
$b_price = strip_tags($b_price);

$b_dept = $_POST['department'];
$b_dept = mysqli_escape_string($con,$b_dept);
$b_dept = strip_tags($b_dept);


$c_name = $_POST['c_name'];
$c_name = mysqli_escape_string($con,$c_name);
$c_name = strip_tags($c_name);

$c_contact = $_POST['c_contact'];
$c_contact = mysqli_escape_string($con,$c_contact);
$c_contact = strip_tags($c_contact);

$c_mail = $_POST['c_mail'];
$c_mail = mysqli_escape_string($con,$c_mail);
$c_mail = strip_tags($c_mail);

$c_address = $_POST['c_address'];
$c_address = mysqli_escape_string($con,$c_address);
$c_address = strip_tags($c_address);

$c_category = $_POST['category'];
$c_category = mysqli_escape_string($con,$c_category);
$c_category = strip_tags($c_category);


$query = "INSERT INTO Book(Book_name, Author, Months, Price,Department) VALUES ('$b_name','$b_aut','$b_months','$b_price','$b_dept')";
	mysqli_query($con,$query);
var_dump($query);
$query1 = "INSERT INTO Contact(CO_NAME, CO_CONTACT, CO_EMAIL,CO_ADDRESS,CO_CATEGORY) VALUES ('$c_name','$c_contact','$c_mail','$c_address','$c_category')";
	mysqli_query($con,$query1);
var_dump($query1);*/	
header('location:purchase.php')
?>