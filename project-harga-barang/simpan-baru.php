<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "phb_kelas_d";

$koneksi = new mysqli($server, $username, $password, $db);

if($koneksi->connect_error) {
	die("koneksi gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data SUKSES!";
}
?>