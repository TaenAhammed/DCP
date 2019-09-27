<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testCases);

for ($a = 0; $a < $testCases; $a++) {

    fscanf(STDIN, "%s\n", $str);

    $len = strlen($str);
    $sum = 0;
    for ($i = 0; $i < $len; $i++) {
        $sum += ord($str[$i]);
    }

    if ($sum % 20 === 0) {
        echo sprintf("Yes\n");
    } else {
        echo sprintf("No\n");
    }
}
