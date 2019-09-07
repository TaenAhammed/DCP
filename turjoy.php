<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
while (($a = fgets(STDIN)) != null) {
   $str = explode(" ", $a);
   $w = 0;
   for ($i = 0; $i < $str[1]; $i++) {
      fscanf(STDIN, "%d\n", $workingHour);
      $w = $w + $workingHour;
   }
   $d = ceil($str[0] / $w);
   if ($d == 1)
      echo "Project will finish within " . $d . " day.\n";
   else
      echo "Project will finish within " . $d . " days.\n";
}
