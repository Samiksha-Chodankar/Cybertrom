<?php



error_reporting(0);

include("C:\wamp64\www\Cybertrom\pdf\mpdf-6.0.0\mdf.php");
  session_start();
            $db = mysqli_connect ("localhost","root","","db") or die(mysqli_error($db));
			$Name=$_GET['Name'];
			
			
			$qdisplay=mysqli_query($db, "SELECT * FROM info")or die(mysqli_error($db));
			
			
			$mpdf=new mPDF('C');
			$mpdf->AddPage('L');
			
			
			
			
$html= '<!DOCTYPE html>
<html>
  <head>
    <title>PDF</title>
  </head>
  <body>
    <main>
   <table>
     <thead>
	  <tr>
	  <th>ID Number:</th>
	  <th> Name:</th>
	  <th> Email:</th>
	  <th> Profession:</th>
	  <th>Contact Number:</th>
	  </tr>
	 </thead>
	 <tbody>';
	 $html.='
	      <tr>
		      <td>  '.$res['id'].'</td>
			  
			  
			  
			  </tr>';
	 $html .='</tbody>
	 
	 </table>
	 </main>
	 
	 </body>
	 </html>';
	 ;$mpdf->WriteHTML($html,2);
	 $mpdf->Output(rand(1111,9999).'1.pdf','D');
	 exit;
	  
	    