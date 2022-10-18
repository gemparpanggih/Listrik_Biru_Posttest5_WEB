<?php
	include "../koneksi.php";

	$idpelanggan=$_POST['idpelanggan'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nomorkwh=$_POST['nomorkwh'];
	$namapelanggan=$_POST['namapelanggan'];
	$alamat=$_POST['alamat'];
	$idtarif=$_POST['idtarif'];
	$sql = "INSERT INTO pelanggan(idpelanggan,username,password,nomorkwh,namapelanggan,alamat,idtarif)
	VALUES('$idpelanggan','$username','$password','$nomorkwh','$namapelanggan','$alamat','$idtarif')";

	$query =mysqli_query($db_link,$sql);
	if ($query) 
	{
		header('location:bacapelanggan.php');
	}
	else
	{
		//echo $sql;
		echo "Gagal Disimpan";
	}
?>