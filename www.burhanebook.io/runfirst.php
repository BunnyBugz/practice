<?php
//declaration
$hostname="localhost";
$user="root";
$pass="";
$dbname="airline1";


//create connection

$conn=mysqli_connect($hostname,$user,$pass,$dbname);
if(!$conn)
{
	die("CONNECTION FAIL" . mysqli_connect_error());
}
echo "*";

//create table
$sql1="create table customer(firstname varchar(20),surname varchar(20),gender varchar(20),age integer,doj date,class varchar(20),route varchar(20))";

if($conn->query($sql1) === true)
{
	echo "*";
}
else
{
	echo "ERROR:" . $conn->error;
}
$conn->close();
?>