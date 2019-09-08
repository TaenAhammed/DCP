<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testCases);

for ($a = 0; $a < $testCases; $a++) {

    fscanf(STDIN, "%s\n", $str);
    fprintf(STDOUT, "Case %d:\n", $a + 1);

    for ($i = 97; $i < 123; $i++) {
        $occurrence = substr_count($str, chr($i));
        if ($occurrence !== 0) {
            fprintf(STDOUT, "%s %d\n", chr($i), $occurrence);
        }
    }
}
