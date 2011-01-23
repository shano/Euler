<?php
function test_code($A) {
   if(!is_int($A)) return 0;
   if($A < 0) $A = abs($A);
   $total_sum=0;
   for($i=0; $i<$A; $i++) {
       if((($i%3)==0) || (($i%5)==0)) $total_sum += $i;
   }
   return $total_sum;
}

for($ind=0;$ind<10;$ind++) {
    $i = rand(99999, 999999);
    echo "Big Pos: " . test_code($i) . "\n";
}

for($ind=0;$ind<10;$ind++) {
    $i = rand(-99999, -999999);
    echo "Big Neg: " . test_code($i) . "\n";
}
/* Mini Test */
$i = 2;
echo "Mini: ".test_code($i) . "\n";

echo "Empty: " .test_code('') . "\n";
/* String Test */
$i = "asdkjaslkdjasdjlk";
echo "String: " . test_code($i) . "\n";
/* Correct Test */
$i = 1000;
echo "Correct: " . test_code($i) . "\n";
/* Correct Test */
$i = -1000;
echo "Correct: " . test_code($i) . "\n";

?>
