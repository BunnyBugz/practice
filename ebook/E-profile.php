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
$sql4 = "select username from login";
$results = $conn->query($sql4);

if ($results->num_rows > 0) 
{
    
	while($row = $results->fetch_assoc()) 
	{
        		$username=$row["username"];
	}
} 
$sql3 = "select username,firstname,middlename,surname,dob,gender,age,address,mobs,emails,password from registeruser where username='$username' ";
$result = $conn->query($sql3);

if ($result->num_rows > 0) 
{
    // output data of each row
	echo "YOUR PROFILE:";
	while($row = $result->fetch_assoc()) 
	{
        		echo "<br>USERNAME: " . $row["username"]; 
		echo "<br>FIRST-NAME: " . $row["firstname"]; 
		echo "<br>MIDDLE-NAME:" . $row["middlename"];
		echo "<br>LAST-NAME: " . $row["surname"]; 
		echo "<br>DATE OF BIRTH:" . $row["dob"];
		echo "<br>AGE: " . $row["age"]; 
		echo "<br>ADDRESS:" . $row["address"];
		echo "<br>MOBILE NUMBER: " . $row["mobs"]; 
		echo "<br>EMAIL-ID:" . $row["emails"];
		echo "<br>PASSWORD:".$row["password"];
	}
} 
else 
{
    echo "0 results";
}
$conn->close();
?>