/*Given two cells on the standard chess board, determine whether they have the same color or not.*/

function chessBoardCellColor($cell1, $cell2) {
    $regex = "/[ACEG][1357]/";
    $regex2 = "/[BDFH][2468]/";
    
    $output2 = !(preg_match($regex2,$cell1) xor preg_match($regex2,$cell2));
    $output3 = !(preg_match($regex,$cell1) xor preg_match($regex,$cell2));
    
    if(preg_match($regex2,$cell1) || preg_match($regex,$cell1)){
        
        return (preg_match($regex2,$cell2) || preg_match($regex,$cell2));
    }
    
    if(!preg_match($regex2,$cell1) && !preg_match($regex,$cell1)){
        
        return (!preg_match($regex2,$cell2) && !preg_match($regex,$cell2));
    }
    
}
