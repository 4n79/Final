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






<div class="p5" style="height:100px;width:60%;"> 

<div id="p3d" style="float:left;">
<div class="p4d" style="font-weight:bold;font-size:15px;color:#fff;"><center><center>TEST-1 SCORE:<BR></center></div>
<div class="p5d" style="font-weight:bold;font-size:15px;color:#fff;"><center>TEST-2 SCORE:<BR></center></div>
<div class="p6d" style="font-weight:bold;font-size:15px;color:#fff;"><center>TEST-3 SCORE:<BR></center></div>
<div class="p7d" style="font-weight:bold;font-size:15px;color:#fff;"><center>AVERAGE SCORE:<BR></center></div>
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

<h3 style="color:#1f7898"><center>C - Structures </center></h3>
<span style="margin-top:40px;margin-left:40px;color:#000000font-size:40px;">



Arrays allow to define type of variables that can hold several data items of the same kind. Similarly structure is another user defined data type available in C that allows to combine data items of different kinds.<br>

Structures are used to represent a record. Suppose you want to keep track of your books in a library. You might want to track the following attributes about each book -<br>

<ul>

<li>
Title
</li>

<li>
Author
</li>

<li>
Subject
</li>

<li>
Book ID
</li>

<h2>
Defining a Structure
</h2>


To define a structure, you must use the struct statement. The struct statement defines a new data type, with more than one member. The format of the struct statement is as follows -<br>

struct [structure tag] {<br>

   member definition;<br>
   member definition;<br>
   ...
   member definition;<br>
} [one or more structure variables];<br>  
The structure tag is optional and each member definition is a normal variable definition, such as int i; or float f; or any other valid variable definition. At the end of the structure's definition, before the final semicolon, you can specify one or more structure variables but it is optional. Here is the way you would declare the Book structure -<br>

struct Books {<br>
   char  title[50];<br>
   char  author[50];<br>
   char  subject[100];<br>
   int   book_id;<br>
} book;  <br>

<h2>
Accessing Structure Members
</h2>

o access any member of a structure, we use the member access operator (.). The member access operator is coded as a period between the structure variable name and the structure member that we wish to access. You would use the keyword struct to define variables of structure type. The following example shows how to use a structure in a program -<br>

 Demo<br>
#include <stdio.h><br>
#include <string.h><br>
 
struct Books {<br>
   char  title[50];<br>
   char  author[50];
   char  subject[100];<br>
   int   book_id;<br>
};<br>
 
int main( ) {<br>

   struct Books Book1;        /* Declare Book1 of type Book */<br>
   struct Books Book2;        /* Declare Book2 of type Book */<br>
 
   /* book 1 specification */<br>
   strcpy( Book1.title, "C Programming");<br>
   strcpy( Book1.author, "Nuha Ali"); <br>
   strcpy( Book1.subject, "C Programming Tutorial");<br>
   Book1.book_id = 6495407;<br>

   /* book 2 specification */<br>
   strcpy( Book2.title, "Telecom Billing");<br>
   strcpy( Book2.author, "Zara Ali");<br>
   strcpy( Book2.subject, "Telecom Billing Tutorial");<br>
   Book2.book_id = 6495700;<br>
 
   /* print Book1 info */<br>
   printf( "Book 1 title : %s\n", Book1.title);<br>
   printf( "Book 1 author : %s\n", Book1.author);<br>
   printf( "Book 1 subject : %s\n", Book1.subject);<br>
   printf( "Book 1 book_id : %d\n", Book1.book_id);<br>

   /* print Book2 info */<br>
   printf( "Book 2 title : %s\n", Book2.title);<br>
   printf( "Book 2 author : %s\n", Book2.author);<br>
   printf( "Book 2 subject : %s\n", Book2.subject);<br>
   printf( "Book 2 book_id : %d\n", Book2.book_id);<br>

   return 0;<br>
}<br>
When the above code is compiled and executed, it produces the following result -<br>

Book 1 title : C Programming<br>
Book 1 author : Nuha Ali<br>
Book 1 subject : C Programming Tutorial<br>
Book 1 book_id : 6495407<br>
Book 2 title : Telecom Billing<br>
Book 2 author : Zara Ali<br>
Book 2 subject : Telecom Billing Tutorial<br>
Book 2 book_id : 6495700<br>

<h2>
Structures as Function Arguments
</h2>

You can pass a structure as a function argument in the same way as you pass any other variable or pointer.
<br>
  Demo<br>
#include <stdio.h><br>
#include <string.h><br>
 
struct Books {<br>
   char  title[50];<br>
   char  author[50];<br>
   char  subject[100];<br>
   int   book_id;<br>
};<br>

/* function declaration */<br>
void printBook( struct Books book );<br>

int main( ) {<br>

   struct Books Book1;        /* Declare Book1 of type Book */<br>
   struct Books Book2;        /* Declare Book2 of type Book */<br>
 
   /* book 1 specification */<br>
   strcpy( Book1.title, "C Programming");<br>
   strcpy( Book1.author, "Nuha Ali"); <br>
   strcpy( Book1.subject, "C Programming Tutorial");<br>
   Book1.book_id = 6495407;<br>

   /* book 2 specification */<br>
   strcpy( Book2.title, "Telecom Billing");<br>
   strcpy( Book2.author, "Zara Ali");<br>
   strcpy( Book2.subject, "Telecom Billing Tutorial");<br>
   Book2.book_id = 6495700;<br>
 
   /* print Book1 info */<br>
   printBook( Book1 );<br>

   /* Print Book2 info */<br>
   printBook( Book2 );<br>

   return 0;<br>
}<br>

void printBook( struct Books book ) {<br>

   printf( "Book title : %s\n", book.title);<br>
   printf( "Book author : %s\n", book.author);<br>
   printf( "Book subject : %s\n", book.subject);<br>
   printf( "Book book_id : %d\n", book.book_id);<br>
}<br>
When the above code is compiled and executed, it produces the following result -<br>

Book title : C Programming<br>
Book author : Nuha Ali<br>
Book subject : C Programming Tutorial<br>
Book book_id : 6495407<br>
Book title : Telecom Billing<br>
Book author : Zara Ali<br>
Book subject : Telecom Billing Tutorial<br>
Book book_id : 6495700<br>


<h2>
Pointers to Structures
</h2>

You can define pointers to structures in the same way as you define pointer to any other variable -<br>

struct Books *struct_pointer;<br>
Now, you can store the address of a structure variable in the above defined pointer variable. To find the address of a structure variable, place the '&'; operator before the structure's name as follows -<br>

struct_pointer = &Book1;<br>
To access the members of a structure using a pointer to that structure, you must use the ? operator as follows -<br>

struct_pointer->title;<br>
Let us re-write the above example using structure pointer.<br>

 Demo<br>
#include <stdio.h><br>
#include <string.h><br>
 
struct Books {<br>
   char  title[50];<br>
   char  author[50];<br>
   char  subject[100];<br>
   int   book_id;<br>
};<br>

/* function declaration */<br>
void printBook( struct Books *book );<br>
int main( ) {<br>

   struct Books Book1;        /* Declare Book1 of type Book */<br>
   struct Books Book2;        /* Declare Book2 of type Book */<br>
 
   /* book 1 specification */<br>
   strcpy( Book1.title, "C Programming");<br>
   strcpy( Book1.author, "Nuha Ali"); <br>
   strcpy( Book1.subject, "C Programming Tutorial");<br>
   Book1.book_id = 6495407;<br>

   /* book 2 specification */<br>
   strcpy( Book2.title, "Telecom Billing");<br>
   strcpy( Book2.author, "Zara Ali");<br>
   strcpy( Book2.subject, "Telecom Billing Tutorial");<br>
   Book2.book_id = 6495700;<br>
 
   /* print Book1 info by passing address of Book1 */<br>
   printBook( &Book1 );<br>

   /* print Book2 info by passing address of Book2 */<br>
   printBook( &Book2 );<br>

   return 0;<br>
}<br>

void printBook( struct Books *book ) {<br>

   printf( "Book title : %s\n", book->title);<br>
   printf( "Book author : %s\n", book->author);<br>
   printf( "Book subject : %s\n", book->subject);<br>
   printf( "Book book_id : %d\n", book->book_id);<br>
}<br>
When the above code is compiled and executed, it produces the following result -<br>

Book title : C Programming<br>
Book author : Nuha Ali<br>
Book subject : C Programming Tutorial<br>
Book book_id : 6495407<br>
Book title : Telecom Billing<br>
Book author : Zara Ali<br>
Book subject : Telecom Billing Tutorial<br>
Book book_id : 6495700<br>

<h2>
Bit Fields
</h2>

Bit Fields allow the packing of data in a structure. This is especially useful when memory or data storage is at a premium. Typical examples include -
<br>
Packing several objects into a machine word. e.g. 1 bit flags can be compacted.
<br>
Reading external file formats -- non-standard file formats could be read in, e.g., 9-bit integers.
<br>
C allows us to do this in a structure definition by putting :bit length after the variable. For example -
<br>
struct packed_struct {<br>
   unsigned int f1:1;<br>
   unsigned int f2:1;<br>
   unsigned int f3:1;<br>
   unsigned int f4:1;<br>
   unsigned int type:4;<br>
   unsigned int my_int:9;<br>
} pack;<br>
Here, the packed_struct contains 6 members: Four 1 bit flags f1..f3, a 4-bit type and a 9-bit my_int.
<br>
C automatically packs the above bit fields as compactly as possible, provided that the maximum length of the field is less than or equal to the integer word length of the computer. If this is not the case, then some compilers may allow memory overlap for the fields while others would store the next field in the next word.<br>
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




