<?php

//Check create_database.php code before you this.
//Run this script to generate the required tables in your local computer (WampServer). 
//This script only needs to be run once. Then, you can use these tables by simply connecting to the database.

$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con,"store");

//book table
if (mysqli_query($con,"CREATE TABLE Book (BID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, Book_Name CHAR(50) NOT NULL, Author CHAR(50) NOT NULL ,Months INT NOT NULL,Price INT NOT NULL,Department CHAR(50) NOT NULL)"))
	echo "Book table successfully created"."<br>";
else
	echo "Error in creating Book Table: ".mysqli_error($con)."<br>";

//contact table
if (mysqli_query($con,"CREATE TABLE Contact (CO_ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,CO_BID INT NOT NULL,FOREIGN KEY (CO_BID) REFERENCES Book(BID) ON DELETE CASCADE, CO_NAME CHAR(50) NOT NULL, CO_CONTACT INT NOT NULL,CO_EMAIL CHAR(50) NOT NULL,CO_ADDRESS CHAR(100), CO_CATEGORY CHAR(50) NOT NULL)"))
	echo "Contacts table successfully created"."<br>";
else
	echo "Error in creating Contacts table: ".mysqli_error($con)."<br>";

//login table
if (mysqli_query($con,"CREATE TABLE Customer (CU_ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,CU_NAME CHAR(50) NOT NULL,CU_CONTACT INT(10) NOT NULL,CU_EMAIL CHAR(50) NOT NULL,CU_PASSWORD VARCHAR(8) NOT NULL ,CU_PROFESSION CHAR(50) NOT NULL,CU_DEPARTMENT CHAR(50) NOT NULL)"))
	echo "Customer table successfully created"."<br>";
else
	echo "Error in creating Customer table: ".mysqli_error($con)."<br>";

/*printf ("New Record has id %d.\n", mysqli_insert_id($con));
$sql = "DROP TABLE IF EXISTS Book";
$retval = mysqli_query($con,$sql);
if(! $retval )
{
  die('Could not delete table: ' . mysql_error());
}
echo "Table deleted successfully\n";
$sql = "DROP TABLE IF EXISTS Contact";
$retval = mysqli_query( $con, $sql );
if(! $retval )
{
  die('Could not delete table: ' . mysql_error());
}
echo "Table deleted successfully\n";
$sql = "DROP TABLE IF EXISTS Customer";
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not delete table: ' . mysql_error());
}
echo "Table deleted successfully\n";*/
mysqli_close($con);
?>

