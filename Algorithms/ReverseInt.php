<!--
Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.
    
Example 1:

Input: x = 123
Output: 321

Constraints:

-231 <= x <= 231 - 1 -->

<?php

// solution-----------------#1----------------
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) { 
        $i = $x<0 ? "-" : "";
        $int = (int)strrev($x);
        if( $int >= (-1 * 2 ** 31) && $int <= (2 ** 31) -1 )
        {
            $output = $i.$int; 
            return $output;
        }
        else {
            return 0;
        }    
    }
}


// solution--------------------#2-----------------------
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $array = array();
       
        if($x<0)
        {
           array_push($array, "-" );
           $x = $x*(-1);
        }
        $array_x = str_split($x);
        
        for($i=count($array_x); $i>=0; $i--)
        {
            array_push($array, $array_x[$i] );
        }
        
        $result = implode($array);
        if($result < 2**31 - 1 && $result > (-2)**31)
        {
            return (int)$result;
        }
        else
        {
            return 0;
        }
            
            
    }
}

?>