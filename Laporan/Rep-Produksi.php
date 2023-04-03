<?php
include 'fpdf.php';
include '../Controller/koneksi.php';

session_start();
$AWAL=$_GET['awal'];
$AKHIR=$_GET['akhir'];
$ID_PRO=$_GET['id_produksi'];

$TglAWAL=date('d-M-Y', strtotime($AWAL));
$TglAKHIR=date('d-M-Y', strtotime($AKHIR));


$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->Image('../Image/Logo-DFarm.png',10,7,32);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'LAPORAN PRODUKSI TELUR','0','1','C',false);
$pdf->Ln(2);
$pdf->Cell(0,5,'PETERNAKAN D-FARM TIMANG WONOGIRI','0','1','C',false);
$pdf->SetFont('Arial','',8);
$pdf->Cell(0,5,'Dusun Timang Wetan RT 01/01 Desa Wonokerto, Wonogiri, Jawa Tengah','0','1','C',false);
$pdf->Cell(0,2,'Telp. (+62) 852 2924 7986','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','',11);
$pdf->Cell(0,5,'Produksi Telur dari tanggal '.$TglAWAL.' sampai tanggal '.$TglAKHIR,'0','1',false);

$pdf->Cell(10,7,'',0,1);

/* Produksi Telur */
$pdf->SetFont('Arial','B',11);
$pdf->Cell(190,6,'~~~~ PRODUKSI TELUR ~~~~',1,1,'C');

$pdf->Cell(60,6,'TANGGAL PRODUKSI',1,0,'C');
$pdf->Cell(60,6,'JUMLAH TELUR (BUTIR)',1,0,'C');
$pdf->Cell(70,6,'KETERANGAN',1,1,'C');


$pdf->SetFont('Arial','',10);
	$sql="select * FROM det_produksi WHERE tgl_produksi BETWEEN '$AWAL' AND '$AKHIR' AND id_produksi='$ID_PRO'";
	$query = mysql_query($sql);
    while ($View=mysql_fetch_array($query)) { 

            $TGL = $View['tgl_produksi'];
            $ForTGLPro=date('d-M-Y', strtotime($TGL));

$pdf->Cell(60,6,$ForTGLPro,1,0,'C');
$pdf->Cell(60,6,$View['jumlah_produksi'].' Butir',1,0,'C');
$pdf->Cell(70,6,$View['keterangan'],1,1);
    }

	$sql1="select SUM(jumlah_produksi) AS jum_prod  FROM det_produksi WHERE tgl_produksi BETWEEN '$AWAL' AND '$AKHIR' AND id_produksi='$ID_PRO'";
	$query1 = mysql_query($sql1);
    while ($View1=mysql_fetch_array($query1)) { 
    	$TOT_PRO=$View1['jum_prod'];
$pdf->Cell(10,1,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,6,'TOTAL PRODUKSI TELUR  =================================================',1,0);
$pdf->Cell(40,6,$TOT_PRO.' Butir',1,0,'L');
	}

$pdf->Ln(5);

    $sql2="select AVG(jumlah_produksi) AS rata_prod  FROM det_produksi WHERE tgl_produksi BETWEEN '$AWAL' AND '$AKHIR' AND id_produksi='$ID_PRO'";
    $query2 = mysql_query($sql2);
    while ($View2=mysql_fetch_array($query2)) { 
        $RATA_PRO=$View2['rata_prod'];
        $AVG_PRO=round($RATA_PRO);
$pdf->Cell(10,1,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,6,'RATA-RATA PRODUKSI TELUR  ============================================',1,0);
$pdf->Cell(40,6,$AVG_PRO.' Butir',1,0,'L');
    }

$pdf->Output();
?>