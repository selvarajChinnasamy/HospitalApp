<?php
$dbhost = "localhost";
$dbuser = "u656401271_user";
$dbpass = "password";
$dbname = "u656401271_db";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>