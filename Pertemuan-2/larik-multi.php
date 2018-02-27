<?php 

$data = array(
	"web-prog" => 
			array(
					"gagas" => 5,
					"ani" => 7,
					"wish" => 9),
			"kalkulus" =>
			array(
				"wish" => 6,
				"ani" => 8,
				"gagas" => 9
				)

);

echo "Nilai Web-Prog Ani : " .
	$data["web-prog"]["ani"] . "<br>";
echo "Nilai Web-Prog Gagas : " .
	$data["web-prog"]["gagas"] . "<br>";

?>