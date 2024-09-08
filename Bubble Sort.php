<?php

function bubbleSort($data) {
  $n = count($data);
  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $n - 2; $j >= $i; $j--) {
      if ($data[$j] > $data[$j + 1]) {
        $tmp = $data[$j];
        $data[$j] = $data[$j + 1];
        $data[$j + 1] = $tmp;
      }
    }
  }
  return $data;
}

$data = array(64, 25, 12, 22, 11);
$sortedData = bubbleSort($data);

echo "Data awal: ";
print_r($data);
echo "\n";

echo "Data setelah diurutkan: ";
print_r($sortedData);
echo "\n";
?>