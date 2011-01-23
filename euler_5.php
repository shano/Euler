<?php
function test_code($A) {
    $max = array_product($A);
    for($i = 2520; $i < $max; $i = $i + 2520) {
        if(fully_dividable($A, $i)) {
            return $i;
        }
    }
}

function fully_dividable($array, $sum) {
    foreach($array as $val) {
        if((($sum % $val) != 0)) {
            return false;            
        }    
    }

    return true;
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
$i = array(12,14,15,16,18,20, 19, 17, 13, 11);
//$divisors = array(2,3,4,5,6,7,8,9,10);
echo "Correct: " . test_code($i) . "\n";
/* Correct Test */
//$i = -1000;
//echo "Correct: " . test_code($i) . "\n";

?>
