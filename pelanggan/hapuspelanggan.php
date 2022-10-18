<?php
	include "../koneksi.php";

	$idpelanggan = $_GET["idpelanggan"];
	$sql = "DELETE FROM pelanggan WHERE idpelanggan = '$idpelanggan'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacapelanggan.php');
	}else{
		echo "hapus pelanggan GAGAL";
	}
?>