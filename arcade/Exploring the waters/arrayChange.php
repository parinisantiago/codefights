/*You are given an array of integers. On each move you are allowed to increase exactly one of its element by one. Find the minimal number of moves required to obtain a strictly increasing sequence from the input.*/

function arrayChange($inputArray) 
{

 $length = sizeOf($inputArray);
 $swaps = 0;
 
 for ($inner = 1; $inner < $length; $inner++) 
 {
  if ( $inputArray[$inner - 1] >= $inputArray[$inner] ) 
  {
    $moves = $inputArray[$inner - 1] - $inputArray[$inner] + 1;
    $inputArray[$inner] += $moves;
    $swaps+= $moves;
  }
 }
 
 return $swaps;
}