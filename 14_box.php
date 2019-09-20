<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testCases);

for ($x = 0; $x < $testCases; $x++) {
    fscanf(STDIN, "%f %f %f \n", $a, $b, $c);

    $diagonal = sqrt(pow($a, 2) + pow($b, 2) + pow($c, 2));

    echo sprintf("%0.2f\n", $diagonal);
}
