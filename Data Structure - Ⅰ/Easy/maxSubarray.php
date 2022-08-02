<?php
class Solution {
    function maxSubArray($nums) {
        $sub_array_sum = PHP_INT_MIN;	            // sub_array_sum total
        $sum = 0;	                                // Sum of current sub_array
        $sub_array_sum_minus = PHP_INT_MIN;         // max_sub array total if all the values are in minus
                                                
        for($i=0; $i < count($nums); $i++)          // adding loop to find max sub array value
        {
        	$sum += $nums[$i];
            if($sum > $sub_array_sum_minus){
                $sub_array_sum_minus = $sum;  
            }
        	if($sum < 0){	$sum = 0;	}
        	if($sum > $sub_array_sum){
        		$sub_array_sum = $sum;
        	}
        }
        if($sub_array_sum == 0){
            $sub_array_sum = $sub_array_sum_minus;
        }
        return $sub_array_sum;
    }
}

/*  $nums = [1,2,3,1];
    $solution = new Solution();
    echo $solution->maxSubArray($nums);*/
?>
<script>
var maxSubArray = function(nums) {
    var sub_array_sum = Number.MIN_SAFE_INTEGER;           //  var to save sub array
    var sum = 0;                                       //  var to save sub array value sum
    var sub_array_minus = Number.MIN_SAFE_INTEGER;     //  var to save sub array sum for minus value

    for(var i=0; i < nums.length; i++){
        sum += nums[i];
        if(sum > sub_array_minus){   sub_array_minus = sum;   }
        if(sum < 0){    sum = 0;     }
        if(sum > sub_array_sum){
            sub_array_sum = sum;
        }
    }
    if(sub_array_sum == 0){
        sub_array_sum = sub_array_minus;
    }
    return sub_array_sum;
};
/*
var nums = [1,2,3,1];
console.log(maxSubArray(nums));*/
</script>