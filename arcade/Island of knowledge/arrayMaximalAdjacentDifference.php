/Given an array of integers, find the maximal absolute difference between any two of its adjacent elements.*/

function arrayMaximalAdjacentDifference($inputArray) 
{
    $max = 0;
    $size = sizeof($inputArray) - 1;
    
    for($i = 1; $i < $size; $i++) $max = max($max, abs($inputArray[$i] - $inputArray[$i+1]));
 
    return $max;
}