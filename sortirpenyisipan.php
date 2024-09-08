<?php

function insertionSort($data) {
  $n = count($data);
  for ($i = 1; $i < $n; $i++) {
    $key = $data[$i];
    $j = $i - 1;

    while ($j >= 0 && $data[$j] > $key) {
      $data[$j + 1] = $data[$j];
      $j = $j - 1;
    }

    $data[$j + 1] = $key;
  }
  return $data;
}

$data = array(1, 2, 5, 10, 23);
$sortedData = insertionSort($data);

echo "Data awal: ";
print_r($data);
echo "\n";

echo "Data setelah diurutkan: ";
print_r($sortedData);
echo "\n";
?>

