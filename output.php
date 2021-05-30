<?php
include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>output Biodata</title>
</head>
	<body>
		<center><h1>form output biodata</center>
			<table border="1">
				<tr>
					<td>NO</td>
					<td>NIK</td>
					<td>Nama</td>
					<td>Tempat Lahir </td>
					<td>Tanggal Lahir </td>
					<td>Jenis Kelamin</td>
					<td>Alamat</td>
					<td>Agama</td>
					<td>Status Perkawinan</td>
					<td>Pekerjaan</td>
					<td>Kewarganegaraan</td>
					<td>Berlaku Hingga</td>
					<td>Edit</td>
					<td>Hapus</td>
				</tr>

				<?php
				$query mysql_query("select * from ktp");

				$no=1;
				while ($data = mysql_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $data["nik"];?></td>
						<td><?php echo $data"nama";?></td>
						<td><?php echo $data "tmp_lahir";?></td>
						<td><?php echo $data "tgl_lahir";?></td>
						<td><?php echo $data "kelamin";?></td>
						<td><?php echo $data "alamat";?></td>
						<td><?php echo $data "agama";?></td>
						<td><?php echo $data "status";?></td>
						<td><?php echo $data "pekerjaan";?></td>
						<td><?php echo $data "Kewarganegaraan";?></td>
						<td><?php echo $data "berlaku" ;?></td>
						<td><a href="ubah.php?nik=<?php echo $data['nik']; ?>"/>ubah</a></td>
						<td><a href="ubah.php?nik=<?php echo $data['nik']; ?>"/>Hapus</a></td>

					</tr>
					<?php
					$no++;

				}
				?>
			</table>
			<br>
			<a href="Biodata.php">BACK</a>
		</body>
		</html>
		


				}

		