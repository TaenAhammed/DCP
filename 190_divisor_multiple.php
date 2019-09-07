<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testCase);

for ($i = 0; $i < $testCase; $i++) {
    fscanf(STDIN, "%d %d\n", $a, $b);

    $limit = ceil($b / $a);
    $count = 0;

    for ($j = 1; $j <= $limit; $j++) {
        $divisor = $a * $j;
        if ($b % $divisor === 0) {
            $count += 1;
        }
    }
    fprintf(STDOUT, "Case %d: %d\n", $i + 1, $count);
    $count = 0;
}
