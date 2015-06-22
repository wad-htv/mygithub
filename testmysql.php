<?php 
$link = mysql_connect('hostname','dbuser','dbpassword'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
echo 'Connection OK'; mysql_close($link); 

//PDO Connection
$conn = new PDO( "sqlsrv:Server=10.1.0.9\MSSQLSRV ; Database = HTV2015 ", "sa", "$123root$", array(PDO::SQLSRV_ATTR_DIRECT_QUERY => true)); 

?> 