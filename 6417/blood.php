<html>
<head>
<title>Blood Search</title>
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
</head>
<body>
<style>
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}



@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
	background: url("bg1.jpg");
  font-family: 'roboto', sans-serif;
    background-size: 100% 100%;
    background-repeat: no-repeat;
  
}
section{
  margin: 50px;
}


.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}



::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		position: absolute;
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	td:nth-of-type(1):before { content: "Blood"; }
	td:nth-of-type(2):before { content: "Id"; }
	td:nth-of-type(3):before { content: "First Name"; }
	td:nth-of-type(4):before { content: "Last Name"; }
	td:nth-of-type(5):before { content: "Date of Birth"; }
	td:nth-of-type(6):before { content: "Gender"; }
	td:nth-of-type(7):before { content: "Phone"; }
	td:nth-of-type(7):before { content: "City"; }	
}

#myInput1 {
  background-image: url('search.png');
  background-size:30px;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  background-color: rgb(0,0,0.1); 
    background-color: rgba(0,0,0,0.1);
}
</style>
<div><img src="26.png" style="width: 100px; margin-top: 16px;">
</div>

<section>
  <h1>Blood Group Details</h1>
<?php
$servername = "localhost";
$username = "u656401271_user";
$password = "password";
$dbname =   "u656401271_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM `data`.`patient` WHERE 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo"<input type='text' id='myInput1' onkeyup='myFunct1()' placeholder='Search for Blood..' title='Type in a name'>";
		echo"<div class='tbl-header'>";
echo"<table  cellpadding='0' cellspacing='0' border='0'>
  <thead>
  <tr>
    <th>Blood</th>
    <th>Id</th>
	<th>First Name</th>
	<th>Date of Birth</th>
	<th>Gender</th>
	<th>Phone</th>
	<th>City</th>
	 </tr> </thead></table></div>";
  echo" <div class='tbl-content'>";
  echo"<table id='myTable1' cellpadding='0' cellspacing='0' border='0'><tbody>";
  while($row = $result->fetch_assoc()) {
	echo"<tr>
	<td>{$row['blood']}</td>
  <td>{$row['id']}</td>
  <td>{$row['fname']}</td>
  <td>{$row['dob']}</td>
  <td>{$row['gender']}</td>
  <td>{$row['pnum']}</td>
  <td>{$row['city']}</td>";
		 echo"</tr>";   
	}
	echo"</tbody>
    </table>
  </div>
</section>";
	
}
echo"<div>";
?>	
</body>
<script>
function myFunct1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>