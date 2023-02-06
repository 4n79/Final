 <?php 
error_reporting(0);   
?>

<?php
include('connection.php');
session_start();
$s_n=$_SESSION['s_n'];
if($s_n==""){
		header("location:studentlogin1.php");
	}
	else
	{
$sql="SELECT * FROM `stu` WHERE s_n = '$s_n'";
			 
		     $run=mysql_query($sql);
			 $a=mysql_fetch_array($run);
$s=$a['email'];
?>

<!DOCTYPE HTML>
<html>
<head>
<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
</style>
<link href="css/div.css" rel='stylesheet' type='text/css' />
</head>
<body>

<div style="background-color:#f2f2f2;">
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



<div style="height:600px;width:100%;color:#1f7898;">
<center><h1>Online Learning MANAGEMENT</h1>
<h4>Add one or more courses </h4></center>
<center>

					     <form name="reg" action="p.php"  onSubmit="return validateForm()" method="post">
					
						  <table style="height:300px;width:40%;border-style:groove;color:#000000;border-color:#000000;">
					
  <tr>
  <td colspan="2">
		<center> <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration success';
		
		}
		
		?>	</center>
		 </td>
      </tr>
	   
	   						 <tr>
						 <td>Email id</td>
		       
			
				
				<td>
                            <select  name="emails"  readonly style="height:30px; width:300px;">
							<option><?php echo $a['email']?></option>
							
							</select>
                        </td>
				
				
				
				
				
				
				
				</tr>
				    	<tr>
						<td>Select Course</td>
						    	
						<td >
	

<?php
include 'connection.php' ;
$tbl_name="tables";
 $query = mysql_query("SELECT topic FROM $tbl_name");
if($query === FALSE) 
{
die(mysql_error());  
}
?>
 
<?php
 echo '<select style="height:30px;width:200px;border-color:#2DC2BC" name="TOPIC">';
 while ($rows = mysql_fetch_array($query))
  {
 
echo '<option>';
echo $rows['topic'];
echo '</option>';
}
echo "</select>";
?>
 
		   </td></tr>
								
								
						   
						   <tr>
						   
						   <td colspan="2">
						   		<input class="btmmm"
    name="submit" type="submit" value="Register" align="left"/></td></tr></table>
								
								
								
						  
					    </form>
						
</center>
</div>

 
<div id="p11" style="margin-top:0px;margin-bottom:auto">

	  

<ul id="navlist">
<li><a href=".php"><font color="#FFFFFF">----</font></a></li>

		        

				
				
		      </ul>
			  </div>
</body>
</html>



<?php
}
?>	
