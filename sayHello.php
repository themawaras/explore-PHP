<?php

function sayHello()
{
    echo "Hello world!" . PHP_EOL;
}

sayHello();
sayHello();

function sayName($name = "Anonim")
{
    echo "Hello, $name!" . PHP_EOL;
}

sayName("Rudi");
sayName("Tara");
sayName();
