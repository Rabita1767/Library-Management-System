<?php
require('../fpdf.php');
// Database Connection 
$conn = new mysqli('localhost', 'root', '', 'librarygh');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$select = "SELECT issue_id, member, isbn , title, author, category, due_date  from book_issue_log inner join book on (book_issue_log.book_isbn = book.isbn)";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
while($row = $result->fetch_object()){
  $id = $row->issue_id;
  $name = $row->member;
  $isbn = $row->isbn;
  $title = $row->title;
  $author = $row->author;
  $category = $row->category;
  $due_date = $row->due_date;
  $pdf->Cell(10,10,$id,1);
  $pdf->Cell(20,10,$name,1);
  $pdf->Cell(40,10,$isbn,1);
  $pdf->Cell(60,10,$title,1);
  $pdf->Cell(30,10,$category,1);
  $pdf->Cell(30,10,$due_date,1);
  $pdf->Ln();
}
$pdf->Output();
?>