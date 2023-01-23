<!-- Given two sorted arrays nums1 and nums2 of size m and n respectively, return the median of the two sorted arrays.

The overall run time complexity should be O(log (m+n)).

Example 1:

Input: nums1 = [1,3], nums2 = [2]
Output: 2.00000
Explanation: merged array = [1,2,3] and median is 2.
Example 2:

Input: nums1 = [1,2], nums2 = [3,4]
Output: 2.50000
Explanation: merged array = [1,2,3,4] and median is (2 + 3) / 2 = 2.5. -->

<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $output = 0;
        $arr = array_merge($nums1, $nums2);
        sort($arr);
        
        $length = count($arr);
        
        if($length == 1)
        {
            $output = $arr[0];
        }
        else
        {
            if($length % 2 == 0)
            {
                $evenplace = ($length/2) - 1;
                $output = ($arr[$evenplace] + $arr[$length/2]) / 2;
                
            }
            else
            {
                $place = $length / 2;
                $output = $arr[$place];
            }
        }
        
        return $output;
     
    }
}


?>