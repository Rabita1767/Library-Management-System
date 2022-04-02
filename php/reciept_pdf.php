<?php
require('../fpdf.php');
// Database Connection 
$conn = new mysqli('localhost', 'root', '', 'webtech');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$select = "SELECT * FROM `receipt` ORDER BY id";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
while($row = $result->fetch_object()){
  $id = $row->id;
  $name = $row->name;
  $writer = $row->writer;
  $pdf->Cell(10,10,$id,1);
  $pdf->Cell(100,10,$name,1);
  $pdf->Cell(80,10,$writer,1);
  $pdf->Ln();
}
$pdf->Output();
?>