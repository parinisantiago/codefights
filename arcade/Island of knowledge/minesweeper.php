/*In the popular Minesweeper game you have a board with some mines and those cells that don't contain a mine have a number in it that indicates the total number of mines in the neighboring cells. Starting off with some arrangement of mines we want to create a Minesweeper game setup.*/

function minesweeper($matrix) {
    
    $x = sizeOf($matrix);
    $y = sizeOf($matrix[0]);
    
    $answer = array_fill(0,$x,array_fill(0,$y,0));
    
    foreach($matrix as $x=>$line)
    {
        foreach($line as $y=>$mine)
        {
            if($mine)
            {
                for($dx = -1; $dx <= 1;$dx++)
                {
                    for($dy = -1; $dy <= 1;$dy++)
                    {
                       if(isset($answer[$x + $dx][$y + $dy])) $answer[$x + $dx][$y + $dy]++;
                    } 
                }
                $answer[$x][$y]--;
            }
        }
    }

    return $answer;
    
}