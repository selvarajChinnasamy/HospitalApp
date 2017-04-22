<?php
$servername = "localhost";
$username = "u656401271_user";
$password = "password";
$dbname =   "u656401271_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$val=$_GET['search'];
$sql="SELECT  `suffer`, `medission`, `catagory`,`docid`, `date` FROM `data`.`details` WHERE `id`='$val'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 $sql1="SELECT `Name`,`Hospital` FROM `data`.`docter` WHERE `docid`='{$row['docid']}'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
 echo"Decises: {$row['suffer']}<br>"; 
 echo"Medicine: {$row['medission']}<br>"; 
 echo"Decises Catagory: {$row['catagory']}<br>"; 
 echo"Docter Name: {$row1['Name']}<br>";
 echo"Hospital: {$row1['Hospital']}<br>"; 
 echo"Date: {$row['date']}<br><hr>"; 
	 
	 }
}
else{
	echo"Datas Not Found...";
}
?>