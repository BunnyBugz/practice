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

//posting
$fnames=$_POST['fname'];
$lnames=$_POST['lname'];
$days=$_POST['date'];
$ages=$_POST['age'];
$genders=$_POST['gender'];
$classeds=$_POST['classed'];
$routes=$_POST['route'];

//insert data
$sql2="insert into customer(firstname,surname,gender,age,doj,class,route) values('$fnames','$lnames','$genders','$ages','$days','$classeds','$routes')";

		if($conn->query($sql2) === true)
		{
			echo "your ticket is succesfully booked";
		}
		else
		{
			echo "ERROR:" . $conn->error;
		}

$conn->close();
?>