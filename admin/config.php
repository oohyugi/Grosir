<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "talingok";
$db_name = "db_grosir";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>