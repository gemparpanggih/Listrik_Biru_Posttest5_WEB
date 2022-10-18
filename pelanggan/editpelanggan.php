<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
				margin: auto;
				font-family: arial;
			}

			.bekgron{
				width: 100%;
				overflow: hidden;
				background: #160573;
			}

				.bekgron h2{
					margin-left: 15px;
					color: white;
				}

			table{
				border-collapse: collapse;
				font-weight: bold;
			}


			input{
				padding: 8px;
				border-radius: 5px;
				border-style: solid;
				border: 1px solid black;
			}

			.biru{
				background: #1387ad;
			}

			.select{
				width: 100%;
				padding: 8px;
			}

			.img{
				width: 100%;
				height: 430px;
				margin: auto;
				background: url(../img/kotabiru.jpg);
				background-size: 100% 100%;
			}

			.footer{
				width: 100%;
				background-color: #004d82;
				text-align: center;
				font-size: 10pt;
				color: white; 
				padding-top: 10px;
				padding-bottom: 10px;
				margin-top: 30px;
			}

			.pointer{
				cursor: pointer;
			}
	</style>
</head>
<body>
	<div class="bekgron">
	<h2>Edit - Manajemen Pelanggan</h2>
	</div>
	<div class="img">
		
	</div>
	<br>
	<?php
		$idpelanggan=$_GET['idpelanggan'];
		$sql = "SELECT * FROM pelanggan WHERE idpelanggan ='$idpelanggan'";
		$query = mysqli_query($db_link,$sql);
		$data = mysqli_fetch_array($query);
	?>
	
	<form action='aksi_edit_pelanggan.php?idpelanggan=<?php echo "$idpelanggan"; ?>' method='POST'>
		<center>
			
		<table border="0" cellpadding="10"> 
		
			<tr>
				<td>ID PELANGGAN</td>
				<td>:</td>
				<td><input type="text" name="idpelanggan" idpelanggan="idpelanggan" value="<?php echo $data['idpelanggan'] ?>"></td>
			</tr>

			<tr>
				<td>USERNAME</td>
				<td>:</td>
				<td><input type="text" name="username" idpelanggan="username" value="<?php echo $data['username'] ?>"></td>
			</tr>

			<tr>
				<td>PASSWORD</td>
				<td>:</td>
				<td><input type="text" name="password" idpelanggan="password" value="<?php echo $data['password'] ?>"></td>
			</tr>
		
			<tr>
				<td>NOMOR KWH</td>
				<td>:</td>
				<td><input type="text" name="nomorkwh" idpelanggan="nomorkwh" 
				value="<?php echo $data['nomorkwh'] ?>"></td>
			</tr>
			
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" name="namapelanggan" idpelanggan="namapelanggan" value="<?php echo $data['namapelanggan'] ?>"></td>
			</tr>
			
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td><input type="text" name="alamat" idpelanggan="alamat" value="<?php echo $data['alamat'] ?>"></td>
			</tr>

			<tr>
				<td>ID TARIF</td>
				<td>:</td>
				<td>
					<select name="idtarif" class="select">
						<?php
							$kodetarif = mysqli_query($db_link, "select * from tarif");
							while ($p = mysqli_fetch_array($kodetarif)){
								echo "<option value='$p[idtarif]'>($p[idtarif])</option>";
							}
						?>
					</select>
				</td>
			</tr>			

			<tr>
			<td></td>
			<td></td>
			<td><input class="pointer" type="submit" value="Simpan"></td>
		</tr>
		
		</table>
		</center>
	</form>

	<div class="footer">
		Copyright By Gempar Panggih Dwi Putra &copy; 2022. All right reserved.
	</div>
</body>
</html>