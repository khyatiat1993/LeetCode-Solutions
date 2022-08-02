<?php
/*
Given two strings s1 and s2, return true if s2 contains a permutation of s1, or false otherwise.

In other words, return true if one of s1's permutations is the substring of s2.

 

Example 1:

Input: s1 = "ab", s2 = "eidbaooo"
Output: true
Explanation: s2 contains one permutation of s1 ("ba").
Example 2:

Input: s1 = "ab", s2 = "eidboaoo"
Output: false
 

Constraints:

1 <= s1.length, s2.length <= 104
s1 and s2 consist of lowercase English letters.
*/
class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkInclusion($s1, $s2){
        $s1 = str_split($s1); 
        $s2 = str_split($s2);
        $s1_c_v = array_count_values($s1);
        for($i=0;$i<=count($s2)-count($s1);$i++){
            $arr = array_slice($s2,$i,count($s1));
            $arr_c_v = array_count_values($arr);
            if(array_diff_assoc($s1_c_v,$arr_c_v)==null){
                return 'true';
            }
        }
        return 'false';
    }
}
$solution = new Solution();
$s1 = "ab";
$s2 = "eidboaoo";
echo $solution->checkInclusion($s1, $s2);
?>