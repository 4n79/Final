<?php
	
  include('connection.php');

	session_start();

	$check=$_SESSION['login_username'];

	$session=mysql_query("SELECT username FROM admins WHERE username='$check' ")or die(mysql_error());

	$row=mysql_fetch_array($session);

	$login_session=$row['username'];

	if(!isset($login_session))
	 {
		
		header('location: login.php?user_msg='.$user_msg.'');
	}

?>