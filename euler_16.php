<?php
function euler_16($base, $exp) {
  $digits = gmp_pow($base, $exp);
  $digits = gmp_strval($digits);
  $arr = preg_split("//","".$digits);
  return array_sum($arr);
}

echo euler_16(2, 1000);




?>
