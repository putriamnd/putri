<?php
include('koneksi.php');
$nik=$_GET['nik'];

$delete="delete from ktp where nik='$nik'";
$delete_query=,mysql_query($delete);
if ($delete_query) {
	header('location:output.php?message=delete');
}
?>