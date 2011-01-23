<?php
function test_code($A) {
    $first = 0;
    $second = 1;
    $total_sum = 0;
    $fibb = 0;
    while($fibb < $A) {
        $fibb = $first+$second;
        $first = $second;
        $second = $fibb;
        if(($fibb%2)==0) $total_sum+=$fibb;

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
$i = 4000000;
echo "Correct: " . test_code($i) . "\n";
/* Correct Test */
$i = -4000000;
echo "Neg Correct: " . test_code($i) . "\n";

?>
