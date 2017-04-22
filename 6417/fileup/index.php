<?php
include_once 'dbconfig.php';
?>
<head>
<title>Reports Upload</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
</head>
<body>
<div>
<a href="/6417/F1.php" class="button9" >Logout</a>
</div>
<style>
button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background:#CD5C5C;
  width: 7%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  transition: all 0.5s;
  cursor: pointer;
}
button:hover{
  background:#FFA07A;
}
input{
 font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 20%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  }
 .button9 {
    background-color:#F08080;
    border:none;
    color: white;
	float:right;
	margin:0px;
    padding: 12px 27px;
	position:relative;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor: pointer;
}
</style>
<div id="header">
<label>Patient Reports Upload</label>
</div>
<div id="body">

	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="text" name="pid" id="pid" Placeholder="Patient ID">
	<input type="text" name="doid" id="doid" Placeholder="Doctor ID">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">Upload</button>
	</form>
    <br /><br />
  
      
</div>

</body>
</html>