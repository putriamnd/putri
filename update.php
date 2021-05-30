<?php
include('koneksi.php');
$nik				=$_POST ['nik'];
$nama				=$_POST ['nama'];
$tmp_lahir			=$_POST ['tmp_lahir'];
$tgl_lahir			=$_POST ['tgl_lahir'];
$Kelamin			=$_POST ['kelamin'];
$alamat				=$_POST ['alamat'];
$agama				=$_POST ['agama'];
$status				=$_POST ['status'];
$pekerjaan			=$_POST ['pekerjaan'];
$Kewarganegaraan	=$_POST ['Kewarganegaraan'];
$berlaku			=$_POST ['berlaku'];

$query = mysql_query("UPDATE ktp SET nama= '$nama',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',kelamin='$kelamin',alamat='$alamat',agama='$agama',status='$status',pekerjaan='$pekerjaan',Kewarganegaraan='$Kewarganegaraan',berlaku='$berlaku' where nik='$nik'");
if($squery){
	header('location:output.php?message=succes');
}

?>