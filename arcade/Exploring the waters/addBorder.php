/*Given a rectangular matrix of characters, add a border of asterisks(*) to it.*/

function addBorder($picture) {
    $s= str_repeat('*', strlen($picture[0]) + 2);
    $myPicture = array();
    array_push($myPicture, $s);
    foreach($picture as $pic) array_push($myPicture, '*'.$pic.'*');
    array_push($myPicture, $s);
    return $myPicture;
    
}