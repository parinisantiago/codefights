/*Given two strings, find the number of common characters between them.*/

function commonCharacterCount($s1, $s2) {
    
    $s1 = str_split($s1);
    $s2 = str_split($s2);
    $count = 0;
    foreach($s1 as $i)
    {
        $j = array_search($i, $s2);
        if($j !== false)
        {
            $s2[$j] = NULL;
            $count++;
        }
    }
    return $count;
}