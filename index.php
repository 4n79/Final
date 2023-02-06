   <?php 
error_reporting(0);   
  ?>


 <?php 
 

  include('connection.php');


    $index_selecting_quiz = mysql_query("SELECT quiz_id, display_questions, time_allotted, quiz_name
                                    FROM quizes WHERE set_default=1");
    $index_selecting_quiz_row = mysql_fetch_array($index_selecting_quiz);
    $index_selecting_quiz_num = mysql_num_rows($index_selecting_quiz);


    $user_taken = "";
    if(isset($_POST['user_msg']) && $_POST['user_msg']!=""){
        $user_taken = $_POST['user_msg'];
    }

    if(isset($_GET['user_msg']) && $_GET['user_msg']!=""){
        $user_taken = $_GET['user_msg'];
    }

    $total_questions = preg_replace('/[^0-9]/', "", $index_selecting_quiz_row['display_questions']);
    $total_time = preg_replace('/[^0-9]/', "", $index_selecting_quiz_row['time_allotted']);
    $quizName = $index_selecting_quiz_row['quiz_name'];

    
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
error_reporting(0);   
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
 <script type="text/javascript">
            
			
			function submit()
			{
                
				var x=document.forms["onlyForm"]["rollno"].value;
                return false;
            }
        </script>
		
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




<div id="p01" style="height:800px;">

<div class="pp1" style="height:800px;width:20%;background-color:#FFFFFF">
<center>
 <span style="font-size:20px;">SUB COURSE</span>
 <hr>

			
</center>			
			

<div id="p1">
<div class="p3"><center><a href="c-1.php"><font size="4px" color="#000000">C- Introduction</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p4"><center><a href="c-2.php"><font size="4px" color="#000000">C-Basic Syntax</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p5"><center><a href="c-3.php"><font size="4px" color="#000000">C- Data Types</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p19"><center><a href="c-3.1.php"><font size="4px" color="#000000">C- Variables</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p6"><center><a href="c-4.php"><font size="4px" color="#000000">C- Storage Classes</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p18"><center><a href="c-4.1.php"><font size="4px" color="#000000">C-Operators </a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p7"><center><a href="c-5.php"><font size="4px" color="#000000">C - Decision Making </a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p17"><center><a href="c-5.1.php"><font size="4px" color="#000000">C - Loops</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p8"><center><a href="c-6.php"><font size="4px" color="#000000">C - Functions </a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p16"><center><a href="c-6.1.php"><font size="4px" color="#000000">C - Scope Rules</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p9"><center><a href="c-7.php"><font size="4px" color="#000000">C - Arrays </a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p15"><center><a href="c-7.1.php"><font size="4px" color="#000000">C - Pointers</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p10"><center><a href="c-8.php"><font size="4px" color="#000000">C - Strings </a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p14"><center><a href="c-8.1.php"><font size="4px" color="#000000">C -Input and Output</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p11"><center><a href="c-9.php"><font size="4px" color="#000000">C - Structures </a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p13"><center><a href="c-9.1.php"><font size="4px" color="#000000">C - Unions</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p2"><center><a href="index.php"><font size="4px" color="#000000">Quiz-1</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">

<div class="p12"></div>
<hr style="color:#FFFFFF">
</div>
</div>
<div class="pp2" style="height:800px;overflow:scroll;width:79%;">

<center>


            
				<h2>QUIZ</h2>
          
            <h3 align="left">Instruction:</h3>
            <div align="left">
                <ul>
                  
                    <li>Total number of questions : 20.</li>
                    <li>Time alloted : 30 minutes.</li>
					<li>Each question carry 1 mark, no negative marks.</li>
                    <li>You can only attempt the quiz once.</li>
                </ul>
            </div>

            
			
			
			<h2>choose your quiz</h2>

            
			
			
			
			<form id="myForm" name="onlyForm" action="quiz.php" method="POST">
			
                <table align="center">
                    <tr>
                        <td align="center">
                            <select  name="rollno" style="height:30px; width:350px;" >
							<option>Quiz_1_<?php echo $a['email']?></option>
							<option>Quiz_2_<?php echo $a['email']?></option>
							<option>Quiz_3_<?php echo $a['email']?></option>
							</select>
                        </td>
                    </tr>
                  
                    <tr>
                
                    <td align="center" ><input class="btmmm"  type="submit" value="START" name="javascript:submit();">
							
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id = "enter_rollno" align="center"><?php echo $user_taken ?></div>
                        </td>
                    </tr>
                </table>
            
			
			</form>
        		
</center>

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

