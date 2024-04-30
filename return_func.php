<?php

function sum(...$values): int
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    return $total;
}

$result = sum(1, 2, 3, 4);

echo $result;
