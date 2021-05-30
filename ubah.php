<?php
include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Biodata</title>
</head>
<center>
	<body>
		<?php
		$nik=$_GET['nik'];
		$select="select = from ktp where nik='$nik'";
		$select_query = mysql_query($select);

		while ($select_result= mysql_fetch_array($select_query)){
			$nik=$select_result['nik'];
			$nama=$select_result['nama'];
			$tmp_lahir=$select_result['tmp_lahir'];
			$tgl_lahir=$select_result['tgl_lahir'];
			$kelamin=$select_result['kelamin'];
			$alamat=$select_result['alamat'];
			$agama=$select_result['agama'];
			$status=$select_result['status'];
			$pekerjaan=$select_result['pekerjaan'];
			$Kewarganegaraan=$select_result['Kewarganegaraan'];
			$berlaku=$select_result['berlaku'];

			?>
			<form action="update.php" method="POST">
				<h1>Form Input Data</h1>
				<table border="1">
					<tr>
						<td>NIK</td>
						<td>:</td>
						<td><input type="text" name="nik" value="<?php echo $nik;?>"/></td>
					</tr>
					<tr>
						<td>NAMA</td>
						<td>:</td>
						<td><input type="text" name="nama" value="<?php echo $nik;?>"/></td>
					</tr>
					<tr>
						<td>TEMPAT LAHIR</td>
						<td>:</td>
						<td><input type="text" name="tmp_lahir" value="<?php echo $nik;?>"/></td>
					</tr>
					<tr>
						<td>TANGGAL LAHIR</td>
						<td>:</td>
						<td><input type="text" name="tgl_lahir" value="<?php echo $nik;?>"/></td>
					</tr>
					<tr>
						<td>JENIS KELAMIN</td>
						<td>:</td>
						<td><input type="text" name="kelamin" value="<?php echo $nik;?>"/></td>
						<td>:</td>
						<td>
							<input type="radio" name="kelamin" value="Laki-laki">Laki-laki
							<input type="radio" name="kelamin" value="Perempuan">Perempuan
						</td>
					</tr>
					<tr>
						<td>ALAMAT</td>
						<td>:</td>
						<td><input type="text" name="alamat" value="<?php echo $nik;?>"/></td>
					</tr>
					<tr>
						<td>AGAMA</td>
						<td>:</td>
						<td><select name="agama">
							<option>
								<option>============</option>
								<option selected="Islam">Islam</option>
								<option selected="Kristen">Kristen</option>
								<option selected="Hindu">Hindu</option>
								<option selected="Budha">Budha</option>
							</option>
						</select>
					</td>

					</tr>
					<tr>
							<td>STATUS PERNIKAHAN</td>
						<td>:</td>
						<td><select name="status">
							<option>
								<option>============</option>
								<option selected="Belum_Menikah"></option>
								<option selected="Duda"></option>
								<option selected="Janda"></option>
								<option selected="Menikah"></option>
							</option>
						</select>
					</tr>
					<tr>
						<td>PEKERJAAN</td>
						<td>:</td>
						<td><input type="text" name="pekerjaan" value="<?php echo $nik;?>"/></td>
					</tr>
					<tr>
						<td>Kewarganegaraan</td>
						<td>:</td>
						<td><input type="text" name="Kewarganegaraan" value="<?php echo $nik;?>"/></td>
					</tr>
					<tr>
						<td>BERLAKU HINGGA</td>
						<td>:</td>
						<td><input type="text" name="berlaku" value="<?php echo $nik;?>"/></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="Submit" name="Simpan">
							<input type="Submit" name="Reset">
						</td>
					</tr>
				</div>
			</form>
		</body>
	</center>
	</html>
	<?php



		}
		?>