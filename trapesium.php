<?php
for ($x = 0; $x <= 20; $x++) {
    for($y = 0; $y <= $x - 1; $y++) {
        echo "B-";
    }
    echo "B<br>";
}
for ($x = 0; $x <= 35; $x++) {
    for ($y = 0; $y <= 20; $y++) {
        echo "B-";
    }
    echo "B<br>";
}
for ($x = 20; $x >= 0; $x--) {
    for ($y = 0; $y <= $x - 1; $y++) {
        echo "B-";
    }
    echo "B<br>";
}