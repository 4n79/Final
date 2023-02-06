<?php 
error_reporting(0);   
	
	session_start();
	extract($_REQUEST);
	if($submit)
	{
		include('connection.php');
		$r="select * from stu where email='$email' and PASSWD='$PASSWD' ";
	
		$result=mysql_query($r);
		
		
		if($row=mysql_fetch_array($result)){
			header("location:s_homepage1.php");
			$_SESSION['s_n']=$row[0];
		
		}
		
		else{
			 ?>
		<script>
		alert('enter correct email and passsword');
		</script>
       
        <?php
		}
	}       
?>

<!DOCTYPE HTML>
<html>
<head>

<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["email"].value;
var b=document.forms["reg"]["PASSWD"].value;
if ((a==null || a=="") && (b==null || b==""))
 {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("registration id  must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("password must be filled out");
  return false;
  }
  }
  </script>

<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
</style>
<link href="css/div.css" rel='stylesheet' type='text/css' />
<link rel='stylesheet' href='css/my-slider.css' />
<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.1.js"></script>

</head>
<body>
<div id="p9" style="height:auto;">

<div id="p2"><a href="home1.php" style="text-decoration:none;color:#fcfdfd;">Online Learning Support</a></div>
  
  
  <div id="p6"  >
  <div id='cssmenu' >
  <ul>
		          <li class='active'><a href="home1.php"><span>Home</span></a></li>
				 <li><a href="about.php"><span>About Us</span></a>
				<li><a href="aboutus.php"><span>Course</span></a></li>
		        <li><a href="contactd.php"><span>Contact</span></a></li>
				 
				 
		      </ul>
   </div>
   </div>


<div style="height:450px;width:100%;border:groove;">

<fieldset style="margin-top:30px;color:#1f7898;margin-bottom:auto;">
<legend style="color:#1f7898">Online Learning Support Management</legend>
<center>

					     <form action="" method="post" name="reg" onSubmit="return validateForm()">
						
						 <table style="height:300px;width:40%;border-style:groove;color:#000000;border-color:#000000;background-color:#F4F4F4;">
						  <tr><td colspan="2"><center style="color:#1f7898">Login</center></td></tr>
		                        <tr><td><span style="color:#1f7898">Email ID</span></td>
						    	<td><span><input  type="text" name="email" placeholder="enter your email" style="height:30px; width:300px;"></span></td></tr>
						        <tr><td><span style="color:#1f7898">password</span></td>
						    	<td><span><input type="password" name="PASSWD" placeholder="enter your password" style="height:30px; width:300px;"></span></td></tr>
						    
						   
						   
						   		<tr>
								<td>New user?<a href="reg1.php">signup here</a></td>
								<td><input class="btmmm"  type="submit" value="LOGIN" name="submit"></td></tr></table>
								</fieldset>
						  
					    </form>


</center>
</div>

<div id="p11"  >
<ul id="navlist"> 
 <li><a href="contactd.php"><font color="#FFFFFF">CONTACT:</font></a></li>
 <p><font color="#FFFFFF">Email:</font><a href="https://mail.google.com/mail/" target="_blank" style="text-decoration:none;"> <font color="#f2f2f3"> -online.learning.support@gmail.com</font></a></p>
				</ul>
			  </div>
			  
			  			
</body>
</html>
