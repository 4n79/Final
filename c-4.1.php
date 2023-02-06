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



<h3 style="color:#1f7898"><center>C- Operators</center></h3>
<span style="margin-top:40px;margin-left:40px;color:#000000font-size:40px;">
An operator is a symbol that tells the compiler to perform specific mathematical or logical functions. C language is rich in built-in operators and provides the following types of operators -<br>
<ul>
<li>
Arithmetic Operators</li>
<li>Relational Operators</li>
<li>Logical Operators</li>
<li>Bitwise Operators</li>
<li>Assignment Operators</li>
<li>Misc Operators</li>
</li><br>


We will, in this chapter, look into the way each operator works.<br>

<h2>  Arithmetic Operators</h2>

The following table shows all the arithmetic operators supported by the C language. Assume variable A holds 10 and variable B holds 20 then -

Show Examples<br>

<table>

<tr>

<th>Operator
</th>

<th>Description
</th>

<th>Example
</th>

</tr>

<tr>
<td>+</td>
<td>Adds two operands.</td>
<td>A + B = 30</td>
</tr>

<tr>
<td>-</td>
<td>Subtracts second operand from the first.</td>
<td>A - B = -10</td>
</tr>

<tr>
<td>*</td>
<td>Multiplies both operands.</td>
<td>A * B = 200</td>
</tr>

<tr>
<td>%</td>
<td>Modulus Operator and remainder of after an integer division.</td>
<td>B % A = 0</td>
</tr>

<tr>
<td>++</td>
<td>Increment operator increases the integer value by one.</td>
<td>A++ = 11</td>
</tr>

<tr>
<td>--</td>
<td>Decrement operator decreases the integer value by one.</td>
<td>A-- = 9</td>
</tr>
</table>

<br>





<h2>
Relational Operators</h2>

The following table shows all the relational operators supported by C. Assume variable A holds 10 and variable B holds 20 then -<br>

Show Examples<br>

<table>

<tr>
<td>Operator</td>
<td>Description</td>
<td>Example</td>
</tr>

<tr>
<td>==</td>
<td>Checks if the values of two operands are equal or not. If yes, then the condition becomes true.</td>
<td>	(A == B) is not true.</td>
</tr>

<tr>
<td>!=</td>
<td>Checks if the values of two operands are equal or not. If the values are not equal, then the condition becomes true.</td>
<td>(A != B) is true.</td>
</tr>

<tr>
<td>></td>
<td>Checks if the value of left operand is greater than the value of right operand. If yes, then the condition becomes true.</td>
<td>(A > B) is not true.</td>
</tr>

<tr>
<td><</td>
<td>Checks if the value of left operand is less than the value of right operand. If yes, then the condition becomes true.</td>
<td>(A < B) is true.</td>
</tr>

<tr>
<td>>=</td>
<td>Checks if the value of left operand is greater than or equal to the value of right operand. If yes, then the condition becomes true.</td>
<td>(A >= B) is not true.</td>
</tr>

<tr>
<td><=</td>
<td>Checks if the value of left operand is less than or equal to the value of right operand. If yes, then the condition becomes true.</td>
<td>(A <= B) is true.</td>
</tr>

</table>

<h2>Logical Operators
</h2>

Following table shows all the logical operators supported by C language. Assume variable A holds 1 and variable B holds 0, then -<br>

Show Examples<br>

<table>

<tr>
<td>Operator</td>
<td>Description</td>
<td>Example</td>
</tr>

<tr>
<td>&&</td>
<td>Called Logical AND operator. If both the operands are non-zero, then the condition becomes true.</td>
<td>(A && B) is false.</td>
</tr>

<tr>
<td>||</td>
<td>Called Logical OR Operator. If any of the two operands is non-zero, then the condition becomes true.</td>
<td>(A || B) is true.</td>
</tr>

<tr>
<td>!</td>
<td>Called Logical NOT Operator. It is used to reverse the logical state of its operand. If a condition is true, then Logical NOT operator will make it false.</td>
<td><!(A && B) is true./td>
</tr>

</table>

<br>

<h2> Bitwise Operators</h2>
Bitwise operator works on bits and perform bit-by-bit operation. The truth tables for &, |, and ^ is as follows -<br>

<table>
<tr>
<td>p</td>
<td>q</td>
<td>p & q</td>
<td>p | q</td>
<td>p ^ q</td>

</tr>

<tr>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>

<td>0</td>

</tr>
<tr>
<td>0</td>
<td>1</td>
<td>0</td>
<td>1</td>
<td>1</td>

</tr>
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>0</td>

</tr><tr>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>1</td>

</tr>



<table>

<h2> Assignment Operators</h2>
The following table lists the assignment operators supported by the C language -<br>

Show Examples<br>


<table>

<tr>
<td>Operator</td>
<td>Description</td>
<td>Example</td>
</tr>


<tr>
<td>=</td>
<td>Simple assignment operator. Assigns values from right side operands to left side operand</td>
<td>C = A + B will assign the value of A + B to </td>
</tr>

<tr>
<td>+=</td>
<td>Add AND assignment operator. It adds the right operand to the left operand and assign the result to the left operand.</td>
<td>C += A is equivalent to C = C + A</td>
</tr>


<tr>
<td>-=</td>
<td>Subtract AND assignment operator. It subtracts the right operand from the left operand and assigns the result to the left operand.</td>
<td>C -= A is equivalent to C = C - A</td>
</tr>


<tr>
<td>*=</td>
<td>Multiply AND assignment operator. It multiplies the right operand with the left operand and assigns the result to the left operand.</td>
<td>C *= A is equivalent to C = C * A</td>
</tr>


</table>

<h2>     Operators Precedence in C</h2>








Operator precedence determines the grouping of terms in an expression and decides how an expression is evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has a higher precedence than the addition operator.

For example, x = 7 + 3 * 2; here, x is assigned 13, not 20 because operator * has a higher precedence than +, so it first gets multiplied with 3*2 and then adds into 7.

Here, operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom. Within an expression, higher precedence operators will be evaluated first.

Show Examples<br>

Category->Operator->Associativity<br><br>
Postfix	() [] -> . ++ - -	Left to right<br>
Unary	+ - ! ~ ++ - - (type)* & sizeof	Right to left<br>
Multiplicative	* / %	Left to right<br>
Additive	+ -	Left to right<br>
Shift	<< >>	Left to right<br>
Relational	< <= > >=	Left to right<br>
Equality	== !=	Left to right<br>
Bitwise AND	&	Left to right<br>
Bitwise XOR	^	Left to right<br>
Bitwise OR	|	Left to right<br>
Logical AND	&&	Left to right<br>
Logical OR	||	Left to right<br>
Conditional	?:	Right to left<br>
Assignment	= += -= *= /= %=>>= <<= &= ^= |=	Right to left<br>
Comma	,	Left to right<br>




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




