<?php
//declaration
$hostname="localhost";
$user="root";
$pass="";
$dbname="e-book";


//create connection

$conn=mysqli_connect($hostname,$user,$pass,$dbname);
if(!$conn)
{
	die("CONNECTION FAIL" . mysqli_connect_error());
}

$sql3 = "drop table login";

if($conn->query($sql3)) 
{
header('location:E-login.html');
}    	
$conn->close();
?>