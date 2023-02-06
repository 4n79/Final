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

<h3 style="color:#1f7898"><center>C - Input and Output</center></h3>
<span style="margin-top:40px;margin-left:40px;color:#000000font-size:40px;">
When we say Input, it means to feed some data into a program. An input can be given in the form of a file or from the command line. C programming provides a set of built-in functions to read the given input and feed it to the program as per requirement.<br>

When we say Output, it means to display some data on screen, printer, or in any file. C programming provides a set of built-in functions to output the data on the computer screen as well as to save it in text or binary files.<br>

<h2>
The Standard Files
</h2>

C programming treats all the devices as files. So devices such as the display are addressed in the same way as files and the following three files are automatically opened when a program executes to provide access to the keyboard and screen<br>

<table>

<tr>
<td>Standard File</td>
<td>File Pointer</td>
<td>Device</td>
</tr>


<tr>
<td>Standard inpu</td>
<td>stdin</td>
<td>Keyboard</td>
</tr>


<tr>
<td>Standard output</td>
<td>stdout</td>
<td>Screen</td>
</tr>


<tr>
<td>Standard error</td>
<td><stderr/td>
<td>Your screen</td>
</tr>

</table>

<h2>
The getchar() and putchar() Functions
</h2>

The int getchar(void) function reads the next available character from the screen and returns it as an integer. This function reads only single character at a time. You can use this method in the loop in case you want to read more than one character from the screen.<br>

The int putchar(int c) function puts the passed character on the screen and returns the same character. This function puts only single character at a time. You can use this method in the loop in case you want to display more than one character on the screen. Check the following example -<br>

#include <stdio.h><br>
int main( ) {<br>

   int c;<br>

   printf( "Enter a value :");<br>
   c = getchar( );<br>

   printf( "\nYou entered: ");<br>
   putchar( c );<br>

   return 0;<br>
}<br>
When the above code is compiled and executed, it waits for you to input some text. When you enter a text and press enter, then the program proceeds and reads only a single character and displays it as follows -<br>

$./a.out<br>
Enter a value : this is test<br>
You entered: t<br>


<h2>
The gets() and puts() Functions
</h2>


The char *gets(char *s) function reads a line from stdin into the buffer pointed to by s until either a terminating newline or EOF (End of File).<br>

The int puts(const char *s) function writes the string 's' and 'a' trailing newline to stdout.<br>

#include <stdio.h><br>
int main( ) {<br>

   char str[100];<br>

   printf( "Enter a value :");<br>
   gets( str );<br>

   printf( "\nYou entered: ");<br>
   puts( str );<br>

   return 0;<br>
}<br>
When the above code is compiled and executed, it waits for you to input some text. When you enter a text and press enter, then the program proceeds and reads the complete line till end, and displays it as follows -<br>

$./a.out<br>
Enter a value : this is test<br>
You entered: this is test<br>

<h2>
The scanf() and printf() Functions
</h2>

The int scanf(const char *format, ...) function reads the input from the standard input stream stdin and scans that input according to the format provided.<br>

The int printf(const char *format, ...) function writes the output to the standard output stream stdout and produces the output according to the format provided.<br>

The format can be a simple constant string, but you can specify %s, %d, %c, %f, etc., to print or read strings, integer, character or float respectively. There are many other formatting options available which can be used based on requirements. Let us now proceed with a simple example to understand the concepts better -<br>

#include <stdio.h><br>
int main( ) {<br>

   char str[100];<br>
   int i;<br>

   printf( "Enter a value :");<br>
   scanf("%s %d", str, &i);<br>

   printf( "\nYou entered: %s %d ", str, i);<br>

   return 0;<br>
}
When the above code is compiled and executed, it waits for you to input some text. When you enter a text and press enter, then program proceeds and reads the input and displays it as follows -<br>

$./a.out<br>
Enter a value : seven 7<br>
You entered: seven 7<br>
Here, it should be noted that scanf() expects input in the same format as you provided %s and %d, which means you have to provide valid inputs like "string integer". If you provide "string string" or "integer integer", then it will be assumed as wrong input. Secondly, while reading a string, scanf() stops reading as soon as it encounters a space, so "this is test" are three strings for scanf().<br>











</span>
/div>




</div>




	  <div id="p11">

<ul id="navlist">
 <li><a href=".php"><font color="#FFFFFF"></font>-----</a></li>
  
  
		        

				

		      </ul>
			  </div>
			  




<?php
}
?>	






