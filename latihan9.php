<?php
include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM BIODATA</title>
	<link href="" type="text/css" rel="stylesheet">
</head>
<center>
	<body>
		<form action="proses.php" method="POST">
			<div class="warna">
				<center><h1 style="color: aqua"> form input data</h1></center>
				<table border="0">
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td><input type="text" name="nik" size="20"></td>
				</tr>
				<tr>
					<td> NAMA</td>
					<td>:</td>
					<td><input type="text" name="nama" size="20"></td>
				</tr>
				<tr>
					<td> TEMPAT LAHIR </td>
					<td>:</td>
					<td><input type="text" name="tmp_lahir" size="20"></td>
				</tr>
				<tr>
					<td> TANGGAL LAHIR </td>
					<td>:</td>
					<td><input type="text" name="tgl_lahir" size="20"></td>
				</tr>
				<tr>
					<td> JENIS KELAMIN </td>
					<td>:</td>
					<td><input type="radio" name="kelamin" value="laki-laki">laki-laki
					<td><input type="radio" name="kelamin" value="Perempuan">laki-laki
				</tr>
				<tr>
					<td> ALAMAT </td>
					<td>:</td>
					<td><input type="text" name="alamat" size="20"></td>
				</tr>
				<tr>
					<td> AGAMA </td>
					<td>:</td>
					<td><select name="agama">
						<option>
							<option>=========</option>
							<option selected="Islam">Islam</option>
							<option selected="Kristen">Kristen</option>
							<option selected="Hindu">Hindu</option>
							<option selected="Budha">Budha</option>
						</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> STATUS PERNIKAHAN </td>
					<td>:</td>
					<td><select name="status">
					</td>
					<option>
						<option>=========</option>
							<option selected="Belum_menikah"></option>
							<option selected="Duda"></option>
							<option selected="Janda"></option>
							<option selected="Menikah"></option>
							<option selected="Jomblo"></option>
						</option>
					</select>
				</tr>
				<tr>
					<td>PEKERJAAN</td>
					<td>:</td>
					<td><input type="text" name="pekerjaan" size="20"></td>
				</tr>
				<tr>
					<td>KEWARNEGARAAN</td>
					<td>:</td>
					<td><input type="text" name="kewarganegaraan" size="20"></td>
				</tr>
				<tr>
					<td>BERLAKU HINGGA</td>
					<td>:</td>
					<td><input type="text" name="berlaku" size="20"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<input type="submit" value="Simpan">
						<input type="submit" value="Reset">
					</td>
				</tr>
			</table>
		</div>
	</form>
</body>
</center>
</html>

						





						

				