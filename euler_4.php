<?php
function test_code($A) {
    for($i = $A; $i > 0; $i--) {
        if($i == strrev($i)) {
            for($j = 999; $j > 99; $j--) {
                if($i%$j==0 && 99 < $i/$j && $i/$j < 1000 ) return $i. " ".$j; 
            }
        }
    }
}

/*for($ind=0;$ind<10;$ind++) {
    $i = rand(99999, 999999);
    echo "Big Pos: " . test_code($i) . "\n";
}

for($ind=0;$ind<10;$ind++) {
    $i = rand(-99999, -999999);
    echo "Big Neg: " . test_code($i) . "\n";
}*/
/* Mini Test */
/*$i = 2;
echo "Mini: ".test_code($i) . "\n";

echo "Empty: " .test_code('') . "\n";*/
/* String Test */
/*$i = "asdkjaslkdjasdjlk";
echo "String: " . test_code($i) . "\n";*/
/* Correct Test */
$i = 998001;
echo "Correct: " . test_code($i) . "\n";
/* Correct Test */
//$i = -1000;
//echo "Correct: " . test_code($i) . "\n";

?>
