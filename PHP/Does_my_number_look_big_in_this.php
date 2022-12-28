<?php

function narcissistic(int $value): bool {
    // Your code here
    $sum=0;
    $a=str_split($value);
    for($i=1;$i<=count($a);$i++)
      {
      $sum=$sum+($a[$i-1]**count($a));
    }
    if ($sum==$value)
      return true;
    else return false;
  }