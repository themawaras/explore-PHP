<?php

$total = 200001;

if ($total > 200000) {
    $afterDisc = $total - ($total * 20 / 100);
    echo $afterDisc;
} else if ($total >= 100000) {
    $afterDisc = $total - ($total * 10 / 100);
    echo $afterDisc;
} else {
    echo "Total belanja anda $total. Tanpa diskon.";
}
