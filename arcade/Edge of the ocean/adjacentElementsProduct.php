/*Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.*/

function adjacentElementsProduct($inputArray) {
    $num = $inputArray[0] * $inputArray[1];
    $size = sizeof($inputArray) - 1;
    for($i = 1; $i < $size; $i++){
        $result = $inputArray[$i] * $inputArray[$i + 1];
        if($num < $result) $num = $result;
    }
    return $num;
}