<?php
class Solution {
    function merge(&$nums1, $m, $nums2, $n) {
        $remove_0 = [0];
        $merged_array = array_merge($nums1, $nums2);    // merging array
        $nums1 = array_diff($merged_array, $remove_0);  // Remove 0 from merged array
        $nums_count = count($nums1);                
        $nums_count_total = $m + $n;
        if($nums_count < $nums_count_total){        // Find if we required to add 0 in array
            for($i=0; $i < ($nums_count_total - $nums_count); $i++)
            {
                array_unshift($nums1, 0);
            }
        }
        asort($nums1);      // sorting array
        return $nums1;
    }
}

$MergeSolution = new Solution();
$nums1 = [-1,0,0,3,3,3,0,0,0];    $m = 6;
$nums2 = [1,2,2];                 $n = 3;
//$nums1 = [1,2,3,0,0,0];             $m = 3;
//$nums2 = [2,5,6];                   $n = 3;
print_r($MergeSolution->merge($nums1, $m, $nums2, $n));
/*
$remove_0 = [0];

$nums1 = array_diff($nums1, $remove_0);
$nums2 = array_diff($nums2, $remove_0);

$merged_array = array_merge($nums1, $nums2);
asort($merged_array);
$merged_array = array_slice($merged_array, 0, ($m + $n));
return $merged_array;*/
?>
<script type="text/javascript">
    var merge = function(nums1, m, nums2, n) {
        nums1 = nums1.filter(Number);
        nums2 = nums2.filter(Number);
        var merged_array = nums1.concat(nums2);
        merged_array.sort(function(nums1, nums2){  return nums1 - nums2;     });
        return merged_array;
    };

    var nums1 = [1,2,3,0,0,0];     var m = 3;
    var nums2 = [2,5,6];           var n = 3;
    console.log(merge(nums1, m, nums2, n));
</script>