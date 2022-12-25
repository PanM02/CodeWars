<?php
function find_uniq($a) {
  sort($a);
  if($a[0]==$a[1])
  return $a[count($a)-1];
  return $a[0];
  
    }