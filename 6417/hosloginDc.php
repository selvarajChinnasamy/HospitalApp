<?php
session_start();
$servername = "localhost";
$username = "u656401271_user";
$password = "password";
$dbname =   "u656401271_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$docid=$_GET['Usid1'];
$pas=$_GET['paas1'];
$sql="SELECT `sno` FROM `data`.`Hospital` WHERE `hosid`='$docid' and `passwrd`='$pas'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1)
{
	$_SESSION['hosid']= $docid; 
	$_SESSION['paas1']= $pas; 
	header("location:addpatient.html");
}
else
{
	header("location:hoslogin.html");
}
?>