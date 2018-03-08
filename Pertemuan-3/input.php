<form>
	Masukan Angka
	<input type="text" name="nilai"><br>
	<input type="submit" value="Proses">

</form>

<?php

if(array_key_exists("nilai", $_GET)){
	if($_GET["nilai"] <= 25){
		echo "Nilai Kamu E";
	}elseif ($_GET["nilai"] > 25 &&
			$_GET["nilai"] <= 50) {
		echo "Nilai Kamu D";
	}elseif ($_GET["nilai"] > 50 &&
			$_GET["nilai"] <= 65) {
		echo "Nilai kamu C";
	}elseif ($_GET["nilai"] > 65 &&
			$_GET["nilai"] <= 80) {
		echo "Nilai kamu B";
	}elseif($_GET["nilai"] > 80 &&
			$_GET["nilai"] <= 100) {
		echo "Nilai kamu A";
	}else{
		echo "Kalo masukin nilai yang bener";
	}
}else{
	echo "Isi dulu nilainya diatas";
}

?>