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
	<h2>Tambah - Manajemen Tarif</h2>
	</div>
	<div class="img">
		
	</div>
	<br>
	<br>
		<form action="aksi_tambah_tarif.php" method="POST">
			<center>
			<table border="0" cellpadding="10">
				<tr>
					<td>ID TARIF</td>
					<td><input type="text" name="idtarif" id="idtarif"></td>
				</tr>
					<tr>
						<td>DAYA</td>
						<td><input type="text" name="daya" id="daya"></td>		
					</tr>
					<tr>
						<td>TARIF/kWH</td>
						<td><input type="text" name="tarifperkwh" id="tarifperkwh"></td>		
					</tr>
								<tr>
									<td></td>
									<td><input class="pointer" type="submit" value="Simpan"></td>
								</tr>
			</center>
			</table>
		</form>
		<div class="footer">
		Copyright By Gempar Panggih Dwi Putra &copy; 2022. All right reserved.
		</div>
</body>
</html>