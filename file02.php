<?php
$namafile = "data.txt";
$handle = fopen($namafile, "w");
if (!$handle) {
	echo "<b>File tidak bisa dibuka atau belum ada</b>";
} else {
	echo "<b>File berhasil dibuka</b>";
}
fclose($handle);
?>