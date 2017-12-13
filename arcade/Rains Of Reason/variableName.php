/*Correct variable names consist only of Latin letters, digits and underscores and they can't start with a digit.

Check if the given string is a correct variable name. */

function variableName($name) {
    
    if(preg_match("/^[a-zA-Z0-9_]+$/", $name) && preg_match("/^[a-zA-Z_]+$/", substr($name,0,1))) return true;
    else return false;
    
}
