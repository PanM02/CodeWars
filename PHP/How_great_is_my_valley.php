<?php
function makeValley($a) {
    rsort($a);
        $left = $right = [];
        foreach ($a as $key => $value) {
          if ($key % 2 == 0) {
            $left[] = $value;
          } else {
            array_unshift($right, $value);
          }
        }
    
        return array_merge($left, $right);
    
        
    }