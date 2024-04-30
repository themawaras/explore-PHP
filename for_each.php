<?php

$myArray = [1, 2, 3, "text", "array", 0.2, 2.3];

echo "Isi value dari $" . "myArray adalah: " . PHP_EOL;

foreach ($myArray as $array) {
    echo $array . PHP_EOL;
}

foreach ($myArray as $idx => $value) {
    echo "Index ke-$idx dalam array berisi: $value" . PHP_EOL;
}
