<form action="Contoh-switch.php" method="post">
	Kelas <input type="text" name="Kelas"><br>
	<input type="submit" value="Proses">

</form>

<?php
	if(array_key_exists("Kelas", $_POST)) {
		switch ($_POST["Kelas"]) {
			case "4a" :
				echo "Kamu Mahasiswa kelas 4A";
				break;
			case "4d":
				echo "Kamu Mahasiswa kelas TOP";
				break;
			default:
				echo "Kamu bukan Mahasiswa semester 4";
			
		}
	}
?>