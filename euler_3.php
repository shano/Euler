<?php
function test_code($A) {
   //if(!is_int($A)) return 0;
   if($A < 0) $A = abs($A);
   for($i = 2; $i < sqrt($A); $i++) {
        if(fmod($A,$i)==0){
            echo "accepting $A % $i:".fmod($A,$i)."\n";
            return test_code($A/$i);
        }
   }
   return $A;
}
function eratosthenes($n)
{
   $all=array();
   $prime=1;
   //echo 1," ",2;
   $i=3;
   while($i<=$n)
   {
        if(!in_array($i,$all))
         {
            //echo " ",$i;
            $prime+=1;
            $j=$i;
            while($j<=($n/$i))
            {
               array_push($all,$i*$j);
               $j+=1;
            }
         }
        $i+=2;
   }
   return (count($all) == 0);
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
$i = 2;
//echo "Mini: ".test_code($i) . "\n";

//echo "Empty: " .test_code('') . "\n";
/* String Test */
$i = "asdkjaslkdjasdjlk";
//echo "String: " . test_code($i) . "\n";
/* Correct Test */
$i = 600851475143;
echo "Correct: " . test_code($i) . "\n";
/* Correct Test */
$i = -600851475143;
echo "Correct: " . test_code($i) . "\n";

?>
