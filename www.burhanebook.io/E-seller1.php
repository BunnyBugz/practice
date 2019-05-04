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

$sql3 = "select * from orders";
$result = $conn->query($sql3);

if ($result->num_rows > 0) 
{
    // output data of each row
	echo "THE REQUESTED BOOKS :<br><br><br>";
	while($row = $result->fetch_assoc()) 
	{
        		echo "||USERNAME:&nbsp" . $row["username"]. "|||BOOK ID:&nbsp" . $row["bookid"]."|||PROGRESS:&nbsp".$row["progress"]."||"."||QUANTITY:&nbsp" . $row["quantity"]."||"."<br><br>";
	}
} 
else 
{
    echo "0 results";
}
$conn->close();
?>