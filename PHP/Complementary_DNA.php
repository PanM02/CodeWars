function DNA_strand($dna) {
  // Your code here
  $newDNA="";
  $dna=str_split($dna);
  foreach($dna as $char)
    {
    switch ($char) {
    case "T":
        $newDNA=$newDNA."A";
        break;
    case "A":
        $newDNA=$newDNA."T";
        break;
    case "G":
        $newDNA=$newDNA."C";
        break;
    case "C":
        $newDNA=$newDNA."G";
        break;
    }
  }
  return $newDNA;
}