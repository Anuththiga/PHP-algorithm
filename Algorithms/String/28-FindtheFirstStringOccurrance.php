<!-- Given two strings needle and haystack, return the index of the first occurrence of needle in haystack, or -1 if needle is not part of haystack.

Example 1:

Input: haystack = "sadbutsad", needle = "sad"
Output: 0
Explanation: "sad" occurs at index 0 and 6.
The first occurrence is at index 0, so we return 0. -->


<?php
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $result = strpos($haystack, $needle);
        $is_numeric= is_numeric($result);
        $a = 0;
        $is_numeric === true ? $a = $result : $a = -1;
        return $a;
        
    }
}
?>