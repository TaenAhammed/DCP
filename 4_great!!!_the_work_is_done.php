<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

while (($chunk = fgets(STDIN)) != null) {
    $chunk = trim($chunk);
    $sprintInfo = explode(" ", $chunk);
    $targetedHours = (int) $sprintInfo[0];
    $members = (int) $sprintInfo[1];
    $totalWorkedHours = 0;

    while ($members > 0) {
        fscanf(STDIN, "%d\n", $workedHours);
        $totalWorkedHours += $workedHours;
        $members--;
    }

    $day = ceil($targetedHours / $totalWorkedHours);

    if ((int) $day === 1) {
        fprintf(STDOUT, "Project will finish within %d day.\n", $day);
    } else {
        fprintf(STDOUT, "Project will finish within %d days.\n", $day);
    }
}
