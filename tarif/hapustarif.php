<?php
	include "../koneksi.php";

	$idtarif = $_GET["idtarif"];
	$sql = "DELETE FROM tarif WHERE idtarif = '$idtarif'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacatarif.php');
	}else{
		echo "hapus tarif GAGAL";
	}
?>