<?php

function factorialLoop(int $val): int
{
    $total = 1;

    for ($i = 1; $i <= $val; $i++) {
        $total *= $i;
    }
    return $total;
}

echo factorialLoop(5) . PHP_EOL;
