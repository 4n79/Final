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
			 
	<?php
	
	
	 $sql_1="SELECT * FROM `stu` WHERE s_n = '$s_n'";
			 
	
	
	
	
	?>
	
	
	<?php

  $sql1="SELECT * FROM `quiz_takers` where username='".'Quiz_1_'.$a['email']."'";
			 
		     $run1=mysql_query($sql1);
			 $a1=mysql_fetch_array($run1);
			
          $m1=$a1['marks']; 


 
  $sql2="SELECT * FROM `quiz_takers` where username='".'Quiz_2_'.$a['email']."'";
			 
		     $run2=mysql_query($sql2);
			 $a2=mysql_fetch_array($run2);
			
	 $m2=$a2['marks'];
	



  $sql3="SELECT * FROM `quiz_takers` where username='".'Quiz_3_'.$a['email']."'";
			 
		     $run3=mysql_query($sql3);
			 $a3=mysql_fetch_array($run3);
			
 $m3=$a3['marks'];
	
			 ?>
			 
	<?php
	$total=$m1+$m2+$m3;
	$total;
	
	mysql_query("INSERT INTO pdfdata(name,email_id,average_score,course)VALUES('$a['UNAME']', '$a['email']', '$total', '$a['']' ) " );
	?>		 
			 