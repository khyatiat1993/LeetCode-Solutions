<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $length = count($nums);
        $k = ($k % $length);    
        $end = array_splice($nums,$length - $k);
        array_splice($nums,0,0,$end);
    }
}
rotateSolution = new Solution();
print_f(rotateSolution($nums, $k));
?>
<script>
var nums = [1,2,3,4,5,6,7];
var k = 3;
var output = "";
var temp = nums.length-(k);
//for(var i=0; i < k; i++){
  var elements_to_replace = nums.slice(temp,nums.length);
  elements_to_replace.reverse();
  nums.splice(temp,k);
  nums.splice(0,0,elements_to_replace);
//}
document.getElementById("demo").innerHTML = nums;


/**
 * @param {number[]} nums
 * @param {number} k
 * @return {void} Do not return anything, modify nums in-place instead.
 */
var rotate = function(nums, k) {

	if(k > nums.length){
		var element = nums.length-1;
	    for(var i=0; i < k; i++){
	        nums.unshift(nums[element]);
	        nums.pop(nums[element]);
	    }
	}else{
	    var temp = nums.length-(k);
	    var elements_to_replace = nums.slice(temp,nums.length);
	    nums.splice(temp,k);
	    elements_to_replace.reverse();
	    for(var i=0; i < elements_to_replace.length; i++){
	        nums.unshift(elements_to_replace[i])
	    }
	}
/*
    nums.unshift(...nums.splice(nums.length - (k % nums.length)));
    -----------------------------------------------------------------
    const len = nums.length;
    k = (k % len);    
    let end = nums.splice(len - k);
    nums.splice(0,0,...end);
*/
	return nums;
};
var nums = [1,2,3,4,5,6,7];
var k = 3;
console.log(rotate(nums,k));
</script>