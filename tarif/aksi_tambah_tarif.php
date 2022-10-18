<?php
	include "../koneksi.php";

	$idtarif=$_POST['idtarif'];
	$daya=$_POST['daya'];
	$tarifperkwh=$_POST['tarifperkwh'];
	$sql = "INSERT INTO tarif(idtarif,daya,tarifperkwh)
	VALUES('$idtarif','$daya','$tarifperkwh')";

	$query =mysqli_query($db_link,$sql);
	if ($query) 
	{
		header('location:bacatarif.php');
	}
	else
	{
		//echo $sql;
		echo "Gagal Disimpan";
	}
?>