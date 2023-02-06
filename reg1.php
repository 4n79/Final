<?php 
error_reporting(0);   
?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="imagecss/style.css">
<link rel="stylesheet" href="css/style.css">
<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/div.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<link rel="stylesheet" href="fonts/css/font-awesome.css">
<link rel='stylesheet' href='css/my-slider.css' />
<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.1.js"></script>



<script>
function validateForm() 
{
var x=document.forms["reg"]["uname1"].value;
var y=document.forms["reg"]["fname1"].value;
var z=document.forms["reg"]["lname1"].value;
var b=document.forms["reg"]["email"].value;
	
if ((x==null || x=="")&&(y==null || y=="")&&(z==null || z=="")&&(b==null || b==""))
 {
  alert("All Field must be filled out");
  return false;
  }
 
  if (x==null || x=="")
  {
  alert("usename must be filled out");
  return false;
  }
  if (y==null || y=="")
  {
  alert("firstname must be filled out");
  return false;
  }
  if (z==null || z=="")
  {
  alert("lastname must be filled out");
  return false;
  }
  if (b==null || b=="")
  {
  alert("email must be filled out");
  return false;
  }
 
   var pass1 = document.getElementById("pass1").value;
   var pass2 = document.getElementById("pass2").value;
	
  if (pass1==null || pass1=="")
  {
  alert("password must be filled out");
  return false;
  }
 
    var ok = true;
    if (pass1 != pass2) {
        alert("Passwords Do not match");
      }
}
</script>


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





<div id="p76">
<div class="p77">

<form name="reg" action="c.php"  onSubmit="return validateForm()" method="post">
<fieldset style="color:#1f7898;">
						 <legend><font color="#000000"> Registration form of student</font> </legend>
					      <table height="550" width="" align="left" cellpadding="4" cellspacing="4">
  <tr>
  <td colspan="2">
		<center> <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration success';
		
		}
		
		?>	</center>
		 </td>
      </tr>
	  
	
	 <tr>
    <td><div align="right">Username:</div></td>
    <td><input   type="text" name="uname1" placeholder="enter your username" /></td>
  </tr>
  
  <tr>
    <td><div align="right">First Name:</div></td>
    <td><input  type="text" name="fname1" placeholder="enter your firstname" /></td>
  </tr>
  
  <tr>
    <td><div align="right">Lsst Name:</div></td>
    <td><input   type="text" name="lname1" placeholder="enter your lname" /></td>
  </tr>
  
  <td><div align="right">EMAIL-ID:</div></td>
    <td><input  type="email" name="email" placeholder="email-id"  /></td>
  </tr>
  
  <tr>
    <td><div align="right">PASSWORD:</div></td>
    <td><input 
				id="pass1" type="password" name="PASSWD" placeholder="Password"  /></td>
  </tr>
  
    
  <tr>
    <td><div align="right">CONFIRM PASSWORD:</div></td>
    <td><input  id="pass2" type="password" name="CPASSWD" placeholder="Confirm Password"  /></td>
  </tr>
  
  <tr>
    <td><div align="right"></div></td>
    <div class="p7"><td><input class="btmmm"
    name="submit" type="submit" value="Register" /></td></div>
  </tr>
      
</table>
</form>

</div>




<div class= "p78">
<img src="ism/image/slides/11.jpg" style="height:600px;width:auto;">
</div>



</div>		  




<div id="p11">
<ul id="navlist"> 
<li><a href="contactd.php"><font color="#FFFFFF">LOGIN:</font></a></li>
<p><font color="#FFFFFF">Login:</font><a href="studentlogin1.php" target="_blank" style="text-decoration:none;"> <font color="#f2f2f3">click here</font></a></p>
				</ul>
			  

<li><a href="contactd.php"><font color="#FFFFFF">CONTACT:</font></a></li>
<p><font color="#FFFFFF">Email:</font><a href="https://mail.google.com/mail/" target="_blank" style="text-decoration:none;"> <font color="#f2f2f3"> online.learning.support@gmail.com</font></a></p>
				</ul>
			  
</div>

</body>
</html>




