<h2>>Percobaan Variabel</h2>

<?php

$nama = "Gagas";
$kelas = "3d";
$semester = 4;

var_dump($nama); echo "<br>";
var_dump($kelas); echo "<br>";
var_dump($semester); echo "<br>";


function printNama() 
{
	global $nama;
	echo "<h3>$nama</h3>";
}
function printNamaMataKuliah() 
{
	$namaMatkul = "Web Programing";
	echo "<p>$namaMatkul</p>";
}
echo "<h1>$namaMatkul</p>";

printNama();
printNamaMataKuliah();

?>