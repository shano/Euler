<?php

function euler_9($limit) {
  $tmpc = 999;
  $found == false;
  while(!$found && $tmpc > 0) {
    $c = --$tmpc;
    $b = 1;
    while($b < $c) {
      $a = $limit - ($c + $b);
      echo $a . " ". $b. " ".  $c . "\n";
      if((($a*$a)+($b*$b))==($c*$c)) {
        $found = true;
        return $a * $b * $c;
      }
      $c--;
      $b++;
    }
  }

}
var_dump(euler_9(1000));


?>
