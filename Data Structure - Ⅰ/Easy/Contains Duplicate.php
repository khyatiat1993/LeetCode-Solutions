<?php
class Solution {
	function ContainsDuplicate($nums){
		$results = 'false';
		for($i=0; $i<count($nums); $i++){
			$number = $nums[$i];
			unset($nums[$i]);
			if(in_array($number, $nums)){
				$results = 'true';
				return $results;
			}
		}
		return $results;
	}
}

	$nums = [274,-735,-911,80,454,-511,922,-775,985,-669,-463,-896,-629,-586,910,-361,288,-375,88,556,-578,-406,-87,25,377,-635,-445,-289,646,-962,-487,-924,-968,-962,502,36,129,-611,54,-27,-496,915,-84,-782,349,678,332,-114,345,14,710,710,821,-194,988,38,-369,409,-559,-529,-298,-593,705];
	$solution = new Solution();
	echo $solution->ContainsDuplicate($nums);
?>
<script>
	// function to check if array of integers have duplicate value or all valus are distinct.
	function ContainsDuplicate(nums){
		//return new Set(nums).size !== nums.length;
		var output = false;
	    for(var i=0; i<nums.length; i++){
	        if(nums.includes(nums[i])){
	        	var x_value = nums[i];
	            const index = nums.indexOf(x_value);
	            if (index > -1) { // only splice array when item is found
	                nums.splice(index, 1); // 2nd parameter means remove one item only
	                if(nums.includes(x_value))
                    {
                        output = true;
                        return output;
                    }
	            }
	        }
	    }
	    return output;
	}
	$array_of_integer = [274,-735,-911,80,454,-511,922,-775,985,-669,-463,-896,-629,-586,910,-361,288,-375,88,556,-578,-406,-87,25,377,-635,-445,-289,646,-962,-487,-924,-968,-962,502,36,129,-611,54,-27,-496,915,-84,-782,349,678,332,-114,345,14,710,710,821,-194,988,38,-369,409,-559,-529,-298,-593,705];
	console.log(ContainsDuplicate($array_of_integer));
</script>