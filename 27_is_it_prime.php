<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testCases);

for ($a = 0; $a < $testCases; $a++) {
    fscanf(STDIN, "%d\n", $number);

    if (isPrime($number) && $number !== 0 && $number !== 1)
        echo sprintf("Yes\n");
    else
        echo sprintf("No\n");
}

function isPrime($num)
{
    for ($i = 2; $i < $num; $i++)
        if ($num % $i === 0)
            return false;
    return true;
}
