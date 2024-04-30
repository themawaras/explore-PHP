<?php

$data = [
    "action" => "CREATE"
];

// The isset() function checks whether a variable is set or not
// if (isset($data["action"])) {
//     $action = $data["action"];
// } else {
//     $action = "nothing!";
// };

$action = $data["action"] ?? 'nothing!';

echo $action . PHP_EOL;
