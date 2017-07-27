<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
  // Logo
  $this->Image('img/kua.png',6,6,30);
  // Arial bold 15
  $this->SetFont('Arial','B',14);
  // Move to the right
  $this->Cell(80);
  $this->Cell(30,10,'KEMENTRIAN AGAMA RI',0,0,'C');

  $this->Ln(5);
  $this->Cell(80);
  $this->Cell(30,10,'KANTOR URUSAN AGAMA KECAMATAN GRESIK ',0,0,'C');

  $this->Ln(5);
  $this->Cell(80);
  $this->Cell(30,10,'KABUPATEN GRESIK',0,0,'C');

  $this->Ln(5);
  $this->SetFont('Arial','',13);
  $this->Cell(80);
  $this->Cell(30,10,'Jl. KH Zubair 79 Pulopancikan Gresik Telp (021)8289345',0,0,'C');
  // Line break
  $this->setlinewidth(1);
  $this->Line(10,36,200,36);
  $this->setlinewidth(0);
  $this->Line(10,37,200,37);

  //$this->Ln(15);
  //$this->Cell(0,0,'',1,0,'C');
}

// Page footer
function Footer()
{
  // Position at 1.5 cm from bottom
  $this->SetY(-15);
  // Arial italic 8
  $this->SetFont('Arial','I',8);
  // Page number
  $this->Cell(0,10,'',0,0,'R');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();

$pdf->AddPage();
$pdf->SetFont('Arial','U'.'B',14);
$pdf->Ln(25);
$pdf->Cell(80);
$pdf->Cell(30,10,'SURAT KETERANGAN MENIKAH',0,0,'C');
$pdf->Ln(5);
$pdf->SetFont('Arial','',14);
$pdf->Cell(80);
$pdf->Cell(30,10,'Nomor : '.$_POST['nomor'],0,0,'C');

$pdf->Ln(20);
$pdf->SetFont('Arial','',13);
$pdf->Cell(50,10,'Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa : ',0,0,'L');

$pdf->Ln(10);
$pdf->Cell(7);
$pdf->Cell(5,10,'1. Nama lengkap dan alias',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['namalengkap'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'2. Jenis kelamin',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['jk'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'3. Tempat tanggal lahir',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['tempatlahir'].', '.$_POST['tgl'].'-'.$_POST['bln'].'-'.$_POST['thn'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'4. Warganegara',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['negara'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'5. Agama',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['agama1'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'6. Pekerjaan',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['pekerjaan'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'7. Tempat tinggal',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['alamat'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'8. Status perkawinan',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['status1'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'9. Nama istri/suami terdahulu',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['mantan'],0,0,'L');

$pdf->Ln(10);
$pdf->Cell(6);
$pdf->Cell(50,10,'Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk',0,0,'L');
$pdf->Ln(5);
$pdf->Cell(50,10,'digunakan seperlunya. ',0,0,'L');

$pdf->Ln(60);
$pdf->Cell(10);
$pdf->Cell(174,10,'Gresik, '.date('d-M-Y'),0,0,'R');

$pdf->Ln(5);
$pdf->Cell(10);
$pdf->Cell(176,10,'Kepala Desa/Kelurahan ',0,0,'R');

$pdf->Ln(30);
$pdf->Cell(10);
$pdf->Cell(180,10,'Muammar Bintang Abdillah ',0,0,'R');


$pdf->Output();