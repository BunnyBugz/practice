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
echo "*";

//display data
$usernames=$_POST['username'];
$passwords=$_POST['password'];
$sql3 = "select username,password from registeruser where username='$usernames' AND password='$passwords' ";
$results = $conn->query($sql3);

if($results->num_rows > 0) 
{
    	$sql4="create table login(username varchar(20) primary key)";
	$conn->query($sql4);
	$sql5="insert into login(username) values('$usernames')";
	$conn->query($sql5);
	header('location:E-welcome2.html');
			
} 
else 
{

	header('location:E-login1.html');
	alert("wrong id password");
}
$conn->close();
?>