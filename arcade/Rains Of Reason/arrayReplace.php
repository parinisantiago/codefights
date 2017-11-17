/*Given an array of integers, replace all the occurrences of elemToReplace with substitutionElem.*/

function arrayReplace($inputArray, $elemToReplace, $substitutionElem) 
{
    return $inputArray = array_replace($inputArray,array_fill_keys(array_keys($inputArray,$elemToReplace),$substitutionElem));
}