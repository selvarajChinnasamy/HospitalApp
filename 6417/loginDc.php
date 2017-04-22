<?php
session_start();
$servername = "localhost";
$username = "u656401271_user";
$password = "password";
$dbname =   "u656401271_db";
$docid=$_GET['Usid'];
$pas=$_GET['paas'];
$date=date("y-m-d");
$sql="SELECT `Name` FROM `data`.`docter` WHERE `docid`='$docid' and `Password`='$pas'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1)
{
	$_SESSION['docid']= $docid; 
	$_SESSION['paas']= $pas; 
	header("location:F1.php");
}
else
{
	header("location:login.html");
}
?>