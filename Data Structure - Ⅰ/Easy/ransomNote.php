<!-- 
Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from magazine and false otherwise.

Each letter in magazine can only be used once in ransomNote.

 

Example 1:

Input: ransomNote = "a", magazine = "b"
Output: false
Example 2:

Input: ransomNote = "aa", magazine = "ab"
Output: false
Example 3:

Input: ransomNote = "aa", magazine = "aab"
Output: true
 

Constraints:

1 <= ransomNote.length, magazine.length <= 105
ransomNote and magazine consist of lowercase English letters.
-->
<?php
class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {

        $ransomNote_arr = str_split($ransomNote);
        $magazine_arr = str_split($magazine);

        $ransomNote_array = array_unique($ransomNote_arr);
        $ransomNote_valueCount_ = array_count_values($ransomNote_arr);

        $magazine_array = array_unique($magazine_arr);
        $magazine_valueCount_ = array_count_values($magazine_arr);

        $length = count($magazine_valueCount_);
        $canConstruct = 0;
        for($i=0; $i < $length; $i++){

            if($i==0){
                $next_r = current($ransomNote_array);
            }else{
                $next_r = next($ransomNote_array);
            }
            if($next_r != ""){
                if(isset($magazine_valueCount_[$next_r]) && isset($ransomNote_valueCount_[$next_r]) && $magazine_valueCount_[$next_r] >= $ransomNote_valueCount_[$next_r]){
                    $canConstruct++;
                }
            }
        }
        if(count($ransomNote_array) == $canConstruct){
            return true;
        }
        return 'false';
    }
}

$solution = new Solution();
$ransomNote = "aa";
$magazine = "aab";
echo $solution->canConstruct($ransomNote, $magazine);
?>