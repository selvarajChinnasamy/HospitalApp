<?php
$servername = "localhost";
$username = "u656401271_user";
$password = "password";
$dbname =   "u656401271_db";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Id=$_GET["id"];
$Fname=$_GET["fname"];
$Lname=$_GET["lname"];
$blood=$_GET["blood"];
$Dob=$_GET["dob"];
$Gender=$_GET["gender"];
$Pnum=$_GET["pnum"];
$Dno=$_GET["dno"];
$Street=$_GET["street"];
$City=$_GET["city"];
$State=$_GET["state"];
$Pin=$_GET["pin"];
$Country=$_GET["country"];
$Nation=$_GET["nation"];
$Donar=$_GET["donar"];
$Dia=$_GET["dia"];
$Mi=$_GET["mi"];
$R1name=$_GET["r1name"];
$R1rel=$_GET["r1rel"];
$R1pnum=$_GET["r1pnum"];
$R2name=$_GET["r2name"];
$R2rel=$_GET["r2rel"];
$R2pnum=$_GET["r2pnum"];
$query=mysqli_query($con,"INSERT INTO `u656401271_db`.`patient`( `id`,blood, `fname`, `lname`, `dob`, `gender`, `pnum`, `dno`, `street`, `city`, `state`, `pin`, `country`, `nation`, `donar`, `dia`, `mi`, `r1name`, `r1rel`, `r1pnum`, `r2name`, `r2rel`, `r2pnum`) VALUES ('$Id','$blood','$Fname','$Lname','$Dob','$Gender','$Pnum','$Dno','$Street','$City','$State','$Pin','$Country','$Nation','$Donar','$Dia','$Mi','$R1name','$R1rel','$R1pnum','$R2name','$R2rel','$R2pnum')");
if($query==1)
{
	?><script>alert("Registration Sucessful");</script>
	<?php
	/*header("Location:Intial.html");*/
}
else
{
	?><script>alert("Registration Failure");</script>
	<?php
	header("Location:addpatient.html");
}
?>