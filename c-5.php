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
.container { width: 100%; margin: auto; margin-bottom:auto; }
.container .ism-slider { width: 100%;height:270px;margin-left: auto; margin-right: auto;margin-bottom:auto;}
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







<div class="p5" style="height:100px;width:60%;background-color:#207797;"> 

<div id="p3d" style="float:left;">


</div>
</div>




<div id="p01" style="height:800px;">






<div class="pp1" style="height:800px;width:20%;background-color:#FFFFFF">
<center>
 <span style="font-size:20px;">SUB COURSE</span>
 <hr>

			
</center>			
			

<div id="p1">
<div class="p2"><center><a href="index.php"><font size="4px" color="#000000">Quiz-1</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">
<div class="p3"><center><a href="c-1.php"><font size="4px" color="#000000">C- Introduction</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">
<div class="p4"><center><a href="c-2.php"><font size="4px" color="#000000">C- Introduction</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">
<div class="p5"><center><a href="c-3.php"><font size="4px" color="#000000">C- Data Types & Variable</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">
<div class="p6"><center><a href="c-4.php"><font size="4px" color="#000000">C- Storage Classes & Operators </a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">
<div class="p7"><center><a href="c-5.php"><font size="4px" color="#000000">C - Decision Making & Loops</a></center></font><hr style="color:#FFFFFF;height:10px;"></center></div>
<hr style="color:#FFFFFF">
<div class="p8"></div>
<hr style="color:#FFFFFF">
<div class="p9"></div>
<hr style="color:#FFFFFF">
<div class="p10"></div>
<hr style="color:#FFFFFF">
<div class="p11"></div>
<hr style="color:#FFFFFF">
<div class="p12"></div>
<hr style="color:#FFFFFF">
<div class="p13"></div>
<hr style="color:#FFFFFF">
<div class="p14"></div>
<hr style="color:#FFFFFF">
<div class="p15"></div>
<hr style="color:#FFFFFF">
<div class="p16"></div>
<hr style="color:#FFFFFF">
<div class="p17"></div>
<hr style="color:#FFFFFF">
<div class="p18"></div>
<hr style="color:#FFFFFF">
<div class="p19"></div>
<hr style="color:#FFFFFF">

</div>















</div>






<div class="pp2" style="height:800px;overflow:scroll;width:79%;">

<h3 style="color:#1f7898"><center>C - Decision Making</center></h3>
<span style="margin-top:40px;margin-left:40px;color:#000000font-size:40px;">
Decision making structures require that the programmer specifies one or more conditions to be evaluated or tested by the program, along with a statement or statements to be executed if the condition is determined to be true, and optionally, other statements to be executed if the condition is determined to be false.<br>

C programming language assumes any non-zero and non-null values as true, and if it is either zero or null, then it is assumed as false value.<br>

C programming language provides the following types of decision making statements.<br>

<h2>     Statement & Description</h2>


<ul>

<li>
if statement
An if statement consists of a boolean expression followed by one or more statements.
</li>

<li>
	if...else statement
An if statement can be followed by an optional else statement, which executes when the Boolean expression is false.
</li>


<li>

nested if statements
You can use one if or else if statement inside another if or else if statement(s).
</li>


<li>

switch statement
A switch statement allows a variable to be tested for equality against a list of values.
</li>


<li>
nested switch statements
You can use one switch statement inside another switch statement(s).
</li>


<h2>    The ? : Operator</h2>

We have covered conditional operator ? : in the previous chapter which can be used to replace if...else statements. It has the following general form -<br>

Exp1 ? Exp2 : Exp3;<br>
Where Exp1, Exp2, and Exp3 are expressions. Notice the use and placement of the colon.<br>

The value of a ? expression is determined like this -<br>

Exp1 is evaluated. If it is true, then Exp2 is evaluated and becomes the value of the entire ? expression.<br>

If Exp1 is false, then Exp3 is evaluated and its value becomes the value of the expression.<br>
</span>






</div>




</div>




	  <div id="p11">

<ul id="navlist">
 <li><a href=".php"><font color="#FFFFFF"></font>-----</a></li>
  
  
		        

				

		      </ul>
			  </div>
			  




<?php
}
?>	
