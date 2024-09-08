<?php
// Sekarang tanggal 07 Agustus 2024 16:38:00
$arrDay =array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$day = date ("w");		// 0-6 day

echo "Hari ini hari : <b>". $arrDay[$day]."<b>";
?>