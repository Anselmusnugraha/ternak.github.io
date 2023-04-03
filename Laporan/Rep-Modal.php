<?php
include 'fpdf.php';
include '../Controller/koneksi.php';

session_start();
$AWAL=$_GET['awal'];
$AKHIR=$_GET['akhir'];

$TglAWAL=date('d-M-Y', strtotime($AWAL));
$TglAKHIR=date('d-M-Y', strtotime($AKHIR));


$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->Image('../Image/Logo-DFarm.png',10,7,32);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'LAPORAN PENGELUARAN MODAL','0','1','C',false);
$pdf->Ln(2);
$pdf->Cell(0,5,'PETERNAKAN D-FARM TIMANG WONOGIRI','0','1','C',false);
$pdf->SetFont('Arial','',8);
$pdf->Cell(0,5,'Dusun Timang Wetan RT 01/01 Desa Wonokerto, Wonogiri, Jawa Tengah','0','1','C',false);
$pdf->Cell(0,2,'Telp. (+62) 852 2924 7986','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','',11);
$pdf->Cell(0,5,'Pengeluaran Modal dari tanggal '.$TglAWAL.' sampai tanggal '.$TglAKHIR,'0','1',false);

$pdf->Cell(10,7,'',0,1);

/* Modal Pakan */
$pdf->SetFont('Arial','B',11);
$pdf->Cell(190,6,'~~~~ PENGELUARAN MODAL PAKAN ~~~~',1,1,'C');

$pdf->Cell(40,6,'NAMA',1,0,'C');
$pdf->Cell(20,6,'JUMLAH',1,0,'C');
$pdf->Cell(30,6,'HARGA',1,0,'C');
$pdf->Cell(30,6,'TGL BELI',1,0,'C');
$pdf->Cell(35,6,'KETERANGAN',1,0,'C');
$pdf->Cell(35,6,'TOTAL',1,1,'C');

$pdf->SetFont('Arial','',10);
	$sql="select * FROM m_pakan where tgl_beli BETWEEN '$AWAL' AND '$AKHIR'";
	$query = mysql_query($sql);
    while ($View=mysql_fetch_array($query)) { 
    	$TGL=$View['tgl_beli'];
        $ForTGLBeli=date('d-M-Y', strtotime($TGL));
        $HR=$View['harga'];
        $HARGA=number_format($HR);
        $TOT=$View['total_Mpakan'];
        $TOTAL_PAKAN=number_format($TOT);
$pdf->Cell(40,6,$View['nama'],1,0);
$pdf->Cell(20,6,$View['jumlah'],1,0,'C');
$pdf->Cell(30,6,'Rp. '.$HARGA,1,0);
$pdf->Cell(30,6,$ForTGLBeli,1,0,'C');
$pdf->Cell(35,6,$View['keterangan'],1,0);
$pdf->Cell(35,6,'Rp. '.$TOTAL_PAKAN,1,1); 
    }

	$sql1="select SUM(total_Mpakan) AS tot_kabeh_Mpakan  FROM m_pakan where tgl_beli BETWEEN '$AWAL' AND '$AKHIR'";
	$query1 = mysql_query($sql1);
    while ($View1=mysql_fetch_array($query1)) { 
    	$TOTKBH=$View1['tot_kabeh_Mpakan'];
        $TOTAL_KABEH=number_format($TOTKBH);
$pdf->Cell(10,1,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,6,'TOTAL PENGELUARAN PAKAN  ============================================',1,0);
$pdf->Cell(40,6,'Rp. '.$TOTAL_KABEH,1,0,'L');
	}

$pdf->Ln(15); 

/* Modal Lain-lain */
$pdf->SetFont('Arial','B',11);
$pdf->Cell(190,6,'~~~~ PENGELUARAN MODAL LAIN-LAIN ~~~~',1,1,'C');

$pdf->Cell(40,6,'KET. BARANG',1,0,'C');
$pdf->Cell(20,6,'JUMLAH',1,0,'C');
$pdf->Cell(30,6,'HARGA BELI',1,0,'C');
$pdf->Cell(30,6,'TGL BELI',1,0,'C');
$pdf->Cell(35,6,'KETERANGAN',1,0,'C');
$pdf->Cell(35,6,'TOTAL',1,1,'C');

$pdf->SetFont('Arial','',10);
	$sql2="select * FROM m_lain where tgl_beli BETWEEN '$AWAL' AND '$AKHIR'";
	$query2 = mysql_query($sql2);
    while ($View2=mysql_fetch_array($query2)) { 
    	$TGL=$View2['tgl_beli'];
        $ForTGLBeli=date('d-M-Y', strtotime($TGL));
        $HR=$View2['harga_beli'];
        $HARGA=number_format($HR);
        $TOT=$View2['total_Mlain'];
        $TOTAL_LAIN=number_format($TOT);
$pdf->Cell(40,6,$View2['ket_barang'],1,0);
$pdf->Cell(20,6,$View2['jumlah'],1,0,'C');
$pdf->Cell(30,6,'Rp. '.$HARGA,1,0);
$pdf->Cell(30,6,$ForTGLBeli,1,0,'C');
$pdf->Cell(35,6,$View2['keterangan'],1,0);
$pdf->Cell(35,6,'Rp. '.$TOTAL_LAIN,1,1); 
    }

	$sql3="select SUM(total_Mlain) AS tot_kabeh_Mlain  FROM m_lain where tgl_beli BETWEEN '$AWAL' AND '$AKHIR'";
	$query3 = mysql_query($sql3);
    while ($View3=mysql_fetch_array($query3)) { 
    	$TOTKBH1=$View3['tot_kabeh_Mlain'];
        $TOTAL_KABEH1=number_format($TOTKBH1);
$pdf->Cell(10,1,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,6,'TOTAL PENGELUARAN LAIN-LAIN  =========================================',1,0);
$pdf->Cell(40,6,'Rp. '.$TOTAL_KABEH1,1,0,'L');
	}

$pdf->Ln(10);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);

$FULLTOT=$TOTKBH+$TOTKBH1;
$SELURUHNYA=number_format($FULLTOT);

$pdf->Cell(10,1,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(140,9,'TOTAL PENGELUARAN KESELURUHAN  =====================',1,0);
$pdf->Cell(50,9,'Rp. '.$SELURUHNYA,1,1,'C');

$pdf->Output();
?>