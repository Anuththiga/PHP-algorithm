<!-- Given an integer x, return true if x is a palindrome, and false otherwise.

Example 1:

Input: x = 121
Output: true
Explanation: 121 reads as 121 from left to right and from right to left. -->

<?php

class PalindromNumber {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $stringrev = strrev($x);
        $reverse = (int)$stringrev;
        if($x == $reverse)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>