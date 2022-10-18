<?php
	include "../koneksi.php";

	$idtarif=$_POST['idtarif'];
	$daya=$_POST['daya'];
	$tarifperkwh=$_POST['tarifperkwh'];
	
	$sql2 ="UPDATE tarif SET idtarif = '$idtarif' , daya = '$daya' , tarifperkwh = '$tarifperkwh' WHERE idtarif = '$idtarif'";
	
	$query = mysqli_query($db_link,$sql2);
	
	if($query)
	{
		header('location:bacatarif.php');
	}
	else
	{
		echo"Edit Tarif Gagal";
	}
?>