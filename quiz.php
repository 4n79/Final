 <?php 
error_reporting(0);   
  ?>

<?php
include('connection.php');

	$selecting_quiz = mysql_query("SELECT quiz_id, display_questions, time_allotted, quiz_name
									FROM quizes WHERE set_default=1");
	$selecting_quiz_row = mysql_fetch_array($selecting_quiz);



	if(isset($_POST['rollno']) && $_POST['rollno'] != "")
	{
		
	 //getting values in variables
		$roll_no = $_POST['rollno'];
		$roll_no = htmlspecialchars($roll_no);
		$roll_no = mysql_real_escape_string($roll_no);

		$total_questions = preg_replace('/[^0-9]/', "", $selecting_quiz_row['display_questions']);

	 //total time converted to seconds
		$total_time = (preg_replace('/[^0-9]/', "", $selecting_quiz_row['time_allotted']))*60;

		$final_quiz_ID = preg_replace('/[^0-9]/', "", $selecting_quiz_row['quiz_id']);

		$quzz_name = $selecting_quiz_row['quiz_name'];

	 //checking if user has already taken this quiz
		$userCheck = mysql_query(" SELECT id FROM quiz_takers 
										WHERE username = '$roll_no' 
										AND quiz_id='$final_quiz_ID' ")or die(mysql_error());
										
	 //if user already did, redirect to index.php with error
		if(!(mysql_num_rows($userCheck) < 1)){
			$user_msg = 'Sorry, but '.$roll_no.', has already attempted the quiz, '.$quzz_name.'!';
			header('location: index.php?user_msg='.$user_msg.'');
			exit();
		}		
		else{
	 //else inserting few columns into the table
		mysql_query("INSERT INTO quiz_takers (username, percentage, date_time, quiz_id, duration) 
					 VALUES ('$roll_no', '0', now(), '$final_quiz_ID', '0')")or die(mysql_error());
		}
	}else{
		$user_msg = 'Hey, This is the start Page, So enter your username here first';
		header('location: index.php?user_msg='.$user_msg.'');
			exit();
	}







 //getting body i.e. questions, options and submit button for the page

 //initialize the optput variable
	$m_output='';
 
 //Getting the questions from DB here
	$m_questions_from_DB = mysql_query("SELECT * FROM questions WHERE quiz_id='$final_quiz_ID'
								ORDER BY rand() LIMIT $total_questions");

		while (mysql_num_rows($m_questions_from_DB)<1)
		 {
			$user_msg = 'Hey, weird, but it seems there are no questions in this quiz!';
			header('location: index.php?user_msg='.$user_msg.'');
			exit();
		}

	 //setting Question No. to 1 on quiz page(necessary due to rand() above)
		$m_display_ID = 1;

	 //looping through the questions and adding them on the page
		while($m_row = mysql_fetch_array($m_questions_from_DB))
		{
		 //initializing the options
			$m_answers='';
				
		 //getting row attributes in variables
			$m_id = $m_row['id'];
			$m_thisQuestion = $m_row['question'];
			$m_type = $m_row['type'];
			$m_question_id = $m_row['question_id'];
			$m_code = $m_row['code'];
			$m_code_type = $m_row['code_type'];

		 //html for question
			$m_q = '<tr>
						<td width="40px" rowspan="1" align="center">
							<strong>'.$m_display_ID.'.</strong>
						</td>
						<td>
							<pre class="question_style"><strong><div style="width: 730px; word-wrap: break-word;">'.$m_thisQuestion.'</div></strong></pre>
						</td>
					</tr>';
					
					
					
		 //if programming code is inserted, its html for the code
			if($m_code != "" && $m_code_type != "")
			{
				$m_q .='<tr>
						<td></td>
						<td>
							<pre class="brush: '.$m_code_type.';">'.$m_code.'</pre>
						</td>
					</tr>
					';
			}
			
			

		 //gathering options of the question here
			$m_options_from_DB = mysql_query("SELECT * FROM answers 
									WHERE question_id='$m_question_id' ORDER BY rand()");

				$m_answers .=  '<tr>
									<td></td>
									<td>
								';
								
								
				 //adding html to individual options here
					while($m_row2 = mysql_fetch_array($m_options_from_DB)){
					
				//getting row attributes in variables
						$m_answer = $m_row2['answer'];
						$m_answer_ID = $m_row2['id'];

						
						$m_answers .= ' <label style="cursor:pointer;">
									   		<input type="radio" name="rads'.$m_display_ID.'" value="'.$m_answer_ID.'">'.$m_answer.'</label>
										<br /><br />
									  ';
					}

					$m_answers .=  '</td>
								</tr>
								<tr height="20px">
								</tr>
								   ';



			 // the complete div that is sent back to quiz.php
				$m_output .= ''.$m_q.$m_answers;

				$m_display_ID++;

		}

		$m_display_ID--;



	 //adding html for submit button
		$m_output .= '  <tr>
							
								
								
									
                  <td colspan="2" align="center"><button class="btmmm"  type="submit"  name="javascript:{}" onclick="quiz_submit()">Submit</button>
				  <span id="m_btnSpan">
								</span>
							</td>
						</tr>';
						
						

	 //adding html for hidden values to be sent to result.php
		$m_output .= '<input type="hidden" name="rollno" value="'.$roll_no.'">
					  <input type="hidden" name="total_ques" value="'.$m_display_ID.'">
					  <input type="hidden" name="total_time" value="'.$total_time.'">
					  <input type="hidden" name="quizID" value="'.$final_quiz_ID.'">
					  ';
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
		<link rel="stylesheet" type="text/css" href="css/master.css">
        <script type="text/javascript" src="scripts/overlay.js"></script>
		
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
		  
		  
	     //function that submits the quiz
			function quiz_submit(){
				window.onbeforeunload = null;
	            document.getElementById('quiz_form').submit(); 
	        }

	     //function that keeps the counter going
			function timer(secs)
			{
				var ele = document.getElementById("countdown");
				ele.innerHTML = "Your Time Starts Now";			
				var mins_rem = parseInt(secs/60);
				var secs_rem = secs%60;
				
				if(mins_rem<10 && secs_rem>=10)
					ele.innerHTML = "Time Remaining: "+"0"+mins_rem+":"+secs_rem;
				else if(secs_rem<10 && mins_rem>=10)
					ele.innerHTML = "Time Remaining: "+mins_rem+":0"+secs_rem;
				else if(secs_rem<10 && mins_rem<10)
					ele.innerHTML = "Time Remaining: "+"0"+mins_rem+":0"+secs_rem;
				else
					ele.innerHTML = "Time Remaining: "+mins_rem+":"+secs_rem;

				if(mins_rem=="00" && secs_rem < 1){
					quiz_submit(); 
				}
				secs--;
			
			 //to animate the timer otherwise it'd just stay at the number entered
			 //calling timer() again after 1 sec
				var time_again = setTimeout('timer('+secs+')',1000);
			}
			
			

		 //wwarning confirmation that appears on closing/refreshing the quiz window/tab
			function closeEditorWarning()
			{
    				return "really wanna quit!? You can't take the test again you know!";
			}
			window.onbeforeunload = closeEditorWarning;
        </script>

        <script language="javascript">
			document.addEventListener("contextmenu", function(e){
			    e.preventDefault();
			}, false);
		</script>
		
</head>
<body>




<div id="p9" style="height:auto;">
<div id="p2" align="left">Online Learning Support</div>




<div id="p6"  align="left">
  <div id='cssmenu'  align="left">
<ul align="left">
		        <li class='active' ><a href="s_homepage1.php"><span> Student Home</span></a></li>
				
				
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
				   <td align="left"> USER-NAME:<?php echo $a['UNAME']; ?></td>
				  </tr> 
				  <TR style="background-color:#1f7898;font-weight:bold;font-size:15px;color:#fff;">
				  <TD  colspan=2 align="left">Email:<?php echo $a['email']; ?></td>
				  </TR>
				  </TABLE>
				 
				  </form>
</div>





<div class="p5" style="height:100px;width:60%;background-color:#207797;"> 

<div id="p3d" style="float:left;">


</div>
</div>







<div id="p01" style="height:2000px;">






<div class="pp1" style="height:2000px;width:20%;background-color:#FFFFFF">
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




<div class="pp2" style="height:2000px;overflow:scroll;width:79%;">

<h3 style="color:#1f7898"><center>Online Quiz</center></h3>


      

        <div id="countdown" style="margin-top:1px;">
        	<script type="text/javascript">
        		timer(<?php echo $total_time; ?>);
        	</script>
        </div>


		<div id="main_body" align="center" style="margin-bottom: 100px;">
			<form id="quiz_form" name="quiz_form_name" action="result.php" method="POST">
			<br /><BR /><BR />
				<table width="780px" align="center">
					<?php echo $m_output ?>
				</table>
			</form>
		</div>


		


        <div id="fade_overlay">
            <a href="javascript:close_overlay();" style="cursor: default;">
                <div id="fade" class="black_overlay">
                </div>
            </a>
        </div>



</div>




</div>




	 
			  



</html
><?php
}
?>	

