<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        foreach(explode(" ",$s) as $w){
            $final_string .= strrev($w)." ";
        }
        return trim($final_string);
    }
}
?>
<script type="text/javascript">
	var String = "";
    var String_arr = s.split(' ');
    
    for(var i=0; i<String_arr.length; i++){
        String += String_arr[i].split("").reverse().join("") + " ";
    }
    return String;
    //return s.split(' ').map(String=>String.split('').reverse().join('')).join(' ');
</script>