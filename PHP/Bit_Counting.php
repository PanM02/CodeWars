function countBits($n) 
    {
        $array  = array_map('intval', str_split(decbin($n)));  
        return array_sum($array);
    }