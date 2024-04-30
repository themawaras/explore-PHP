<?php

$profile = [
    "name" => "thema",
    "age" => 29,
    "address" => [
        "city" => "Yogyakarta",
        "number" => "S-45",
        "postalcode" => "55161"
    ]
];

var_dump($profile);

var_dump($profile["address"]["city"]);
