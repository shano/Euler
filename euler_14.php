<?php

/* There is repeated patterns so doing all a million values is useless */
/* Store start number and length of total sequence */
/* if an existing start number appears */
/* simply add it's total to your own sequest */

function euler_14() {
  $seq_length=array();
  for($i=0; $i<1000000; $i++) {
    $seq_length[$i]=0;
    $j=$i;
    while($j!=1) {
      /* If we find a value in a sequence that exists excellent*/
      if(isset($seq_length[$j]) && $seq_length[$j]>0) {
        $seq_length[$i] = $seq_length[$i]+$seq_length[$j];
        $j=1;
      }else{
        if($j%2==0){
          /* Do even alteration */
          $j=$j/2;
          $seq_length[$i]++;
        } else {
          /* Do even alteration */
          $j=3*$j+1;
          $seq_length[$i]++;
        }         
      }

    } 

  }
  $num = max($seq_length);
  return array_search($num, $seq_length);
}

echo euler_14();
