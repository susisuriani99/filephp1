<?php
function luas_lingkaran($jari) {
	return 3.14 * $jari * $jari;
}
//pemanggilan fungsi
$r = 10;
echo "<b>Luas lingkaran dengan jari-jari $r =</b>";
echo luas_lingkaran($r);
?>