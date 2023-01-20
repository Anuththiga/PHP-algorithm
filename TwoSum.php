<!-- Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1]. -->
<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $numlength = count($nums);
        $array = array();
        for($i=0; $i<$numlength; $i++)
        {
            for($j=$i+1; $j<$numlength; $j++)
            {
                if($nums[$i] + $nums[$j] == $target)
                {
                    array_push($array, $i, $j);
                }
            }
        }
        return $array;
    }
}

?>