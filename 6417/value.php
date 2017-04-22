<html >
<body>
<style>
</style>
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
$sql="SELECT `sno`,`fname`, `lname`, `dob`, `gender`, `pnum`, `dno`, `street`, `city`, `state`, `pin`, `country`, `nation`, `donar`, `dia`, `mi`, `r1name`, `r1rel`, `r1pnum`, `r2name`, `r2rel`, `r2pnum` FROM `data`.`patient` where `id`=$val";
$result = $conn->query($sql);
 function ageCalculator($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }else{
        return 0;
    }
}
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
echo "Name:{$row['fname']}&nbsp;{$row['lname']}<br>";
//echo "Date of Birth:{$row['dob']}<br>";
echo"Age:";echo ageCalculator($row['dob']);echo"<br>";
echo "Gender:{$row['gender']}<br>";
echo "Mobile:{$row['pnum']}<br>";
//echo "Door no/House no:{$row['dno']}<br>";
//echo "Street:{$row['city']}<br>";
echo "City:{$row['city']}<br>";
//echo "Pin code:{$row['pin']}<br>";
//echo "Country:{$row['country']}<br>";
echo "Nationality:{$row['nation']}<br>";
echo "Donar:{$row['donar']}<br>";
echo "Diabetes:{$row['dia']}<br>";
echo "Medical Insurance:{$row['mi']}<br>";
//echo "<br>Responsible Person<br>&nbsp;&nbsp;&nbsp;&nbsp;1)&nbsp;&nbsp;Name:{$row['r1name']}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relation:{$row['r1rel']}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile no:{$row['r1pnum']}";
//echo "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;2)&nbsp;&nbsp;Name:{$row['r2name']}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relation:{$row['r2rel']}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile no:{$row['r2pnum']}";
 }
}
else{
	echo"Datas Not Found...";
}
?>
</body>
</html>