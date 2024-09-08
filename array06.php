<?php
$arrNilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r ($arrNilai);
echo "</pre><br>";
$keys = array_keys($arrNilai);
$values = array_values($arrNilai);
for ($i = 0; $i < count($arrNilai); $i++) {
    for ($j = $i+1; $j < count($arrNilai); $j++) {
        if ($values[$j] < $values[$i]) {
            $temp = $values[$i];
            $values[$i] = $values[$j];
            $values[$j] = $temp;
            $temp = $keys[$i];
            $keys[$i] = $keys[$j];
            $keys[$j] = $temp;
        }
    }
}
$sorted = [];
foreach ($keys as $index => $k) {
    $sorted[$k] = $values[$index];
}
print_r($sorted);

sort ($arrNilai);
reset ($arrNilai);
echo "<b>Array setelah pengurutan sort()</b>";
echo "<pre>";
print_r ($arrNilai);
echo "</pre>";

rsort ($arrNilai);
//reset ($arrNilai);
echo "<b>Array setelah pengurutan rsort()</b>";
echo "<pre>";
print_r ($arrNilai);
echo "</pre>";
?>