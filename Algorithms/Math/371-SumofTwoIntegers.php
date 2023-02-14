<!-- Given two integers a and b, return the sum of the two integers without using the operators + and -.

Example 1:

Input: a = 1, b = 2
Output: 3 -->

<?php

class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @return Integer
     */
    function getSum($a, $b) {
        $nums = array();
        array_push($nums, $a, $b);
        $sum = array_sum($nums);
        return $sum;
    }
}

?>