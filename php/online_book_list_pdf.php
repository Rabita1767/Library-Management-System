<?php
require('../fpdf.php');
// Database Connection 
$conn = new mysqli('localhost', 'root', '', 'webtech');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$select = "SELECT * FROM `onlinebook` ORDER BY id";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
while($row = $result->fetch_object()){ 
  $name = $row->name;
  $category = $row->category;
  $count = $row->count;
  $pdf->Cell(10,10,$id,1);
  $pdf->Cell(100,10,$name,1);
  $pdf->Cell(30,10,$category,1);
  $pdf->Cell(30,10,$count,1);
  $pdf->Ln();
}
$pdf->Output();
?>