
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
<?php
include('cox.php');
include_once('libs/fpdf.php');

 
class PDF extends FPDF
{

// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',-1,-1,100);
    $this->SetFont('Arial','B',12);

    // Move to the right
    $this->Cell(80);

    // Title
    $this->Cell(80,20,'Certificate of completion is given to below mention student :',0,2,'C'); 
 	

	
	 
	 


    // Line break
    $this->Ln(20);
}
 


}

$A=$_POST["submit"];
if(number_format((float)$A, 2, '.', '')>="48")
{
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('id'=>'ID','name'=>'NAME', 'email_id'=> 'EMAIL', 'average_per'=> 'AVERAGE PERCENTAGE %','course'=> 'COURSE',);
 
 

$result = mysqli_query($connString, "SELECT id, name, email_id, average_per, course FROM pdfdata where email_id= '".$a['email']."' "  ) ;
$header = mysqli_query($connString, "SHOW columns FROM pdfdata");

 
$pdf = new PDF();


//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',6);
foreach($header as $heading) {
$pdf->Cell(35,12,$display_heading[$heading['Field']],1,0);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,12,$column,1,0);
}
$pdf->Output();

}
else
{
print ("sorry you are not eligible for download the certificate");
}


?>

<?php
}
?>	

