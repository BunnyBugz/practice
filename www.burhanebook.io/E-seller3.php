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
$bookid=$_POST['bookid'];
$progress=$_POST['progress'];
$sql3 = "update orders set progress='$progress' where username='$usernames' AND bookid='$bookid' ";


if($conn->query($sql3)) 
{
    	echo "Successfully upadted";
			
} 
else 
{

	header('location:E-seller3.html');
}
$conn->close();
?>