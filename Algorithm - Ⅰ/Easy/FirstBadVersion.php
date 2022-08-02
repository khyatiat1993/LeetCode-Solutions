<?php
/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {

    	$index = -1;
    	$low = 1;$high = $n;

    	while($low <= $high){
    		$mid = $low + (($high - $low)/2);
    		
    		if(VersionControl($mid)){
    			$index = $mid
    			$high = $mid - 1;
    		}else{
    			$low = $mid + 1;
    		}
    	}
        return $index;
    }
}
?>
<script type="text/javascript">
var solution = function(isBadVersion) {

    return function(n) {
        let index = -1;
        let low = 1, high = n;
        
        while(low <= high) {
            const mid = low + parseInt((high - low) / 2);
            
            if(isBadVersion(mid)) {
                index = mid;
                high = mid - 1;
            }
            else
                low = mid + 1;
        }
        
        return index;
    };
};
</script>