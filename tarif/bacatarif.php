<?php
		include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../styles/form.css">
</head>
<body>
	<div class="bekgron">
	<h2>Manajemen Tarif</h2>
	</div>
	<div class="gambar">
		
	</div>
	<br>
		<center>
			<input type="button" value="Tambah Data Tarif" onclick="location.href='tambahtarif.php'">
		</center>
		<br>
		<center>
		<table name="table" border="0" cellspacing="10" cellpadding="10">
			<div class="biru">
			<tr>
				<th>NO</th>

				<th>ID TARIF</th>
				<th>DAYA</th>
				<th>TARIF/kWH</th>
				<th>AKSI</th>
			</tr>
			</div>
			<?php
				$no=1;
				$sql="SELECT * FROM tarif";
				$query= mysqli_query($db_link,$sql);
				while ($data = mysqli_fetch_array($query))
				{
					?>
					<tr>
						<td><?php echo "$no"; ?></td>
						<td><?php echo "$data[idtarif]"; ?></td>
						<td><?php echo "$data[daya]"; ?></td>
						<td><?php echo "$data[tarifperkwh]"; ?></td>
						<td>
							<a class="edit" href="edittarif.php?idtarif=<?php echo"$data[idtarif]"; ?>">EDIT</a>
							<a class="hapus" href="hapustarif.php?idtarif=<?php echo"$data[idtarif]"; ?>" onclick="return confirm('YAKINNN !!!')">HAPUS</a>
						</td>
					</tr>
					<?php
					$no++;
				}
			?>
		</table><br>
		<a class="tombol" href="../index.html">KEMBALI</a>
		</center>
		<div class="footer">
		Copyright By Gempar Panggih Dwi Putra &copy; 2020. All right reserved.
		</div>
</body>
</html>