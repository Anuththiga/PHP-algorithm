<!--
Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.
    
Example 1:

Input: x = 123
Output: 321

Constraints:

-231 <= x <= 231 - 1 -->

<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $output =0;
        if($x < pow(2,31) -1 || $x > -1 * pow(2, 31))
        {
            $i = $x<0 ? "-" : "";
            $int = (int)strrev($x);
            $output = $i.$int; 
        }
        else {
            $output = 0;
        }
        return $output;
       
    }
}
?>