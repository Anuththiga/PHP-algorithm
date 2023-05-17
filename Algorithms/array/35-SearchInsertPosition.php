<!-- Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.

Example 1:

Input: nums = [1,3,5,6], target = 5
Output: 2 -->

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $new_nums = array();
        for($i=0;$i<count($nums); $i++)
        {
            if($nums[$i] == $target)
            {
                return $i;
            }
            else
            {
                array_push($nums, $target);
                sort($nums);
                for($i=0; $i<count($nums); $i++)
                {   
                    if($nums[$i] == $target)
                    {
                        return $i;
                    }
                }
            }
        }
    }
}

?>