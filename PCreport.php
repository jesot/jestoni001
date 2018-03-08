<?php

$konek = mysqli_connect("localhost","root","","asset");
require 'fpdf.php';
 class myPDF extends FPDF {
   function header(){
       $this->Image('logo.png',10,6);
       $this->SetFont('Arial','B',14);
       $this->Cell(276,5,'Panpacific University North Philippines');
       $this->Ln();
       $this->SetFont('Times','',12);
       $this->Cell(276,10,'Tayug Pangasinan',0,0,'C');
       $this->Ln(20);

   }
   function footer() {
      $this->SetY(-15);
      $this->SetFont('Arial','',8);
      $this->Cell(0,10,'Page '.$this->PageNo.'/{nb}',0,'C');
   }
}       

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->Output();

?>