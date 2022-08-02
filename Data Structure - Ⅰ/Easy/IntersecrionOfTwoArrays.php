<?php
class Solution {
    function intersect($nums1, $nums2) {
        $intersect_array = [];

        if(count($nums1) < count($nums2)){
            $loop_ending = count($nums1);
            $loop_through1 = $nums2;
            $loop_through2 = $nums1;
        }
        else{
            $loop_ending = count($nums2);
            $loop_through1 = $nums1;
            $loop_through2 = $nums2;
        }

        for($i=0; $i<$loop_ending;$i++){
            if(in_array($loop_through2[$i], $loop_through1)){
                $intersect_array[] = $loop_through2[$i];
                if (($key = array_search($loop_through2[$i], $loop_through1)) !== false) {
                    unset($loop_through1[$key]);
                }
            }
        }
        return $intersect_array;
    }
}

$IntersectSolution = new Solution();
$nums1 = [1,2,2,1];
$nums2 = [2,2];
print_r($IntersectSolution->intersect($nums1, $nums2));
?>