function tribonacci($signature, $n) {
    
    $i=2;
    while($i<$n-1)
        {
            array_push($signature,$signature[$i]+$signature[$i-1]+$signature[$i-2]);
            $i++;
        }
    return array_slice($signature,0,$n);
}