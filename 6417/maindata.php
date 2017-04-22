<?php
$servername = "localhost";
$username = "u656401271_user";
$password = "password";
$dbname =   "u656401271_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$suffer=$_GET['search1'];
$medi=$_GET['medi'];
$cat=$_GET['issue'];
$id=$_GET['id'];
$docid=$_GET['docid'];
$date=date("y-m-d");
$sql="INSERT INTO `data`.`details` (`id`, `suffer`, `medission`, `catagory`, `docid`, `date`) VALUES ('$id', '$suffer', '$medi', '$cat', '$docid', '$date')";
if($conn->query($sql)==TRUE)
{
	echo"Saved Successfully..";
}
else
{
	echo"Some Error..";
}
?>