<?php

$fact1 = gmp_fact(100);

$arr = preg_split("//",gmp_strval($fact1));
echo array_sum($arr);

?>
