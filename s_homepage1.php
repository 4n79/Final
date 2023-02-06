 <?php 
error_reporting(0);   
  ?>

<?php
include('connection.php');
session_start();
$s_n=$_SESSION['s_n'];

if($s_n=="")
    {
		header("location:studentlogin1.php");
	}
	else
	{
             $sql="SELECT * FROM `stu` WHERE s_n = '$s_n'";
			 
		     $run=mysql_query($sql);
			 $a=mysql_fetch_array($run);
			 ?>
			 
			 
<!DOCTYPE HTML>
<html>
<head>

<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/div.css" rel='stylesheet' type='text/css' />
<link href="css/divss.css" rel='stylesheet' type='text/css' />

<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
</style>

<link rel='stylesheet' href='css/my-slider.css' />
<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.1.js"></script>
</head>
<body>




<div id="p9" style="height:auto;">
<div id="p2">Online Learning Support</div>




<div id="p6"  >
  <div id='cssmenu' >
<ul>
		        <li class='active'><a href="s_homepage1.php"><span> Student Home</span></a></li>
				
				
				<li><a href="nextlogin.php"><span>Registered your Course</span></a></li>
				
		        <li><a href="slogout.php"><span>Logout</span></a></li>
		      </ul>
</div>
</div>






<div id="p3" style="height:100px;">
<div class="p4" style="height:100px;width:40%;">


<form action="" method="post" >

				  <TABLE BORDER='2' BGCOLOR='#f2f2f2' cellpadding= cellspacing= style="height:100px;width:102%;">
				  <tr style="background-color:#1f7898;font-weight:bold;font-size:15px;color:#fff;">
				   <td> USER-NAME:<?php echo $a['UNAME']; ?></td>
				  </tr> 
				  <TR style="background-color:#1f7898;font-weight:bold;font-size:15px;color:#fff;">
				  <TD  colspan=2 >Email:<?php echo $a['email']; ?></td>
				  </TR>
				  </TABLE>
				 
				  </form>
</div>






<div class="p5" style="height:100px;width:60%;"> 

<div id="p3d" style="float:left;">
<div class="p4d" style="font-weight:bold;font-size:15px;color:#fff;"><center><center>TEST-1 SCORE:
<?php 
  $sql1="SELECT * FROM `quiz_takers` where username='".'Quiz_1_'.$a['email']."'";
			 
		     $run1=mysql_query($sql1);
			 $a1=mysql_fetch_array($run1);
			?>
	<center><font size="6px" color="#FFFFFF"> <?php echo $a1['marks']; ?></center></font>
	<?php
			 ?>
</center></div>

<div class="p5d" style="font-weight:bold;font-size:15px;color:#fff;"><center>TEST-2 SCORE:
<?php 
  $sql2="SELECT * FROM `quiz_takers` where username='".'Quiz_2_'.$a['email']."'";
			 
		     $run2=mysql_query($sql2);
			 $a2=mysql_fetch_array($run2);
			?>
	<center><font size="6px" color="#FFFFFF"> <?php echo $a2['marks']; ?></center></font>
	<?php
			 ?>
</center></div>


<div class="p6d" style="font-weight:bold;font-size:15px;color:#fff;"><center>TEST-3 SCORE:
<?php 
  $sql3="SELECT * FROM `quiz_takers` where username='".'Quiz_3_'.$a['email']."'";
			 
		     $run3=mysql_query($sql3);
			 $a3=mysql_fetch_array($run3);
			?>
	<center><font size="6px" color="#FFFFFF"> <?php echo $a3['marks']; ?></center></font>
	<?php
			 ?>
</center></div>

<div class="p7d" style="font-weight:bold;font-size:15px;color:#fff;"> AVERAGE SCORE:<BR>


<?php

if($a1['marks']!='')
{
if($a2['marks']!='')
{
if($a3['marks']!='')
{
$total=$a1['marks']+$a2['marks']+$a3['marks'];
$tt=60;
$percentage = ($total/$tt)*100;


?>
	<span style="float:left"><font size="6px" color="#FFFFFF"> <?php echo number_format((float)$percentage, 2, '.', '')."%"; ?> </span></font><br>
	<?php
	
	if(number_format((float)$percentage, 2, '.', '')>="48")
	{
	echo "<script type='text/javascript' > alert('you are eligible for download the certificate');</script>";
	}
	else
	{
	echo "<script type='text/javascript' > alert('sorry, you are not eligible for download the certificate');</script>";
	}
	}}}
    ?>
	</center>
	
	
	<?php
	  $query4 = "SELECT * FROM course_reg where email= '".$a['email']."' " ;

      $run4=mysql_query($query4);
			 $a4=mysql_fetch_array($run4);		
			
 
 mysql_query("INSERT INTO pdfdata (name,email_id,average_per,course )VALUES('".$a['UNAME']."', '".$a['email']."','".number_format((float)$percentage, 2, '.', '')."','".$a4['topic']."')");
	
	
	?>
	<span style="font-weight:bold;font-size:15px;color:#fff;"> DOWNLOAD CERTIFICATE:
	
	<?php
	
	?>
	
	 <form method="post" action="generate_pdf.php">
     <button type="submit"  name="submit" value="<?php echo number_format((float)$percentage, 2, '.', '')."%"; ?>" style="font-weight:bold;font-size:15px;color:#CB0300;">Certificate </button>
	
     </form>
   <?php
  
   
	?>	
	</div>
</div>

</div>
</div>




<div id="p01" style="height:400px;">

<div class="pp1" style="height:400px;width:20%;background-color:#DEEFD8;overflow:scroll;">
<center>
 <span style="color:#000000;font-size:20px;">COURSE</span>
 <hr style="color:#FFFFFF;height:20px;">		
</center>			



  <?php
      $query = mysql_query("SELECT * FROM course_reg where email= '".$a['email']."' ");

      while ($rows = mysql_fetch_array($query))
	  { 
   
   
   
  
	  $a=$rows['topic'];
	 
	
	
	
if($a=="c++")
{
    ?>
	<center><a href=""><font size="6px" color="#000000"> <?php echo $a; ?></a></center></font><hr style="color:#FFFFFF;height:10px;">
	<?php
}

if($a=="Java")
{
    ?>
	<center><a href=""><font size="6px" color="#000000"> <?php echo $a; ?></a></center></font><hr style="color:#FFFFFF;height:10px;">
	<?php
}

if($a=="C")
{
    ?>
	<center><a href="topic1.php"><font size="6px" color="#000000"> <?php echo $a; ?></a></center></font><hr style="color:#FFFFFF;height:10px;">
	<?php
}


} 
?>

</div>

<div class="pp2" style="height:400px;overflow:scroll;width:79%;">

<h3 style="color:#1f7898"><center>WELCOME TO HOME PAGE</center></h3>
<span style="margin-top:40px;margin-left:40px;color:#39B428;font-size:40px;">c</span>
<span style="margin-top:40px;margin-left:90px;color:#D37409;font-size:70px;">C++</span>
<span style="margin-top:20px;margin-left:300px;color:#CC0300;font-size:150px;">Java</span>
<span style="margin-top:15px;margin-left:150px;color:#3599F1;font-size:75px;">Data structure</span>
<span style="margin-top:7px;margin-left:350px;color:#17323F;font-size:80px;">SQL</span>

</div>

</div>

<div id="p11"  >
<ul id="navlist"> 
		        
 <li><a href="contactd.php"><font color="#FFFFFF">CONTACT:</font></a></li>

 <p><font color="#FFFFFF">Email:</font><a href="https://mail.google.com/mail/" target="_blank" style="text-decoration:none;"> <font color="#f2f2f3"> -online.learning.support@gmail.com</font></a></p>
				</ul>
			  </div>
			  
			  
			
</body>
</html>

			  




<?php
}
?>	
