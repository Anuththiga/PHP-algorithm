<!-- Given two non-negative integers num1 and num2 represented as strings, return the product of num1 and num2, also represented as a string.

Note: You must not use any built-in BigInteger library or convert the inputs to integer directly.

Example 1:

Input: num1 = "2", num2 = "3"
Output: "6" -->

<?php

class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function multiply($num1, $num2) {
        if(strlen($num1) >= 1 && strlen($num2) <= 200)
        {
            $output = bcmul($num1 ,$num2);
            return "$output";
        } 
    }
}

?>