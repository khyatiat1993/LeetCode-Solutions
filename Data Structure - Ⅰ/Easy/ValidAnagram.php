<!-- 
242. Valid Anagram
Easy

6355

234

Add to List

Share
Given two strings s and t, return true if t is an anagram of s, and false otherwise.

An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.

 

Example 1:

Input: s = "anagram", t = "nagaram"
Output: true
Example 2:

Input: s = "rat", t = "car"
Output: false
 

Constraints:

1 <= s.length, t.length <= 5 * 104
s and t consist of lowercase English letters.
 

Follow up: What if the inputs contain Unicode characters? How would you adapt your solution to such a case?
 -->

<?php
class Solution {
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $s_characters = count_chars($s,1);
        $t_characters = count_chars($t,1);
        if(count($s_characters) !== count($t_characters)){
            return false;
        }
        foreach ($s_characters as $key=>$item) {
            if (!array_key_exists($key, $t_characters)) {
                return false;
            }
            
            if ($item !== $t_characters[$key]) {
                return false;
            }
        }        
        return true;
    }
}

$solution = new Solution();
echo $solution->isAnagram($s, $t);
?>