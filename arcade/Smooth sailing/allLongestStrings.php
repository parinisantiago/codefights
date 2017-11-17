/*Given an array of strings, return another array containing all of its longest strings.*/

function allLongestStrings($inputArray) {
    $maxSize = max(array_map('strlen',$inputArray));
    $longestStrings = array();
    foreach($inputArray as $aString)
    {
        if(strlen($aString) == $maxSize) array_push($longestStrings, $aString);
    }
    return $longestStrings;
}