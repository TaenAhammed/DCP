<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testCases);

for ($a = 0; $a < $testCases; $a++) {
    fscanf(STDIN, "%s\n", $string);

    if (strpos($string, "r")) {
        fprintf(STDOUT, "Not vely easy\n");
    } else {
        fprintf(STDOUT, "Vely easy\n");
    }
}
