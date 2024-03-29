<!-- Input: strs = ["alic3","bob","3","4","00000"]
Output: 5
Explanation: 
- "alic3" consists of both letters and digits, so its value is its length, i.e. 5.
- "bob" consists only of letters, so its value is also its length, i.e. 3.
- "3" consists only of digits, so its value is its numeric equivalent, i.e. 3.
- "4" also consists only of digits, so its value is 4.
- "00000" consists only of digits, so its value is 0.
Hence, the maximum value is 5, of "alic3". -->

<?php
class Solution {

    /**
     * @param String[] $strs
     * @return Integer
     */
    function maximumValue($strs) {
        $length = count($strs);
        $result = 0;
        $max=0;
        for($i=0; $i<$length; $i++)
        {
           if( is_numeric($strs[$i]))
           {
               $result = intval($strs[$i]);
           }
           else
           {
               $result = strlen($strs[$i]);
           }

           if($result > $max)
           {
               $max = $result;
           }
        }

        return $max;
        
    }
}

?>