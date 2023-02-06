<body background="images.jpg">
<?php
session_start();

if($_SESSION[''])

{

echo "Welcome,    ".$_SESSION['']."   !  <br>    <a href='.php'>Logout</a>  <br>";


echo '<FORM METHOD="LINK" ACTION=".php">
 
<INPUT TYPE="submit" VALUE="Edit/Delete/add">
</FORM>';
 
echo '<FORM METHOD="LINK" ACTION=".php">
<INPUT TYPE="submit" VALUE="View" id="viewbutton">
</FORM>';

echo '<FORM METHOD="LINK" ACTION=".php">
<INPUT TYPE="submit" VALUE="Search" name="submit" id="submit">
</FORM>';
}

else
{
die("You must be logged in!");
}


if($_POST['submit'] == "submit")
{   
$date=date("Y-m-d H:i:s");
$updatefile = ".txt";
$fh = fopen($updatefile, 'a') or die("can't open file");
$stringData = "User: $username click view button";
fwrite($fh, "".PHP_EOL);
fclose($fh);
}   
?>