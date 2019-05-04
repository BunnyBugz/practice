<?php
//declaration
$hostname="localhost";
$user="root";
$pass="";
$dbname="vaibtech";


//create connection

$conn=mysqli_connect($hostname,$user,$pass,$dbname);
if(!$conn)
{
	die("CONNECTION FAIL" . mysqli_connect_error());
}
echo "*";

//posting
$fname=$_POST['fnames'];
$mname=$_POST['mnames'];
$sname=$_POST['snames'];
$complaint=$_POST['complaint'];
$mob=$_POST['mobs'];
$email=$_POST['emails'];


//insert data
if($fname != "" && $mname != "" && $sname != ""  && $complaint != "" && $mob != "" && $email != "" )   
{

$sql2="insert into inquiries(firstname,middlename,surname,complaint,mobs,emails) values('$fname','$mname','$sname','$complaint','$mob','$email')";

		if($conn->query($sql2) === true)
		{
			echo "*";
		}
		else
		{
			echo "ERROR:" . $conn->error;
		}

		
}
else
{
header('location:E-register.html');
}
$conn->close();
?>