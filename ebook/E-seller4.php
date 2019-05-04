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
$sql3 = "delete from orders where username='$usernames' AND bookid='$bookid' ";
$sql4 = "insert into delivered(username,bookid) values('$usernames','$bookid')";
if($conn->query($sql3)) 
{
    	echo "Successfully Delivered";
	if($conn->query($sql4))
	{
		echo "AND ADDED TO RECORD";
	}
			
} 
else 
{

	header('location:E-seller4.html');
}
$conn->close();
?>