<?php
$servername = "localhost";
$user 		= "root";
$password 	= "";
$db			= "biodata" ;

$koneksi = mysql_connect($servername,$user,$password)
			or die ('gagal terkoneksi'.mysql_error());

$database	= mysql_connect($db) 
				or die ('gagal terhubung ke database' . mysql_connect())

?>