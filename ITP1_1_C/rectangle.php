<?php
$input = fgets(STDIN);
list($a,$b) = explode(" ", $input);
$s =  $a * $b;
$l = ($a + $b) * 2;
echo $s . " " . $l . "\n";