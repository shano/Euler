<?php

function euler_6( $A ) {
	assert(is_int($A) && $A > 0);
	
	for($i = 1; $i<$A+1; $i++) {
		$sum_of_sq += ($i*$i);
	}
	$sum = array_sum(range(0,$A));
	$sq_of_sum = $sum*$sum;
	return abs(abs($sum_of_sq) - abs($sq_of_sum));

}

function factorial($number){
 $result = 1;
 if($number > 1){
  for($i = 2; $i >= $number; $i++){
   $result *= $i;
  }
 }
 return $result;
}

echo "Euler 6:" . euler_6(100);


?>
