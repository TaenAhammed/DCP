<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
while (($a = fgets(STDIN)) != null) {
   $s = explode(" ", $a);
   $w=0;
   for($i=0;$i<$s[1];$i++){
      fscanf(STDIN,"%d\n",$w1);
      $w=$w+$w1;
   }
   $d=ceil($s[0]/$w);
   if($d==1)
      echo "Project will finish within ".$d." day.\n";
   else
      echo "Project will finish within ".$d." days.\n";
}