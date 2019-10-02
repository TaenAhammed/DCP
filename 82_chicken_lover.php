<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testCases);

for ($a = 0; $a < $testCases; $a++) {

    fscanf(STDIN, "%d\n", $chickens);

    if ($chickens > 119)
        fprintf(STDOUT, "Good Boy Sifat\n");
    else {
        fprintf(STDOUT, "Naughty Boy Sifat\n");
    }
}