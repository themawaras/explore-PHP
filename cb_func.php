<?php

function sayHi(string $name, $filter)
{
    echo "Hi! " . $filter($name) . PHP_EOL;
}


sayHi("NaNa", "strtoupper");

sayHi("ANDika", fn ($namas) => strtolower($namas));
