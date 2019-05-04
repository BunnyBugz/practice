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
$bookid=$_POST['bookid'];
$quantity=$_POST['quantity'];
$sql3 = "select username from login";
$results = $conn->query($sql3);


if ($results->num_rows > 0) 
{
    
	while($row = $results->fetch_assoc()) 
	{
        		$username=$row["username"];
	}
} 

if($results->num_rows > 0) 
{
    	
	$sql5="insert into orders(username,bookid,progress,quantity) values('$username','$bookid',0,'$quantity')";
	$conn->query($sql5);
	header('location:E-thankyou.html');
			
} 
else 
{

	header('location:E-buy1.html');
}
$conn->close();
?>