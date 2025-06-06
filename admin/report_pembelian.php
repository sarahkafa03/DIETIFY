<?php
// memanggil library FPDF
require __DIR__ . '/../library/fpdf.php';
include '../koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA PEMBELIAN',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'NAMA PELANGGAN' ,1,0,'C');
$pdf->Cell(75,7,'TANGGAL PEMBELIAN',1,0,'C');
$pdf->Cell(55,7,'TOTAL PEMBELIAN',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = $conn->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(50,6, $d['nama_pelanggan'],1,0);
  $pdf->Cell(75,6, $d['tanggal_pembelian'],1,0);  
  $pdf->Cell(55,6, number_format($d['total_pembelian']),1,1);
}
 
$pdf->Output();
