<?php
	include "../koneksi.php";

	$idpelanggan=$_POST['idpelanggan'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nomorkwh=$_POST['nomorkwh'];
	$namapelanggan=$_POST['namapelanggan'];
	$alamat=$_POST['alamat'];
	$idtarif=$_POST['idtarif'];
	
	$sql2 ="UPDATE pelanggan SET idpelanggan = '$idpelanggan' , username = '$username' , password = '$password' , nomorkwh = '$nomorkwh', namapelanggan = '$namapelanggan', alamat = '$alamat' , idtarif = '$idtarif' WHERE idpelanggan = '$idpelanggan'";
	
	$query = mysqli_query($db_link,$sql2);
	
	if($query)
	{
		header('location:bacapelanggan.php');
	}
	else
	{
		echo"Edit Pelanggan Gagal";
	}
?>