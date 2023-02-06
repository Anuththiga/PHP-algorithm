<!-- A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include letters and numbers.

Given a string s, return true if it is a palindrome, or false otherwise.

Example 1:

Input: s = "A man, a plan, a canal: Panama"
Output: true
Explanation: "amanaplanacanalpanama" is a palindrome. -->

<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $lower_s = strtolower($s);
        $temp = preg_replace('/[\W_]/', "", $lower_s);
        
        $new_s = strrev($temp);
        $new_s == $temp ? $a = true : $a = false;
         return $a;
    }
}
?>