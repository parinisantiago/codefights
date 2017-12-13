/*Check if all digits of the given integer are even.*/

function evenDigitsOnly($n) 
{
    
    $numbers = str_split($n);
    
    foreach($numbers as $number)
    {
       if($number % 2 != 0) return false; 
    }
    return true;
}