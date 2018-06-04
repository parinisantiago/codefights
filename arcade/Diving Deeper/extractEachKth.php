//Given array of integers, remove each kth element from it.

function extractEachKth($inputArray, $k) {
    $len = count($inputArray);
    $newArray = array();
    for ($i = 0; $i < $len; $i++){
 
        if (($i + 1) % $k != 0) array_push($newArray,$inputArray[$i]);

    }
    return $newArray;
}