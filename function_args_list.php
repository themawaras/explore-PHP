<?php

function sum(...$values) // untuk pemanggilan argumen/variabel lebih dari satu ke dalam bentuk array
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }

    echo "Total dari " . implode(", ", $values) . " = $total" . PHP_EOL;
}

sum(1, 2, 3, 4, 5);


$array = [2, 3, 4, 5];
sum(...$array);
// sum($array); // ini akan error karena tidak bisa memasukkan array
