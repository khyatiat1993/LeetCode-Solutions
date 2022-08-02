<?php
class Solution {
	function twoSum($nums, $target){
		$twoNumbersArray = [];
		if(count($nums) < 2){	return false;	}
		for($i=0; $i < count($nums); $i++){
			for($j=($i+1); $j < count($nums); $j++){
				if(($nums[$i] + $nums[$j]) == $target){
					$twoNumbersArray = [$i, $j];
				}
			}
		}
		return $twoNumbersArray;
	}
}

/*	$nums = [2,7,11,15];
	$target = 9;
	$solution = new Solution();
	print_r($solution->twoSum($nums, $target));*/
?>
<script>
	var twoSum = function(nums, target){
		var twoNumbersArray = [];
		if(nums.length < 2){	return false;	}
		for(var i=0; i < (nums.length); i++){
			for(var j=(i+1); j < (nums.length); j++){
					if((nums[i] + nums[j]) == target){
						twoNumbersArray = [i, j];
					}
			}
		}
		return twoNumbersArray;
	};
/*	var nums = [0,4,3,0];
	var target = 0;
	console.log(twoSum(nums, target));*/
</script>