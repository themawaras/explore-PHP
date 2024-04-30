<?php

// $counter = 1;

// for ($counter = 1; $counter <= 10; $counter++) {
//     if ($counter == 5) {
//         continue;
//     } else if ($counter == 7) {
//         break;
//     } else if ($counter % 2 == 0) {
//         echo "Bilangan genap: $counter" . PHP_EOL;
//     } else {
//         echo "Bilangan ganjil: $counter" . PHP_EOL;
//     }
// }

for ($counter = 1; $counter <= 10; $counter++) {
    if ($counter == 5) {
        continue; // Melewatkan bilangan 5
    }

    if ($counter % 2 == 0) {
        echo "Bilangan genap: $counter" . PHP_EOL;
    } else {
        echo "Bilangan ganjil: $counter" . PHP_EOL;
    }

    if ($counter == 7) {
        break; // Menghentikan perulangan saat bilangan mencapai 7
    }
}
