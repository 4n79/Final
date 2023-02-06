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

<h3 style="color:#1f7898"><center>C- Data Types</center></h3>
<span style="margin-top:40px;margin-left:40px;color:#000000font-size:40px;">
Data types in c refer to an extensive system used for declaring variables or functions of different types. The type of a variable determines how much space it occupies in storage and how the bit pattern stored is interpreted.<br>

The types in C can be classified as follows -<br>

<h2>Types & Description</h2>
<ol>
<li>
Basic Types

They are arithmetic types and are further classified into: (a) integer types and (b) floating-point types.

</li><li>
Enumerated types

They are again arithmetic types and they are used to define variables that can only assign certain discrete integer values throughout the program.

</li><li>
The type void

The type specifier void indicates that no value is available.

</li><li>
Derived types

They include (a) Pointer types, (b) Array types, (c) Structure types, (d) Union types and (e) Function types.

</li></ol>

The array types and structure types are referred collectively as the aggregate types. The type of a function specifies the type of the function's return value. We will see the basic types in the following section, where as other types will be covered in the upcoming chapters.

<h2>Integer Types</h2>

The following table provides the details of standard integer types with their storage sizes and value ranges -<br>


<h2> Type	Storage size	Value range</h2>
char	1 byte	-128 to 127 or 0 to 255<br>
unsigned char	1 byte	0 to 255<br>
signed char	1 byte	-128 to 127<br>
int	2 or 4 bytes	-32,768 to 32,767 or -2,147,483,648 to 2,147,483,647<br>
unsigned int	2 or 4 bytes	0 to 65,535 or 0 to 4,294,967,295<br>
short	2 bytes	-32,768 to 32,767<br>
unsigned short	2 bytes	0 to 65,535<br>
long	4 bytes	-2,147,483,648 to 2,147,483,647<br>
unsigned long	4 bytes	0 to 4,294,967,295<br>

To get the exact size of a type or a variable on a particular platform, you can use the sizeof operator. The expressions sizeof(type) yields the storage size of the object or type in bytes. Given below is an example to get the size of int type on any machine -

 Demo<br>
#include <stdio.h><br>
#include <limits.h><br>

int main() {<br>
   printf("Storage size for int : %d \n", sizeof(int));<br>
   
   return 0;<br>
}
When you compile and execute the above program, it produces the following result on Linux -<br>

Storage size for int : 4<br>

<h2>Floating-Point Types</h2>

The following table provide the details of standard floating-point types with storage sizes and value ranges and their precision -<br>

Type-	Storage size-	Value range	Precision<br>
float	4 byte	1.2E-38 to 3.4E+38	6 decimal places<br>
double	8 byte	2.3E-308 to 1.7E+308	15 decimal places<br>
long double	10 byte	3.4E-4932 to 1.1E+4932	19 decimal places<br>
The header file float.h defines macros that allow you to use these values and other details about the binary representation of real numbers in your programs. The following example prints the storage space taken by a float type and its range values -<br>

 Demo<br>
#include <stdio.h><br>
#include <float.h><br>

int main() {<br>
   printf("Storage size for float : %d \n", sizeof(float));<br>
   printf("Minimum float positive value: %E\n", FLT_MIN );<br>
   printf("Maximum float positive value: %E\n", FLT_MAX );<br>
   printf("Precision value: %d\n", FLT_DIG );<br>
   
   return 0;<br>
}
When you compile and execute the above program, it produces the following result on Linux -<br>

Storage size for float : 4<br>
Minimum float positive value: 1.175494E-38<br>
Maximum float positive value: 3.402823E+38<br>
Precision value: 6<br>

<h2>  The void Type</h2>

The void type specifies that no value is available. It is used in three kinds of situations -<br>

<h2>Types & Description</h2>

<ol>
<li>


Function returns as void

There are various functions in C which do not return any value or you can say they return void. A function with no return value has the return type as void. For example, void exit (int status);
</li><li>
Function arguments as void

There are various functions in C which do not accept any parameter. A function with no parameter can accept a void. For example, int rand(void);
</li><li>
Pointers to void

A pointer of type void * represents the address of an object, but not its type. For example, a memory allocation function void *malloc( size_t size ); returns a pointer to void which can be casted to any data type.
</li>

</ol><br>

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
