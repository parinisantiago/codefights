/*Given a sequence of integers as an array, determine whether it is possible to obtain a strictly increasing sequence by removing no more than one element from the array.*/

function almostIncreasingSequence($sequence) {
       
       $size = sizeof($sequence);
       $error = 0;
       $num = $sequence[0];
       
       for($i=1; $i<$size; $i++)
       {
              if($sequence[$i] <= $num )
              {
                     $error++;
                     if($sequence[$i] > $sequence[$i-2])  $num = $sequence[$i];
                     else $num = $sequence[$i-1];

              }
              else
              {
		$num = $sequence[$i];
              }
       }
       
       return($error<=1); 
}