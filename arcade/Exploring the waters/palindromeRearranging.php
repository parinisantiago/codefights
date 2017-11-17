/*Given a string, find out if its characters can be rearranged to form a palindrom*/

function palindromeRearranging($inputString) 
{
    $odd = 0;
    $values = count_chars($inputString,1);
    foreach($values as $val) 
    {
        if($val % 2 == 1) $odd++;
        if($odd > 1) return false;
    }
    return true;
}