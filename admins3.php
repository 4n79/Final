 <?php 
error_reporting(0);   
  ?>
  			 
<?php
	

    include("session.php");

//inserting the questions into the database
 //checking if the required data has been filled
	if(isset($_POST['desc'])){
		if(!isset($_POST['iscorrect']) || $_POST['iscorrect'] == ""){
			echo "Sorry, important data to submit your question is missing. Please press back in your browser and try again and make sure you select a correct answer for the question.";
			exit();
		}

		if(!isset($_POST['type']) || $_POST['type'] == ""){
			echo "Sorry, there was an error parsing the form. Please press back in your browser and try again";
			exit();
		}

	 //connecting to the database
		include('connection.php');

	 //initializing the variables
		$question = $_POST['desc'];
		$program = $_POST['code_desc'];
		$programType = $_POST['prog-lang'];
		$answer1 = $_POST['answer1'];
		$answer2 = $_POST['answer2'];
		$answer3 = $_POST['answer3'];
		$answer4 = $_POST['answer4'];
		$type = $_POST['type'];
		$quizID = $_POST['quizID'];

	 //replacing everything except 0-9 with nothing as its values are - 1/2/3...
		$quizID = preg_replace('/[^0-9]/', "", $quizID);

	 //replacing everything except a-z with nothing as its values are - mc/tf
		$type = preg_replace('/[^a-z]/', "", $type);

	 //replacing everything except 0-9 & a-z with nothhing as value is - answer1/2/3/4
		$isCorrect = preg_replace('/[^0-9a-z]/', "", $_POST['iscorrect']);

	 //getting and converting strings as they are
		$question = htmlspecialchars($question);
		$question = mysql_real_escape_string($question);

		$program = htmlspecialchars($program);
		$program = mysql_real_escape_string($program);

		$answer1 = htmlspecialchars($answer1);
		$answer1 = mysql_real_escape_string($answer1);

		$answer2 = htmlspecialchars($answer2);
		$answer2 = mysql_real_escape_string($answer2);

		$answer3 = htmlspecialchars($answer3);
		$answer3 = mysql_real_escape_string($answer3);

		$answer4 = htmlspecialchars($answer4);
		$answer4 = mysql_real_escape_string($answer4);



	 //if its a true/false question, do this-
	 
		if($type == 'tf'){
		
		 //if any field is null or empty, say sorry
			if((!$question) || (!$answer1) || (!$answer2) || (!$isCorrect)){
				if($answer1=='0' || $answer2=='0')
				{
					//do nothing
				}else
				{
					echo "Sorry, All fields must be filled in to add a new question to the quiz. Please press back in your browser and try again.";
					exit();
				}
			}
		}



	 //if its a multiple choice question, do this-
		if($type == 'mc'){
		 //if any field is null or empty, say sorry
			if((!$question) || (!$answer1) || (!$answer2) || (!$answer3) || (!$answer4) || (!$isCorrect)){
				if($question=='0' || $answer1=='0' || $answer2=='0' || $answer3=='0' || $answer4=='0')
				{
					//do nothing
				}else{
					echo "Sorry, All fields must be filled in to add a new question to the quiz. Please press back in your browser and try again.";
					exit();
				}
			}
		}
		
		
		
	 //inserting the question and type into table question
	 
	 
		$sql = mysql_query("INSERT INTO questions (quiz_id, question, code, code_type, type) VALUES ('$quizID', '$question', '$program', '$programType', '$type')")or die(mysql_error());
		
		
		
		//lastId is there, so we can insert the id, question_id in our table
			$lastId = mysql_insert_id();
			mysql_query("UPDATE questions SET question_id='$lastId' WHERE id='$lastId' LIMIT 1")or die(mysql_error());

	 
	 //Updating value of total questions in quizes
		mysql_query("UPDATE quizes SET total_questions=total_questions+1 WHERE quiz_id='$quizID' LIMIT 1")or die(mysql_error());






 	 /// Update answers based on which is correct //


	 	 
	 //if inserting a true/false question, insert answers by this-
	
	
		if($type == 'tf'){
		
		 //if answer1 is marked correct, do this--
		
			if($isCorrect == "answer1"){
				$sql2 = mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer1', '1')")or die(mysql_error());
				
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer2', '0')")or die(mysql_error());
				$msg = 'Thanks, question no.'.$lastId.' has been added';
		  		header('location: admins3.php?msg='.$msg.'');
				exit();
			}
		  
		  
		  //if answer2 is marked correct, do this--
			if($isCorrect == "answer2"){
				$sql2 = mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer2', '1')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer1', '0')")or die(mysql_error());
				$msg = 'Thanks, question no.'.$lastId.' has been added';
				header('location: admins3.php?msg='.$msg.'');
				exit();
			}	
		}

	 
	 
	 
	 //if inserting a multiple choice question, insert answers by this-
	
	
		if($type == 'mc'){
	
	
		 //if answer1 is marked correct, do this--
	
	
			if($isCorrect == "answer1"){
	
				$sql2 = mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer1', '1')")or die(mysql_error());
	
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer2', '0')")or die(mysql_error());
	
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer3', '0')")or die(mysql_error());
	
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer4', '0')")or die(mysql_error());
				$msg = 'Thanks, question no.'.$lastId.' has been added';
	
			  	header('location: admins3.php?msg='.$msg.'');
				exit();
			}
	
	
	
	
		 //if answer2 is marked correct, do this--
			if($isCorrect == "answer2"){
				$sql2 = mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer2', '1')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer1', '0')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer3', '0')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer4', '0')")or die(mysql_error());
				$msg = 'Thanks, question no.'.$lastId.' has been added';
		  		header('location: admins3.php?msg='.$msg.'');
				exit();
			}
	
	
	
	
		 //if answer3 is marked correct, do this--
	
			if($isCorrect == "answer3"){
				$sql2 = mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer3', '1')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer1', '0')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer2', '0')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer4', '0')")or die(mysql_error());
				$msg = 'Thanks, question no.'.$lastId.' has been added';
		  		header('location: admins3.php?msg='.$msg.'');
				exit();
			}
	
	
	
		 //if answer4 is marked correct, do this--
			if($isCorrect == "answer4"){
				$sql2 = mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer4', '1')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer1', '0')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer2', '0')")or die(mysql_error());
				mysql_query("INSERT INTO answers (quiz_id, question_id, answer, correct) VALUES ('$quizID', '$lastId', '$answer3', '0')")or die(mysql_error());
				$msg = 'Thanks, question no.'.$lastId.' has been added';
			  	header('location: admins3.php?msg='.$msg.'');
				exit();
			}
		}
	}
?>











<?php 

//showing the message back to the user after a transaction is completed

	$msg = "";
	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];
		$msg = strip_tags($msg);
		$msg = mysql_real_escape_string($msg);
	}

	if(isset($_POST['msg'])){
		$msg = $_POST['msg'];
		$msg = strip_tags($msg);
		$msg = mysql_real_escape_string($msg);
	}

?>






<?php
//When editaquestion is clicked


	include('connection.php');

	if(isset($_POST['editaquestion']) && $_POST['editaquestion'] != ""){

		$editQ = $_POST['editaquestion'];

		$get_quiz_id_SQL = mysql_query("SELECT quiz_id FROM quizes 
										WHERE quiz_name = '$editQ'")or die(mysql_error());
		$get_quiz_id_rows = mysql_fetch_array($get_quiz_id_SQL);
		$get_quiz_id = $get_quiz_id_rows['quiz_id'];

		$m_output='';

		if($editQ=='allthequestions')
			$multipleSQL = mysql_query("SELECT * FROM questions") or die(mysql_error());
		
		
		
		else
			$multipleSQL = mysql_query("SELECT * FROM questions WHERE quiz_id = '$get_quiz_id'");

		
		
		
			$m_display_ID = 1;

		
		
		
			while($m_row = mysql_fetch_array($multipleSQL))
			
			{
				$m_answers='';
		
		
			 //id var = id column and so on
			
				$m_id = $m_row['id'];
				$m_thisQuestion = $m_row['question'];
				$m_type = $m_row['type'];
				$m_question_id = $m_row['question_id'];
				$m_code = $m_row['code'];
				$m_code_type = $m_row['code_type'];
				$m_quiz_id = $m_row['quiz_id'];

		
		
		
				$m_quiz_id_SQL = mysql_query("SELECT quiz_name FROM quizes 
												WHERE quiz_id='$m_quiz_id'") or die(mysql_error());
				
				
				$m_quiz_id_SQL_row = mysql_fetch_array($m_quiz_id_SQL);
				
				
				$m_quiz_name = $m_quiz_id_SQL_row['quiz_name'];


				$m_q = '<tr>
							<td width="40px" rowspan="1" align="center">';

				if($editQ=='allthequestions')
				{
				
					$m_q .=	'<br>
								<strong>'.$m_display_ID.'.</strong>
							</td>
							
							
							<td>
								<input type="radio" name="editAQ" value="'.$m_question_id.'">
								<small><i>('.$m_quiz_name.')</i></small><br>';
				}
				
				else
				
				{
					$m_q .= '	<strong>'.$m_display_ID.'.</strong>
							</td>
							<td>
								<input type="radio" name="editAQ" value="'.$m_question_id.'">
							';
				}
				
				
				
						$m_q .=	'<pre class="question_style"><strong><div style="width: 730px; word-wrap: break-word;">'.$m_thisQuestion.'</div></strong></pre>
							</td>
						</tr>';

				
				
				if($m_code != "" && $m_code_type != ""){
					$m_q .='<tr>
							<td>
							</td>
							<td>
								<pre class="brush: '.$m_code_type.';">'.$m_code.'</pre>
							</td>
						</tr>
						';
				}

			 
			 
			 
			 
			 //gathering answers of question here
				$m_sql2 = mysql_query("SELECT * FROM answers WHERE question_id='$m_question_id'") or die(mysql_error());
			
			
			
			
				//running loop on all the answers

				$m_answers .=  '<tr>
									<td></td>
									<td>
										<ol type="a">
								';

					while($m_row2 = mysql_fetch_array($m_sql2)){
			
			
					//putting column values in variables
						$m_answer = $m_row2['answer'];
						$m_correct = $m_row2['correct'];

						if($m_correct == 1)
							$m_answers .= '<u><i>';
						$m_answers .= '<div style="width: 730px; word-wrap: break-word;"><li>'.$m_answer.'</li></div>';
						if($m_correct == 1)
							$m_answers .= '</i></u>';
					}

				$m_answers .=  '		</ol>
									</td>
								</tr>
								<tr height="20px"></tr>
								';

			
			
			
			
			
			 // the complete div that is sent back to quiz.php
				$m_output .= ''.$m_q.$m_answers;

				$m_display_ID++;
			}

			$m_display_ID--;

			$m_output .= '  <tr>
							<td colspan="2" align="center">

								<input type="hidden" name="total_ques" value="'.$m_display_ID.'">

								<span id="m_btnSpan">
									<a href="javascript:{}" onclick="editQ_submit()" class="myButton">Submit</a>
								</span>
							</td>
						</tr>';

			echo $m_output;
			exit();
	}
?>








<?php
//When editAQ is clicked


	include('connection.php');

	$editQoutput='';
	$gaq_question_id='';

	if(isset($_POST['editAQ']) && $_POST['editAQ'] != ""){
		$editAQ = $_POST['editAQ'];
		$editAQ = preg_replace('/[^0-9]/', "", $editAQ);



	 //getting everything about the question
		$getaquestion_SQL = mysql_query("SELECT * FROM questions 
						WHERE question_id='$editAQ'")or die(mysql_error());


		$getaquestion_row = mysql_fetch_array($getaquestion_SQL);

		$gaq_id = $getaquestion_row['id'];
		$gaq_quiz_id = $getaquestion_row['quiz_id'];
		$gaq_question_id = $getaquestion_row['question_id'];
		$gaq_question = $getaquestion_row['question'];
		$gaq_code_editor = $getaquestion_row['code'];
		$gaq_code_type = $getaquestion_row['code_type'];
		$gaq_type = $getaquestion_row['type'];


	 //converting program into what it ought to be
		$gaq_code_editor = htmlspecialchars_decode($gaq_code_editor);
		$gaq_code_editor = mysql_real_escape_string($gaq_code_editor);
		$gaq_code_editor = str_replace(array("\r\n", "\r", "\n"), '\n', $gaq_code_editor);



		$getanswers_SQL = mysql_query("SELECT * FROM answers 
						WHERE question_id='$editAQ'")or die(mysql_error());





	 //if question is true/false type
		if($gaq_type=='tf'){
			$editQoutput .= '<script>
								showDiv(\'tf\', \'mc\', \'quesans\');
								document.getElementById(\'quizIDtf\').value = '.$gaq_quiz_id.' readonly;
								document.getElementById(\'tfDesc\').value = "'.$gaq_question.'";
							 </script>
							';



		 //if there's programming code attached to the question, add this
			if($gaq_code_type!=""){
				$editQoutput .=	'<script>
									document.getElementById(\'prog-lang-tf\').value = \''.$gaq_code_type.'\';
								 	change_editor("'.$gaq_code_type.'");
								 	tfeditor.setValue("'.$gaq_code_editor.'");
							 	</script>
							 	';
			}



		 //getting answers of T/F questions
			$ga_index=1;
			while($getanswers_row = mysql_fetch_array($getanswers_SQL)){
				$ga_answer = $getanswers_row['answer'];
				$ga_correct = $getanswers_row['correct'];

				if($ga_correct==1 && $ga_answer=="True"){
					$editQoutput .= '<script>
										document.getElementById(\'tfans1\').checked=true;
									 </script>
									';
				}
				else if($ga_correct==1 && $ga_answer=="False"){
					$editQoutput .= '<script>
										document.getElementById(\'tfans2\').checked=true;
									 </script>
									';
				}
				$ga_index++;
			}
		 



		 //changing the submit button and action
			$editQoutput .= '<script>
								document.addQuestion.action = "editaquest.php";
								document.getElementById(\'addToQuizTF\').value = "Save";
							 </script>
							';

		}



	 //if the question is multiple choice!
		else if($gaq_type=='mc'){
			$editQoutput .= '<script>
								showDiv(\'mc\', \'tf\', \'quesans\');
								document.getElementById(\'quizIDmc\').value = '.$gaq_quiz_id.';
								document.getElementById(\'mcdesc\').value = "'.$gaq_question.'";
							 </script>
							';
			if($gaq_code_type!=""){
				$editQoutput .=	'<script>
									document.getElementById(\'prog-lang-mc\').value = \''.$gaq_code_type.'\';
								 	change_editor("'.$gaq_code_type.'");
								 	mceditor.setValue("'.$gaq_code_editor.'");
							 	 </script>
								';
			}

			$ga_index=1;
			while($getanswers_row = mysql_fetch_array($getanswers_SQL)){
				$ga_answer = $getanswers_row['answer'];
				$ga_correct = $getanswers_row['correct'];
				$ga_answer = mysql_real_escape_string($ga_answer);

				if($ga_correct==1){
					$editQoutput .= '<script>
										document.getElementById(\'mcans'.$ga_index.'\').checked=true;
									 </script>
									';
				}

				$editQoutput .= '<script>
									document.getElementById(\'mcanswer'.$ga_index.'\').value = \''.$ga_answer.'\';
								 </script>
								';

				$ga_index++;
			}

			$editQoutput .= '<script>
								document.addMcQuestion.action = "editaquest.php";
								document.getElementById(\'addToQuizMC\').value = "Save";
							 </script>
							';
		
		}






	}
?>







<?php
//When deleteSomeQuestions is clicked


include('connection.php');

	if(isset($_POST['deleteSomeQuestions']) && $_POST['deleteSomeQuestions'] != ""){
		$deleteSQ = $_POST['deleteSomeQuestions'];

		
		$get_quiz_id_SQL = mysql_query("SELECT quiz_id FROM quizes 
										WHERE quiz_name = '$deleteSQ'")or die(mysql_error());
		
		
		
		$get_quiz_id_rows = mysql_fetch_array($get_quiz_id_SQL);
		
		
		$get_quiz_id = $get_quiz_id_rows['quiz_id'];

		$m_output='';

		
		if($deleteSQ=='allthequestions')
			$multipleSQL = mysql_query("SELECT * FROM questions") or die(mysql_error());
		
		
		else
			$multipleSQL = mysql_query("SELECT * FROM questions WHERE quiz_id = '$get_quiz_id'");

			$m_display_ID = 1;

			while($m_row = mysql_fetch_array($multipleSQL)){
				$m_answers='';
			 //id var = id column and so on
				$m_id = $m_row['id'];
				$m_thisQuestion = $m_row['question'];
				$m_type = $m_row['type'];
				$m_question_id = $m_row['question_id'];
				$m_code = $m_row['code'];
				$m_code_type = $m_row['code_type'];
				$m_quiz_id = $m_row['quiz_id'];

				$m_quiz_id_SQL = mysql_query("SELECT quiz_name FROM quizes 
												WHERE quiz_id='$m_quiz_id'") or die(mysql_error());
		
		
				$m_quiz_id_SQL_row = mysql_fetch_array($m_quiz_id_SQL);
				$m_quiz_name = $m_quiz_id_SQL_row['quiz_name'];


				$m_q = '<tr>
							<td width="40px" rowspan="1" align="center">';

				if($deleteSQ=='allthequestions'){
					$m_q .=	'<br>
								<strong>'.$m_display_ID.'.</strong>
							</td>
							<td>
								<input type="checkbox" name="qu'.$m_display_ID.'" value="'.$m_question_id.'">
								<small><i>('.$m_quiz_name.')</i></small><br>';
				}else{
					$m_q .= '	<strong>'.$m_display_ID.'.</strong>
							</td>
							<td>
								<input type="checkbox" name="qu'.$m_display_ID.'" value="'.$m_question_id.'">
							';
				}
						$m_q .=	'<pre class="question_style"><strong><div style="width: 730px; word-wrap: break-word;">'.$m_thisQuestion.'</div></strong></pre>
							</td>
						</tr>';

				if($m_code != "" && $m_code_type != ""){
					$m_q .='<tr>
							<td>
							</td>
							<td>
								<pre class="brush: '.$m_code_type.';">'.$m_code.'</pre>
							</td>
						</tr>
						';
				}

			 
			 
			 
			 //gathering answers of question here
				$m_sql2 = mysql_query("SELECT * FROM answers WHERE question_id='$m_question_id'") or die(mysql_error());
				//running loop on all the answers

				$m_answers .=  '<tr>
									<td></td>
									<td>
										<ol type="a">
								';

			
			
					while($m_row2 = mysql_fetch_array($m_sql2)){
			
			
					//putting column values in variables
						$m_answer = $m_row2['answer'];
						$m_correct = $m_row2['correct'];

						if($m_correct == 1)
							$m_answers .= '<u><i>';
						$m_answers .= '<div style="width: 730px; word-wrap: break-word;"><li>'.$m_answer.'</li></div>';
						if($m_correct == 1)
							$m_answers .= '</i></u>';
					}

				$m_answers .=  '		</ol>
									</td>
								</tr>
								<tr height="20px"></tr>
								';

			 // the complete div that is sent back to quiz.php
				$m_output .= ''.$m_q.$m_answers;

				$m_display_ID++;
			}

			$m_display_ID--;

			$m_output .= '  <tr>
							<td colspan="2" align="center">

								<input type="hidden" name="total_ques" value="'.$m_display_ID.'">

								<span id="m_btnSpan">
									<a href="javascript:{}" onclick="quiz_submit()" class="myButton">Submit</a>
								</span>
							</td>
						</tr>';

			echo $m_output;
			exit();
	}
?>







<?php 
//if deleteAdmin is clicked, check--
	if(isset($_POST['deleteAdmin']) && $_POST['deleteAdmin'] != ""){
		$deleteA = $_POST['deleteAdmin'];
include('connection.php');

		mysql_query("DELETE FROM admins WHERE username = '$deleteA'")or die(mysql_error());

	//checking the admins table
		$admin_SQL = mysql_query("SELECT id FROM admins 
									WHERE username = '$deleteA'")or die(mysql_error());
		$admin_numSQL = mysql_num_rows($admin_SQL);

		if($admin_numSQL > 0){
			echo "Sorry, there was a problem deleting the /".$deleteA."/ admin. Please try again later.";
			exit();
		}else{
			echo "Alright! The admin /".$deleteA."/ has now been deleted. You just have to logout now!";
			exit();
		}
	}
?>








<?php 
//if defaultQuiz is clicked, check--
	if(isset($_POST['defaultQuiz']) && $_POST['defaultQuiz'] != ""){
		$defaultQ = $_POST['defaultQuiz'];
		include('connection.php');

	 ///////Updating value of set_default in quizes
		mysql_query("UPDATE quizes SET set_default=0 WHERE set_default=1")or die(mysql_error());
		mysql_query("UPDATE quizes SET set_default=1 WHERE quiz_name='$defaultQ'")or die(mysql_error());


 //checking if update is successful
	//getting rows from tables
		$defaultQ_sql1 = mysql_query("SELECT id FROM quizes WHERE set_default=1")or die(mysql_error());
	//getting number of rows that were returned
		$numDefaults = mysql_num_rows($defaultQ_sql1);
	//checking if the number of rows==0
		if($numDefaults < 1 || $numDefaults > 1){
			echo "Sorry, there was a problem setting /".$defaultQ."/ default. Please try again later.";
			exit();
		}else{
			echo "Thanks! The quiz, /".$defaultQ."/ has now been set as default.";
			exit();
		}
	}
?>









<?php 


//if clearResult is clicked, check--
	if(isset($_POST['clearResult']) && $_POST['clearResult'] != ""){
		$clearR = preg_replace('/^[a-z]/', "", $_POST['clearResult']);
	include('connection.php');

	//deleting
		mysql_query("DELETE FROM quiz_takers WHERE quiz_id='$clearR'")or die(mysql_error());



 //checking if delete is successful
	//getting rows from tables
		$QuizTakersSQL = mysql_query("SELECT id FROM quiz_takers WHERE quiz_id='$clearR' LIMIT 1")or die(mysql_error());
	//getting number of rows that were returned
		$numQuizTakers = mysql_num_rows($QuizTakersSQL);
	//checking if the number of rows==0
		if($numQuizTakers > 0){
			echo "Sorry, there was a problem clearing the result. Please try again later.";
			exit();
		}else{
			echo "Result has been cleared!";
			exit();
		}
	}
?>











<?php
//php to get everything for quiz Management!

	include('connection.php');

	$quizSelect = "";
	$quizesMenu = "";

	$quizIdSQL = mysql_query("SELECT quiz_id, quiz_name, display_questions, time_allotted FROM quizes") or die(mysql_error());

	 //getting individual quiz's info!
		while($quizID_row = mysql_fetch_array($quizIdSQL)){
			$m_quizID = $quizID_row['quiz_id'];
			$m_quiz_name = $quizID_row['quiz_name'];
			$m_disp_ques = $quizID_row['display_questions'];
			$m_time_alot = $quizID_row['time_allotted'];



		 //getting options for the selecting quiz part of create/edit question
			$quizSelect .= ' <option value="'.$m_quizID.'">'.$m_quiz_name.'</option>';



		 //getting the quiz menu!
			$quizesMenu .= '<li>'.$m_quiz_name.' (Q='.$m_disp_ques.', T='.$m_time_alot.')
					  		  <ul>
					  					
									<li>Quiz Settings
					  					<ul>
					  						<a href="javascript:default_quiz(\''.$m_quiz_name.'\')">
					  							<li>Set Default</li>
											
					  						
					  					</ul> 
					  				</li>

					  			

					  				

					  			</ul> -->
			  				</li>';
		}
?>








<?php
//PHP for showing all the questions
	include('connection.php');

	if(isset($_POST['questionsQuiz']) && $_POST['questionsQuiz'] != ""){
		$questionsQ = $_POST['questionsQuiz'];

		$get_quiz_id_SQL = mysql_query("SELECT quiz_id FROM quizes 
										WHERE quiz_name = '$questionsQ'")or die(mysql_error());
		$get_quiz_id_rows = mysql_fetch_array($get_quiz_id_SQL);
		$get_quiz_id = $get_quiz_id_rows['quiz_id'];

		$m_output='';

		if($questionsQ=='allthequestions')
			$multipleSQL = mysql_query("SELECT * FROM questions") or die(mysql_error());
		
		
		else
			$multipleSQL = mysql_query("SELECT * FROM questions WHERE quiz_id = '$get_quiz_id'");

			$m_display_ID = 1;

			while($m_row = mysql_fetch_array($multipleSQL)){
				$m_answers='';
		
		
		
			 //id var = id column and so on
				$m_id = $m_row['id'];
				$m_thisQuestion = $m_row['question'];
				$m_type = $m_row['type'];
				$m_question_id = $m_row['question_id'];
				$m_code = $m_row['code'];
				$m_code_type = $m_row['code_type'];
				$m_quiz_id = $m_row['quiz_id'];

				$m_quiz_id_SQL = mysql_query("SELECT quiz_name FROM quizes 
												WHERE quiz_id='$m_quiz_id'") or die(mysql_error());
		
		
				$m_quiz_id_SQL_row = mysql_fetch_array($m_quiz_id_SQL);
				$m_quiz_name = $m_quiz_id_SQL_row['quiz_name'];

		
		
		
			 //putting the question in h2 tag
		
				$m_q = '<tr>
							<td width="40px" rowspan="1" align="center">';

				if($questionsQ=='allthequestions'){
					$m_q .=	'<br>
								<strong>'.$m_display_ID.'.</strong>
							</td>
							<td>
								<small><i>('.$m_quiz_name.')</i></small><br>';
				}else{
					$m_q .= '	<strong>'.$m_display_ID.'.</strong>
							</td>
							<td>';
				}
						$m_q .=	'<pre class="question_style"><strong><div style="width: 730px; word-wrap: break-word;">'.$m_thisQuestion.'</div></strong></pre>
							</td>
						</tr>';
				

				if($m_code != "" && $m_code_type != ""){
					$m_q .='<tr>
							<td></td>
							<td>
								<pre class="brush: '.$m_code_type.';">'.$m_code.'</pre>
							</td>
						</tr>
						';
				}



			 //gathering answers of question here
				$m_sql2 = mysql_query("SELECT * FROM answers WHERE question_id='$m_question_id'") or die(mysql_error());


				//running loop on all the answers

				$m_answers .=  '<tr>
									<td></td>
									<td>
										<ol type="a">
								';

					while($m_row2 = mysql_fetch_array($m_sql2)){
					//putting column values in variables
						$m_answer = $m_row2['answer'];
						$m_correct = $m_row2['correct'];

						if($m_correct == 1)
							$m_answers .= '<u><i>';
						$m_answers .= '<div style="width: 730px; word-wrap: break-word;"><li>'.$m_answer.'</li></div>';
						if($m_correct == 1)
							$m_answers .= '</i></u>';
					}

				$m_answers .=  '		</ol>
									</td>
								</tr>
								<tr height="20px"></tr>
								';



			 // the complete div that is sent back to quiz.php
				$m_output .= ''.$m_q.$m_answers;

				$m_display_ID++;
			}
			echo $m_output;
			exit();
	}
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



		
		<link rel="stylesheet" type="text/css" href="css/admin.css">



		<script type="text/javascript">
		//displaying different code-blocks on button click
			function showDiv(el1,el2,el3)
			{
				document.getElementById(el1).style.display = 'block';
				document.getElementById(el2).style.display = 'none';
				document.getElementById(el3).style.display = 'none';
			}

		 //hide all divs
			function hideDivs(){
				document.getElementById('tf').style.display = 'none';
				document.getElementById('mc').style.display = 'none';
				document.getElementById('quesans').style.display = 'none';
			}

			




			function delete_some_questions(quizzName)
			{
				var x = new XMLHttpRequest();
				var url = "admins3.php";
				var vars = 'deleteSomeQuestions='+quizzName;
				x.open("POST", url, true);
				x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				
				x.onreadystatechange = function() 
				{
					if(x.readyState == 4 && x.status == 200)
					
					 {
						showDiv('quesans', 'mc', 'tf');
						document.getElementById("quesans_table").innerHTML = x.responseText;
						SyntaxHighlighter.highlight();
						document.getElementById("msg").innerHTML = "";
					}
				}
				
				x.send(vars);
				document.getElementById("msg").innerHTML = "processing...";
			}



			function edit_question(qzname)
			{
				var x = new XMLHttpRequest();
				var url = "admins3.php";
				var vars = 'editaquestion='+qzname;
				x.open("POST", url, true);
				x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				x.onreadystatechange = function() {
					
					
					if(x.readyState == 4 && x.status == 200) {
						showDiv('quesans', 'mc', 'tf');
						document.getElementById("quesans_table").innerHTML = x.responseText;
						SyntaxHighlighter.highlight();
						document.getElementById("msg").innerHTML = "";
					}
				}
				
				x.send(vars);
				document.getElementById("msg").innerHTML = "processing...";
			}


			function editQ_submit(){
				document.deleteedit.action = "admins3.php";
	            document.getElementById('deleteedit').submit();
	        }


			
			
			function view_questions(qiizName){
				var x = new XMLHttpRequest();
				var url = "admins3.php";
				var vars = 'questionsQuiz='+qiizName;
				x.open("POST", url, true);
				x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				x.onreadystatechange = function() {
					if(x.readyState == 4 && x.status == 200) {
						showDiv('quesans', 'mc', 'tf');
						document.getElementById("quesans_table").innerHTML = x.responseText;
						SyntaxHighlighter.highlight();
						document.getElementById("msg").innerHTML = "";
					}
				}
				x.send(vars);
				document.getElementById("msg").innerHTML = "processing...";
			}
			
			
			
			

			function default_quiz(qizName){
				var x = new XMLHttpRequest();
				var url = "admins3.php";
				var vars = 'defaultQuiz='+qizName;
				x.open("POST", url, true);
				x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				x.onreadystatechange = function() {
					if(x.readyState == 4 && x.status == 200) {
						document.getElementById("resetBtnMsg").innerHTML = x.responseText;
					}
				}
				x.send(vars);
				document.getElementById("resetBtnMsg").innerHTML = "processing...";
			}


	


		 //truncating the tables and resetting the quiz
			function resetQuiz(){	
				if(confirm("Really wanna delete all the Questions from all the quizes?!")) {
					var x = new XMLHttpRequest();
					var url = "admins3.php";
					var vars = 'reset=yes';
					x.open("POST", url, true);
					x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					x.onreadystatechange = function() {
						if(x.readyState == 4 && x.status == 200) {
							document.getElementById("resetBtnMsg").innerHTML = x.responseText;
						}
					}
					x.send(vars);
					document.getElementById("resetBtnMsg").innerHTML = "processing...";
				}
			}
		</script>
		
		
		

		<script type="text/javascript">
	 
	 
	 //updating metadata for a quiz
		function update_quiz(qname){
			open_overlay('regNewQuiz', 'regNewAdmin');
			document.newQuiz_name.action = "updateExistingQuiz.php";
			document.getElementById('quizName').value = qname;
			document.getElementById('quizName').readOnly = true;
			document.getElementById('quizTime').focus();
		}


		function change_pass(){
			open_overlay('regNewAdmin', 'regNewQuiz');
			document.reg_name.action = "changePassword.php";
			document.getElementById('login').value = '<?php echo $login_session; ?>';
			document.getElementById('login').readOnly = true;
			document.getElementById("password").focus();
		}

		</script>

		<script type="text/javascript">
		//overlays
			//hiding the overlay
			    function close_overlay(){
			        document.getElementById('register').style.display='none';
			        document.getElementById('fade').style.display='none';
			    }

			//showing the overlay
			    function open_overlay(ele1, ele2){

			    	document.getElementById(ele1).style.display = 'block';
					document.getElementById(ele2).style.display = 'none';

			        document.getElementById('register').style.display='block';
			        document.getElementById('fade').style.display='block';

			    	if(ele1=='regNewAdmin'){
			    		document.getElementById("register").style.height = '200px';
			    		document.getElementById("login").focus();
			    	}
			    	else{
			    		document.getElementById("register").style.height = '300px';
			    		document.getElementById("quizName").focus();
			    	}
			    }
		</script>

		<link rel="stylesheet" type="text/css" href="css/register.css">
		<link rel="stylesheet" type="text/css" href="css/addNewQuiz.css">

	
	
	
		<script type="text/javascript">

		function submit_admin(){

			var x=document.forms["reg_name"]["login"].value;
			var y=document.forms["reg_name"]["password"].value;


            if (x==null || x=="" || y==null || y==""){
                document.getElementById("required").innerHTML = "Enter Both Values";
                exit();
            }

			close_overlay();
            document.getElementById('reg_name').submit(); 
            return false;
		}

		</script>

	
	
	
		<script type="text/javascript">
			function quiz_submit(){
				document.deleteedit.action = "deleteSomeQues.php";
	            document.getElementById('deleteedit').submit(); 
	        }
			
		</script>





</head>
<body>




<div id="p9" style="height:auto;">
<div id="p2">Online Learning Support</div>


<div id="p6"  >
  <div id='cssmenu' >
  
<ul>
<li><a href="admins.php"><span>Admin Home</span></a></li>
		       
				
				
				<li><a href="javascript:showDiv('tf', 'mc', 'quesans');"><span>  True/False   </span></a></li>
				 <li class='active'><a href="javascript:showDiv('mc', 'tf', 'quesans');"><span>   Multiple Choice </span></a></li>
				
		        <li><a href="alogout.php"><span>Logout</span></a></li>
		      </ul>
</div>
</div>



<div class="content" id="tf" style="margin-bottom: 100px;">
			
    	
    		<form action="admins3.php" name="addQuestion" method="POST">

    	  		<select class="quizIDselect" name="quizID" id="quizIDtf">
    				<?php echo $quizSelect; ?>
    			</select>
    			<br />
    			<br />

    			<strong>Enter your question here:</strong>
    			<br />

    			<textarea  cols="100" rows="10" class="txt_area" id="tfDesc" name="desc"></textarea>
    			<br />
    			<br />


    			<strong>OR, Enter your programming code here:</strong>
    			<br />

    			<strong style="font-family: Times;">choose language: </strong>
    			<span class='css-select-moz'>
	    			<select class="lang_selector" name="prog-lang" onChange="lang_chosen(this);" id="prog-lang-tf">
	    				<option value=""> ------ </option>
					  	
					  	<option value="cpp">C/C++</option>
					  	<option value="css">CSS</option>
					  	<option value="java">Java</option>
				
					  	<option value="php">PHP</option>
					  	
					  	<option value="sql">SQL</option>
			
					  	<option value="html">HTML/XML/xHTML/XSLT</option>
					</select> 
				</span>
    			<br />
    			<textarea class="txt_area"  cols="100" rows="10" id="tfcodeDesc" name="code_desc" style="width:400px;height:95px;"></textarea>
    			<br />
    			
    			<br />


    			<strong>Choose correct answer</strong>
    			<br />

            	<input type="text" class="tf_txt_box" id="answer1" name="answer1" value="True" readonly>&nbsp;
            	<label style="cursor:pointer; color:#555;">	<br />	
            	
				<input type="radio" id="tfans1" name="iscorrect" value="answer1">Correct Answer?
            	</label>
    	  	
   				<br />	<br />
            	<input type="text" class="tf_txt_box" id="answer2" name="answer2" value="False" readonly>&nbsp;
              	<label style="cursor:pointer; color:#555;">	<br />
            	
				
				<input type="radio" id="tfans2" name="iscorrect" value="answer2">Correct Answer?
            	</label>


    	  		<br />
    			<br />


    			<input type="hidden" value="tf" name="type">
     			<input type="hidden" value="<?php echo $gaq_question_id; ?>" name="questionID">
				<input class="btmmm"  type="submit" value="ADD"  id="addToQuizTF" >
    		</form>
 		</div>
		
		
		
 

 		<div class="content" id="mc" style="margin-bottom: 100px;">
  			

    		<form action="admins3.php" name="addMcQuestion" method="POST">

    			
    			<select class="quizIDselect" name="quizID" id="quizIDmc">
    				<?php echo $quizSelect; ?>
    			</select>
    			<br />
    			<br />

    			<strong>Enter your question here:</strong>
        		<br />

        		<textarea class="txt_area" cols="100" rows="10" id="mcdesc" name="desc"></textarea>
        		<br />
      			<br />


      			<strong>OR, Enter your programming code here:</strong>
    			<br />

    			<strong style="font-family: Times;">Choose Language</strong>
    			<span class='css-select-moz'>
	    			<select class="lang_selector" name="prog-lang" onChange="lang_chosen(this);" id="prog-lang-mc">
	    				<option value=""> ------ </option>
					   	<option value="cpp">C/C++</option>
					  	<option value="css">CSS</option>
					  	<option value="java">Java</option>
				
					  	<option value="php">PHP</option>
					  	
					  	<option value="sql">SQL</option>
					  	<option value="html">HTML/XML/xHTML/XSLT</option>
					</select> 
				</span>
				<br />
    			<pre><textarea class="txt_area" cols="100" rows="10" id="mccodeDesc" name="code_desc" style="width:400px;height:95px;"></textarea>
    			</pre>

    			<br />
    			<br />


    			<strong>First Option</strong>
    			<br />
        		<input type="text" class="mc_txt_box" id="mcanswer1" name="answer1">&nbsp;
          		<label style="cursor:pointer; color:#555;">	<br />
          			<input type="radio" id="mcans1" name="iscorrect" value="answer1">Correct Answer?
        		</label>
      		
    			<br />	<br />
    			<strong>Second Option</strong>
    			<br />
        		<input type="text" class="mc_txt_box" id="mcanswer2" name="answer2">&nbsp;
          		<label style="cursor:pointer; color:#555;">	<br />
          			<input type="radio" id="mcans2" name="iscorrect" value="answer2">Correct Answer?
        		</label>
      			
    			<br /><br />
    			<strong>Third Option</strong>
    			<br />
        		<input type="text" class="mc_txt_box" id="mcanswer3" name="answer3">&nbsp;
          		<label style="cursor:pointer; color:#555;"><br />
          			<input type="radio"  id="mcans3" name="iscorrect" value="answer3">Correct Answer?
        		</label>
  
    			<br />
    			<strong>Fourth Option</strong>
    			<br />
        		
				
				<input type="text" class="mc_txt_box" id="mcanswer4" name="answer4">&nbsp;
          		<label style="cursor:pointer; color:#555;">    			<br />
          			<input type="radio"  id="mcans4" name="iscorrect" value="answer4">Correct Answer?
        		</label>
    
    			<br />    			<br />
    			
				
				<input type="hidden" value="mc" name="type">
    			<input type="hidden" value="<?php echo $gaq_question_id; ?>" name="questionID">
				<input class="btmmm"  id="addToQuizMC"  type="submit" value="ADD">
				
    		</form>
 		</div>









 		<div class="content" id="quesans"  style="margin-bottom: 100px;">
 			<form id="deleteedit" name="deleteedit" action="deleteSomeQues.php" method="POST">
	 			<table width="780px" align="center" id="quesans_table">
	 			</table>
 			</form>
 		</div>






 		<div id="register" class="white_content">

            <form action="register.php" class="login" method="POST" name="reg_name" id="regNewAdmin">
          		<p>
			      <label class="reg_label" for="login">Choose a Username:</label>
			      <input type="text" name="login" id="login" required="required">
			    </p>
			    <p>
			      <label class="reg_label" for="password">Choose a Password:</label>
			      <input type="password" name="password" id="password" required="required">
			    </p>
			    <p class="login-submit">
			      <button  onClick="submit_admin()" id="reg_button" class="login-button">Register</button>
			    </p>
			    <p id="required"></p>
			</form>

			<form action="addNewQuiz.php" class="newQuiz" method="POST" name="newQuiz_name" id="regNewQuiz">
				<p>
			      <label class="reg_label" for="quizName">Quiz Name:</label><br>
			      <input type="text" name="quizName" id="quizName" required="required">
			    </p>
			    <p>
			      <label class="reg_label" for="quizTime">Time Allotted:</label><br>
			      <input type="text" name="quizTime" id="quizTime" required="required">
			    </p>
			    <p>
			      <label class="reg_label" for="numQues">No. of Questions to Display:</label><br>
			      <input type="text" name="numQues" id="numQues" required="required">
			    </p>
			    <p class="addQuiz-submit">
			      <button  onClick="submit()" id="addQuiz_button" class="addQuiz-button">Add</button>
			    </p>
			    <p id="required"></p>
			</form>

        </div>





        <div id="fade_overlay">
            <a href="javascript:close_overlay();" style="cursor: default;">
                <div id="fade" class="black_overlay">
                </div>
            </a>
        </div>

       <div id="p01">
 <img src="ism/image/slides/14.jpg" height="506px" width="100%"> 
</div>


        <br><BR><BR><BR><br><BR><BR><BR>

 		<div id="footer" align="bottom">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                <tbody >
                    <tr>
                        <td align="left" id="copyright">
                          
                        </td>
                        
                        <td align="right" id="developer" >
                           
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>











	</body>
</html>


