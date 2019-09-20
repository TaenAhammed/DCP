<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testCases);

for ($a = 0; $a < $testCases; $a++) {
    fscanf(STDIN, "%d\n", $coins);
    $days = 0;
    $money = 0;

    for ($i = 0; $i < $coins; $i++) {
        $money += $i;
        if ($money >= $coins) {
            break;
        }
        $days++;
    }
    fprintf(STDOUT, "%d\n", $days);
}
