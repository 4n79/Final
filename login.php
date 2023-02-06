<?php

    session_start();

    $wrong = "";
    if(isset($_POST['user_msg']) && $_POST['user_msg']!="")
	{
        $wrong = $_POST['user_msg'];
    }

    if(isset($_GET['user_msg']) && $_GET['user_msg']!="")
	{
        $wrong = $_GET['user_msg'];
    }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin-Login</title>
<link href="css/div.css" rel='stylesheet' type='text/css' />
		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		

          <link rel="stylesheet" href="css/login.css">

        <script language="javascript">
		
			document.addEventListener("contextmenu", function(e)
			{
			    e.preventDefault();
			}, false);
		</script>

		<style type="text/css">

		body{
			position: absolute;
			top: 50%;
			left: 50%;
			margin-left: -250px;
			margin-top: -130px;
		}

		</style>

	</head>
	<body style="background-color:#F4F4F4;">
	<div style="color:#000000";>
	<h6><center><font color="#000000" size="4" >ADMIN ONLINE LEARNING SUPPORT MANAGEMENT</font></center></h6><BR>
	</div>
	
		<form action="login_check.php" class="login" method="POST">
          		<p>
			      <label for="login">Username:</label>
			      <input type="text" name="login" id="login" autofocus>
			    </p>

			    <p>
			      <label for="password">Password:</label>
			      <input type="password" name="password" id="password">
			    </p>
               
			    <p class="login-submit">
				 <BR>
				<BR>
				<BR>
				<BR>
				<BR>
				<BR><center>
			      <button type="submit" class="btmmm"  >Login</button>
				  <button  class="btmmm"><a href="home1.php">BACK</a></button></center>
			    </p>
			    <p class="message">
			    	<?php echo $wrong; ?>			    </p>
		</form>
	</body>
</html>