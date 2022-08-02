<?php
class Solution {
	function search($nums, $target){
		$Search_res = array_search($target,$nums,true);
		if(in_array($target, $nums)){
			return $Search_res;
		}else{
			return -1;
		}
	}
}
/*
$solution = new Solution();
$nums = [5];
$target = 5;
echo $solution->search($nums, $target);*/
?>