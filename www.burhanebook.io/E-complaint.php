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

//posting
$username=$_POST['username'];
$complaint=$_POST['complaint'];


//insert data

$sql9="select * from registeruser where username='$username'";
$results = $conn->query($sql9);

if($results->num_rows > 0) 
{
	$sql2="insert into complaints(username,complaint) values('$username','$complaint')";
	if($conn->query($sql2) === true) 
	{
		echo "YOUR COMPLAINT IS SUCCESSFULLY SEND ";
	}
	else
	{
		echo "ERROR1:" . $conn->error;
	}

		
}
else
{
	header('location:E-complaint.html');
}



$conn->close();
?>