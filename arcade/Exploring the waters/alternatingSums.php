/*Several people are standing in a row and need to be divided into two teams. The first person goes into team 1, the second goes into team 2, the third goes into team 1 again, the fourth into team 2, and so on.
You are given an array of positive integers - the weights of the people. Return an array of two integers, where the first element is the total weight of team 1, and the second element is the total weight of team 2 after the division is complete.*/

function alternatingSums($a) {
    $t1 = array();
    $t2 = array();
    $sum = array();
    
    foreach($a as $k => $v)
    {   
        if($k % 2 == 0) array_push($t1,$v);
        else array_push($t2,$v); 
    }
    
    $sum[0] = array_sum($t1);
    $sum[1] = array_sum($t2);
    
    return $sum;
}