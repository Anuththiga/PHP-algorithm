<!-- Given an array of integers nums sorted in non-decreasing order, find the starting and ending position of a given target value.

If target is not found in the array, return [-1, -1].

You must write an algorithm with O(log n) runtime complexity.

Example 1:

Input: nums = [5,7,7,8,8,10], target = 8
Output: [3,4] -->


<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $output = array();
        $result = array();
        
        for($i=0; $i<count($nums); $i++)
        {
            if($nums[$i] == $target)
            {
                array_push($output, $i);
            }
           
        }
            $end = count($output);
            if($end == 0)
            {
               array_push($result, -1, -1); 
            }
            else
            {
            array_push($result, $output[0], $output[$end - 1] );
            }   
        return $result;
        
    }
}

?>