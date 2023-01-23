<!-- We define the usage of capitals in a word to be right when one of the following cases holds:

All letters in this word are capitals, like "USA".
All letters in this word are not capitals, like "leetcode".
Only the first letter in this word is capital, like "Google".
Given a string word, return true if the usage of capitals in it is right. -->

<?php

class DetectCapital {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        if(ctype_upper($word[0]) && ctype_lower(substr($word, 1)))
        {
            return true;
        }
        else if(ctype_upper($word))
        {
            return true;
        }
        else if(ctype_lower($word))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
}

?>