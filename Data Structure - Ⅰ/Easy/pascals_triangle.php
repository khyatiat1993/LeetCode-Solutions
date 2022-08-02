<?php
class Solution{
	function generate($numRows)
	{
		$initial = 1;
		$PasclesTriangle = [[$initial]];
		for($i=1;$i<$numRows;$i++){
			for($j=0;$j<=$i;$j++){
				if ($j == 0 || $i == 0){
					$PasclesTriangle[$i][$j] = $initial;
				}else{
					$initial_ = $initial_ * ($i - $j + $initial) / $j;
					$PasclesTriangle[$i][$j] = $initial_;
				}
			}
		}
		return $PasclesTriangle;
	}
}
$solution = new Solution();
$numRows = 1;
//print_r($solution->generate($numRows));
?>
<div id="temp"></div>
<script type="text/javascript">
/**
 * @param {number} numRows
 * @return {number[][]}
 */
var generate = function(numRows) {
    
    var Initial = 1;
	var PasclesTriangle = [[Initial]];
	for(var i=1; i < numRows; i++){
		var PasclesTriangle_ = [Initial];
		for(var j=1; j < i; j++){
			PasclesTriangle_.push(PasclesTriangle[i-1][j-1] + PasclesTriangle[i-1][j]);
		}
		PasclesTriangle_.push(Initial);
		PasclesTriangle.push(PasclesTriangle_);
	}
	return PasclesTriangle;
};
var numRows = 5;
document.getElementById('temp').innerHTML = generate(numRows);
console.log(generate(numRows));
</script>