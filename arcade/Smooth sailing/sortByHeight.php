/*Some people are standing in a row in a park. There are trees between them which cannot be moved. Your task is to rearrange the people by their heights in a non-descending order without moving the trees.*/

function sortByHeight($a) {
    $sortedArray = array();
    foreach($a as $value)
    {
        if($value != -1) array_push($sortedArray, $value);
    }
    arsort($sortedArray);
    foreach($a as $key => $value)
    {
        if($value != -1) $a[$key] = array_pop($sortedArray);
    }
    return $a;
}