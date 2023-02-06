<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "peer";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");



$A=$_POST['name'];
$B=$_POST['email'];
$C=$_POST['contact'];
$D=$_POST['subject'];


mysql_query("INSERT INTO contact(name,email,contact,subject)VALUES('$A', '$B','$C','$D')");
header("location:contactd.php");
mysql_close($con);
?>