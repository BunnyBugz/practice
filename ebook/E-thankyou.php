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
$bookid=$_POST['bookids'];
$sql3 = "select username from login";
$results = $conn->query($sql3);

if ($results->num_rows > 0) 
{
    
	while($row = $results->fetch_assoc()) 
	{
        		$username=$row["username"];
	}
} 
$sql5="select progress from orders where username='$username' AND bookid='$bookid'  ";
$result2 = $conn->query($sql5);
if ($result2->num_rows > 0) 
{
    
	while($row = $result2->fetch_assoc()) 
	{
        		$progress=$row["progress"];
	}
} 

if($result2->num_rows > 0) 
{
    	
	if($progress == 0 )
	{
		echo "YOUR REQUEST IN PROGRESS";
	}
	else
	{
		echo "YOUR BOOK WILL BE DELIVERED IN" . $progress."DAYS";
	}
			
}
else 
{

	echo "YOU HAVE NOT REQUESTED THIS BOOK OR IT MAY ME ALREADY DELIVERED";
}
$conn->close();
?>