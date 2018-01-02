/*Given a string, replace each its character by the next one in the English alphabet (z would be replaced by a).*/

function alphabeticShift($inputString) 
{
    $inputString = str_split($inputString);
    
    foreach ($inputString as $key => $value) 
    {
        $inputString[$key]++;
        if ($inputString[$key] == 'aa') $inputString[$key] = 'a';
    }

    return implode($inputString);
}