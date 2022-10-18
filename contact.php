<html lang="en">
	<head>
		<title>Gempar Code</title>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link rel="SHORTCUT ICON" href="img/logo/colokan.png">
        <style>
            table{
                color: white;
                font-size: 20px;
            }
            
            table tr th{
                
                color: white;
                border: 0px solid black;
            }
            
            table tr td{
               
                border: 0px solid black;
                padding-top: 20px;
                padding-right: 60px;
            }
        </style>
	</head>
	<body>
		<div class="form-cont">
			<div class="portofolio">
				<h2>Terima Kasih Telah Memberi Masukan</h2>
				<div class="form-input">
                    <table border="0" cellpadding="2" cellspacing="4">
                        <?php
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $nomor = $_POST['nomor'];
                        $tanggal = $_POST['tanggal'];
                        $komentar = $_POST['komentar'];
                        ?>
                            <tr>
                                <td><?php echo 'Nama'?></td>
                                <td><?php echo $nama;?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Email'?></td>
                                <td><?php echo $email;?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Nomor'?></td>
                                <td><?php echo $nomor;?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Tanggal Komentar';?></td>
                                <td><?php echo $tanggal;?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Komentar';?></td>
                                <td><?php echo $komentar;?></td>
                            </tr>
                    </table>
				</div>
			</div>
		</div>
		
	</body>
</html>