<?php
include_once 'dbconfig.php';
$id=$_POST['pid'];
?>
<html>
<head>
<title>Reports View</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
<style>
.button9 {
    background-color:#F08080;
    border:none;
    color: white;
	float:right;
	margin:10px;
    padding: 12px 27px;
	position:relative;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor: pointer;
}
</style>
</head>
<body>
<a href="/6417/F1.php" class="button9" >Logout</a>
<div id="header">
<label>Patient Report View</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4"><label><a href="index.php">Upload New Report...</a></label></th>
    </tr>
    <tr>
    <td>Patient ID</td>
    <td>Name</td>
	<td>city</td>
    <td>File type</td>
    </tr>
    <?php
	$sql="SELECT * FROM `u656401271_db`.`tbl_uploads` WHERE id='$id'";
	$result_set=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result_set,MYSQLI_ASSOC))
	{
		?>
        <tr>
		 <td><?php echo $row['id'] ?></td>
        <td><?php 
		$doid=$id;
		$sql1="SELECT  `fname` ,  `lname` ,  `city` 
FROM  `u656401271_db`.`patient` 
WHERE  `id` =  '$doid'";
		$result_set1=mysqli_query($conn,$sql1);
		$row1=mysqli_fetch_array($result_set1,MYSQLI_ASSOC);
		echo $row1['fname']; echo $row1['lname'];
		?></td>
		 <td><?php echo $row1['city'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>