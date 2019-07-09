<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testCases);

for ($i = 0; $i < $testCases; $i++) {

    fscanf(STDIN, "%d %d %d %d\n", $b1, $b2, $p1, $p2);
    fscanf(STDIN, "%d %d %d %d\n", $b3, $b4, $p3, $p4);

    if ((($b1 + $b2) > ($p1 + $p2)) && (($b3 + $b4) > ($p3 + $p4))) {
        $msg = 'Banglawash';
    } else {
        $msg = 'Miss';
    }

    fprintf(STDOUT, "%s\n", $msg);
}
