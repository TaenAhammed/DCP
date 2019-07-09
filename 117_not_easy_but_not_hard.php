<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);

for ($i = 0; $i < $testcase; $i++) {
    fscanf(STDIN, "%d\n", $num);

    $avg = (1 + $num) / 2;
    $result = $avg * $num;

    fprintf(STDOUT, "%d\n", $result);
}
