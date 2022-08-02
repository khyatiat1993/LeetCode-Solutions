<!-- 
Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.

Note that you must do this in-place without making a copy of the array.

 

Example 1:

Input: nums = [0,1,0,3,12]
Output: [1,3,12,0,0]
Example 2:

Input: nums = [0]
Output: [0]
 

Constraints:

1 <= nums.length <= 104
-231 <= nums[i] <= 231 - 1
 

Follow up: Could you minimize the total number of operations done?
 -->
<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $tmp = array_count_values($nums);
        $cnt = $tmp[0];
        $nums = array_diff($nums, [0]);
        for($i=0;$i<$cnt;$i++){
            array_push($nums, 0);
        }
    }
    return $num;
}
$solution = new Solution();
print_r($solution->moveZeroes($nums));
?>
<script type="text/javascript">
/**
 * @param {number[]} nums
 * @return {void} Do not return anything, modify nums in-place instead.
 */
var moveZeroes = function(nums) {
	  
};
</script>