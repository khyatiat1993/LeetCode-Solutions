<!-- 
Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.

You must write an algorithm with O(log n) runtime complexity.

 

Example 1:

Input: nums = [1,3,5,6], target = 5
Output: 2
Example 2:

Input: nums = [1,3,5,6], target = 2
Output: 1
Example 3:

Input: nums = [1,3,5,6], target = 7
Output: 4
 

Constraints:

1 <= nums.length <= 104
-104 <= nums[i] <= 104
nums contains distinct values sorted in ascending order.
-104 <= target <= 104 -->

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        if($target < $nums[0]){   return 0;   }
        if($target > $nums[count($nums)-1]){   return count($nums);   }
        for($i=0; $i<count($nums); $i++){
            if($target <= $nums[$i]){   return $i;  }
        }
    }
}

SearchSolution = new Solution();
$nums = [1,2,3,4,5];
$target = 5;
echo SearchSolution->searchInsert($nums, $target);
?>
<script>
/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number}
 */
var searchInsert = function(nums, target) {
    for(var i=0; i<nums.length; i++){
        if(target <= nums[i]){   return i;  }
    }
    return nums.length;
};
</script>