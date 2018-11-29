<?php
	$a = true;
	$b = false;
	var_dump(true and false); //Hasil: bool(false)
	echo "<br>";

    var_dump($a OR $b); //Hasil: bool(true)
	echo "<br>";

	var_dump(true xor false); //Hasil: bool(true)
	echo "<br>";

	var_dump(true xor true); //Hasil: bool(false)
	echo "<br>";

	var_dump(!false); //Hasil: bool(true)
	echo "<br>";

	var_dump(true and false || true); //Hasil: bool(true)
	echo "<br>";

	var_dump(true and false && true or false); //Hasil: bool(false)
?>
