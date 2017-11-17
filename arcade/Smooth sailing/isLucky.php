/*Ticket numbers usually consist of an even number of digits. A ticket number is considered lucky if the sum of the first half of the digits is equal to the sum of the second half.
Given a ticket number n, determine if it's lucky or not.*/

function isLucky($n) {
    $n = str_split((string)$n);
    $n = array_chunk($n, sizeof($n)/2);
    return(array_sum($n[0]) == array_sum($n[1]));
    
}