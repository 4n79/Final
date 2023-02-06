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
<meta charset="utf-8">
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


<h3 style="color:#1f7898"><center>C - Unions</center></h3>
<span style="margin-top:40px;margin-left:40px;color:#000000font-size:40px;">
A union is a special data type available in C that allows to store different data types in the same memory location. You can define a union with many members, but only one member can contain a value at any given time. Unions provide an efficient way of using the same memory location for multiple-purpose.<br>
<h2>
Defining a Union
</h2>


To define a union, you must use the union statement in the same way as you did while defining a structure. The union statement defines a new data type with more than one member for your program. The format of the union statement is as follows -
<br>
union [union tag] {<br>
   member definition;<br>
   member definition;<br>
   ...
   member definition;<br>
} [one or more union variables]; <br> 
The union tag is optional and each member definition is a normal variable definition, such as int i; or float f; or any other valid variable definition. At the end of the union's definition, before the final semicolon, you can specify one or more union variables but it is optional. Here is the way you would define a union type named Data having three members i, f, and str -<br>

union Data {<br>
   int i;<br>
   float f;
   char str[20];<br>
} data;  <br>
Now, a variable of Data type can store an integer, a floating-point number, or a string of characters. It means a single variable, i.e., same memory location, can be used to store multiple types of data. You can use any built-in or user defined data types inside a union based on your requirement.
<br>
The memory occupied by a union will be large enough to hold the largest member of the union. For example, in the above example, Data type will occupy 20 bytes of memory space because this is the maximum space which can be occupied by a character string. The following example displays the total memory size occupied by the above union -
<br>
 Demo<br>
#include <stdio.h><br>
#include <string.h><br>
 
union Data {<br>
   int i;<br>
   float f;<br>
   char str[20];<br>
};<br>
 
int main( ) {<br>

   union Data data;<br>        

   printf( "Memory size occupied by data : %d\n", sizeof(data));<br>

   return 0;<br>
}<br>
When the above code is compiled and executed, it produces the following result -<br>

Memory size occupied by data : 20<br>

<h2>
Accessing Union Members
</h2>

To access any member of a union, we use the member access operator (.). The member access operator is coded as a period between the union variable name and the union member that we wish to access. You would use the keyword union to define variables of union type. The following example shows how to use unions in a program -
<br>
  Demo<br>
#include <stdio.h><br>
#include <string.h><br>
 
union Data {<br>
   int i;<br>
   float f;<br>
   char str[20];<br>
};<br>
 
int main( ) {<br>

   union Data data; <br>       

   data.i = 10;<br>
   data.f = 220.5;<br>
   strcpy( data.str, "C Programming");<br>

   printf( "data.i : %d\n", data.i);<br>
   printf( "data.f : %f\n", data.f);<br>
   printf( "data.str : %s\n", data.str);<br>

   return 0;<br>
}<br>
When the above code is compiled and executed, it produces the following result -
<br>
data.i : 1917853763<br>
data.f : 4122360580327794860452759994368.000000<br>
data.str : C Programming<br>
Here, we can see that the values of i and f members of union got corrupted because the final value assigned to the variable has occupied the memory location and this is the reason that the value of str member is getting printed very well.
<br>
Now let's look into the same example once again where we will use one variable at a time which is the main purpose of having unions -
<br>
  Demo<br>
#include <stdio.h><br>
#include <string.h>
<br> 
union Data {<br>
   int i;<br>
   float f;<br>
   char str[20];<br>
};<br>
 
int main( ) {<br>

   union Data data;<br>        

   data.i = 10;<br>
   printf( "data.i : %d\n", data.i);<br>
   
   data.f = 220.5;<br>
   printf( "data.f : %f\n", data.f);<br>
   
   strcpy( data.str, "C Programming");<br>
   printf( "data.str : %s\n", data.str);<br>

   return 0;<br>
}<br>
When the above code is compiled and executed, it produces the following result -
<br>
data.i : 10<br>
data.f : 220.500000<br>
data.str : C Programming<br>
Here, all the members are getting printed very well because one member is<br> 



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




