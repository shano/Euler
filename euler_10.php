<?php
function eratosthenes($n)
{
   $all=array();
   $total_primes=0;
   $i=0;
   for($i=0;$i<$n;$i++) {
    $all[$i]=0;
   }
   /* Two is the first prime to check*/
   $i=2;
   /* No need to go beyond the root of n */
   while($i*$i<$n)
   {
        /* Faster than in_array */
        if($all[$i]==0)
         {
            $j=$i;
            while($j*$i<=$n)
            {
               $all[$i*$j]=1;
               $j+=1;
            }
         }
        $i+=1;
   }

   for($i=2;$i<$n;$i++) {
    if($all[$i] == 0) $total_primes+=$i; 
   }

   return $total_primes;
}


$limit = 2000000;

echo "Sum of primes up to $limit is:".(eratosthenes($limit));

?>
