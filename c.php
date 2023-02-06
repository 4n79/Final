
<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "peer";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$A=$_POST['uname1'];
$B=$_POST['fname1'];
$C=$_POST['lname1'];
$D=$_POST['email'];
$E=$_POST['PASSWD'];
$F=$_POST['CPASSWD'];


mysql_query("INSERT INTO stu(UNAME,FNAME,LNAME,email,PASSWD,CPASSWD)VALUES('$A', '$B','$C','$D','$E','$F')");
header("location:reg1.php?remarks=success");
mysql_close($con);
?>