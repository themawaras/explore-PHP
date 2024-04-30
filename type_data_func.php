<?php

function sum(int $first, int $second)
{
    $total = $first + $second;
    echo "Penjumlahan bilangan $first dan $second adalah $total" . PHP_EOL;
}

sum("10", "10");
sum(11, 14);
sum(true, false);
// sum([], []);

function fullName(string $first, string $last)
{
    echo "Halo $first $last" . PHP_EOL;
}

fullName("andi", "baskoro");
fullName(10, 11);
fullName(true, false);
// fullName([], []);
