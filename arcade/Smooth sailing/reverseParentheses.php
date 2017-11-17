/*You have a string s that consists of English letters, punctuation marks, whitespace characters, and brackets. It is guaranteed that the parentheses in s form a regular bracket sequence.
Your task is to reverse the strings contained in each pair of matching parentheses, starting from the innermost pair. The results string should not contain any parentheses.*/

function reverseParentheses($s) {
    while (preg_match('/\(([^()]*)\)/', $s, $m))
        $s = str_replace($m[0], strrev($m[1]), $s);
    return $s;
}