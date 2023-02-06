  <?php 
error_reporting(0);   
  ?>


<?php

    if(isset($_POST["total_ques"]) && isset($_POST["rollno"]) && isset($_POST["quizID"]))
    {
        if($_POST["total_ques"] != "" && $_POST["rollno"] != "" && $_POST["quizID"] != "")
        {
          include('connection.php');

        
		
		 //initializing the variables
		 
            $marks = 0;
            $total_questions = $_POST["total_ques"];
            $roll_no = $_POST["rollno"];
            $quiz_ID = $_POST["quizID"];

            if($total_questions>0){

	    
		
		
		     //calculating %age
	            
				for($i=1 ; $i <= $total_questions ; $i++)
				
				{
	              
				    @$fetch_ID = "rads".$i;
					
	                @$php_id = $_POST[$fetch_ID];

	                $check_sql = mysql_query("SELECT correct FROM answers 
	                                      
										        WHERE id='$php_id'") or die(mysql_error());
	                
					$q_answer = mysql_fetch_array($check_sql);
	                
					$marks += $q_answer[0];
	            }
				
	            $percent = ($marks/$total_questions)*100;



			 //getting total time taken by the user to complete the quiz
	            $get_time_query = mysql_query("SELECT now() - date_time FROM quiz_takers 
	                                            WHERE username = '$roll_no' ") or die(mysql_error());
	            
				$get_time = mysql_fetch_array($get_time_query);
	            $time_taken = $get_time[0];

	            $check_time_query = mysql_query("SELECT duration FROM quiz_takers 
	                                            WHERE username = '$roll_no' 
	                                            AND quiz_id = '$quiz_ID' ") or die(mysql_error());
	            
				$check_time = mysql_fetch_array($check_time_query);
	            $duration = $check_time[0];

	            if($duration==0){
		        
				
				
				
				
				 //updating the %age and time taken by the user in the DB
	            	mysql_query("UPDATE quiz_takers 
	                	         SET marks='$marks', percentage= '$percent', duration= '$time_taken', quiz_id= '$quiz_ID'
	                    	     WHERE username = '$roll_no' ")or die(mysql_error());
	            }
				else
				{
	            	$user_msg = 'Sorry, but re-submission of the quiz isn\'t allowed!';
	        		header('location: index.php?user_msg='.$user_msg.'');
	            }
	        }
			else
			{
	        	$user_msg = 'Hey, Weird, but it seems the quiz had no questions!';
        		header('location: index.php?user_msg='.$user_msg.'');
            	exit();
	        }
        }
		else
		{
            $user_msg = 'Hey, Something went wrong! Tell the Admin!!';
        header('location: index.php?user_msg='.$user_msg.'');
            exit();
        }
    }else{
        $user_msg = 'Hey, This is the start Page!, So enter your username here first';
        header('location: index.php?user_msg='.$user_msg.'');
            exit();
    }
?>



 



<!DOCTYPE html>
<html>
    <head>
        <title>Result</title>

        <meta charset="utf-8">
		
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

        

      

        <script language="javascript">
            document.addEventListener("contextmenu", function(e){
                e.preventDefault();
            }, false);
        </script>
    </head>


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





<div style="height:600px;width:100%;border:groove;">
<fieldset style="margin-top:30px;color:#1f7898;margin-bottom:auto;">
<legend style="color:#1f7898">Result</legend>
<center>

					    
						
	                 <table style="height:400px;width:50%">
						<tr>
						<td><h3>QUIZ NO:</h3></td>
						<td><h3> <center><?php echo $roll_no; ?></center></h3></td>
						</tr>
						<tr>
						<td> <h3>YOU SCORED: </h3></td>
						<td> <h3> <center> <?php echo $marks; ?>/<?php echo $total_questions; ?></h3> </center></td>
						</tr>
						<tr>
						<td colspan="2"> <?php 
						if ($marks<"16")
						{
						?>
						<h3><center>you are requested to revise the course again<center</h3>
						<?php
						}
						
						else
						{
						?>
						<h3><center>you are eligible to attend next test at any time<center</h3>
						<?php
						}
						?>
						
						<tr>
						<td colspan="2"><h3> <center><button><a href="index.php">BACK</a></button></h3> </center></td>
					
						</tr>
					   </table> 

						
						
						
						
			



</div>

   
   
   <div id="p11"  >
<ul id="navlist"> 
		        
 <li><a href="contactd.php"><font color="#FFFFFF">CONTACT:</font></a></li>

 <p><font color="#FFFFFF">Email:</font><a href="https://mail.google.com/mail/" target="_blank" style="text-decoration:none;"> <font color="#f2f2f3"> -online.learning.support@gmail.com</font></a></p>
				</ul>
			  </div>
			  
			  
			
</body>
</html>

