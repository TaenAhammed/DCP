<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testCases);

for ($a = 0; $a < $testCases; $a++) {

    fscanf(STDIN, "%s\n", $verdict);

    if ($verdict === 'ac')
        fprintf(STDOUT, "Accepted\n");

    if ($verdict === 'wa')
        fprintf(STDOUT, "Wrong Answer\n");

    if ($verdict === 'rte')
        fprintf(STDOUT, "Run Time Error\n");

    if ($verdict === 'tle')
        fprintf(STDOUT, "Time Limit Exceeded\n");
}
