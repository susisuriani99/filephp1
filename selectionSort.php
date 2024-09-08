<?php

function selectionSort($data) {
  $n = count($data);
  for ($i = 0; $i < $n - 1; $i++) {
    $minIndex = $i;
    for ($j = $i + 1; $j < $n; $j++) {
      if ($data[$j] < $data[$minIndex]) {
        $minIndex = $j;
      }
    }
    if ($minIndex != $i) {
      $tmp = $data[$i];
      $data[$i] = $data[$minIndex];
      $data[$minIndex] = $tmp;
    }
  }
  return $data;
}

$data = array(64, 25, 12, 22, 11);
$sortedData = selectionSort($data);

echo "Data awal: ";
print_r($data);
echo "\n";

echo "Data setelah diurutkan: ";
print_r($sortedData);
echo "\n";
?>