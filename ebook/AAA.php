<?php
//declaration
$email=$_POST['email'];
$password=$_POST['password'];
$hostname="localhost";
$user="root";
$pass="";
$dbname="scantoshare";


//create connection

$conn=mysqli_connect($hostname,$user,$pass,$dbname);
$sql2="insert into user(email,password) values('$email','$password')";
if(mysqli_query($conn,$sql2))
{
	echo "DATA INSERTION SUCCESS:";
}
else
{
	echo "ERROR";
}
mysqli_close($conn);
?>