<?php
	include "../../../Controller/koneksi.php";
$ID_DETPRO=$_GET['id_detproduksi'];

$sql="select * from det_produksi where id_detproduksi='$ID_DETPRO'";
$query=mysql_query($sql);
$Tampil=mysql_fetch_array($query);
$ID_PRO=$Tampil['id_produksi'];
$JML_PRO=$Tampil['jumlah_produksi'];

$sql1="select * from produksi where id_produksi='$ID_PRO'";
$query1=mysql_query($sql1);
$Tampil1=mysql_fetch_array($query1);
$TOT_PRO=$Tampil1['total_produksi'];

$UP_TOTPRO=$TOT_PRO-$JML_PRO;

$sql2="delete from det_produksi where id_detproduksi='$ID_DETPRO'";
$query2=mysql_query($sql2);

$sql3="select AVG(jumlah_produksi) as rata_pro from det_produksi where id_produksi='$ID_PRO'";
$query3=mysql_query($sql3);
$View=mysql_fetch_array($query3);
$AVG_JMLPRO=$View['rata_pro'];

$sql4="update produksi SET total_produksi='$UP_TOTPRO', rata_produksi='$AVG_JMLPRO' where id_produksi='$ID_PRO'";
$query4=mysql_query($sql4);

if($query4){		
header('location:../Det-Produksi.php?id_produksi='.$ID_PRO.'');
	}else{
		
echo "Data Gagal Dihapus!";
	}

?>