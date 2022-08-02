<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        // loop through string to find non-repeating character if there is any.
        $string = str_split($s);
        $unique_array = array_unique($string);
        $valueCount_ = array_count_values($string);
        /*echo "<br>";
        print_r($valueCount_);
        echo "<br>";
        print_r($unique_array);
        echo "<br>";
        echo count($valueCount_);
        echo "<br>";*/
        if($valueCount_[$unique_array[0]] == 1){
            return 0;
        }else{
            for($i=1; $i < count($valueCount_); $i++){
                $next_element = next($unique_array);
                if($valueCount_[$next_element] == 1){
                    return array_search($next_element, $unique_array);
                }
            }
            return -1;
        }
    }
}
$solution = new Solution();
$s = "loveleetcode";
echo $solution->firstUniqChar($s);
?>