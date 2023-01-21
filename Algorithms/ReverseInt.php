<!-- Example 1:

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
        if($x < pow(2,31) -1 || $x > -1 * pow(2, 31))
        {
            $i = $x<0 ? "-" : "";
            $int = (int)strrev($x);
            $output = $i.$int;
            return $output ;
        }
       
    }
}
?>