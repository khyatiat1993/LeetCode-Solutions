<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $string = str_split($s);
        if(count($string) == 0 || $s == ""){  return 0;     }
        else if(str_replace(' ','',$s) == '' || count($string) == 1){    return 1;  }
        $arr = [];
        $arr_count = 0;
        $max_val = 0;
        for($i=0; $i < count($string); $i++){
            if(!(in_array($string[$i],$arr))){
                $arr[] =  $string[$i];
                $arr_count++;
            }else if(in_array($string[$i],$arr)){                
                array_splice($arr,0,(array_search($string[$i], $arr)+1));
                $arr[] =  $string[$i];
                $arr_count = count($arr);
            }else{
                $arr_count = 1;
                unset($arr);
                $arr = array();
                $arr = [$string[$i]];
            }
            if($arr_count > $max_val){  $max_val = $arr_count;    }
        }
        return $max_val;
    }
}
$solution = new Solution();
$s= "";
echo $solution->lengthOfLongestSubstring($s);
?>