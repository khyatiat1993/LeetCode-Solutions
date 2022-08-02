<?php
class Solution{
	function matrixReshape($mat, $r, $c){

		$row = count($mat);
		$col = count($mat[0]);
		$rows = 1;
		$column = 1;

		if($row == $r || $r*$c !== $row*$col){	return $mat;	}
		
		foreach ($mat as $mat_replica) {
			foreach($mat_replica as $data){
				
				$ReshapedMatrix[$rows][$column] = $data;
				$column++;
                
                if($column > $c){
                    $column = 1;
                    $rows++;
                }
			}
		}
		return $ReshapedMatrix;
	}
}
$solution = new Solution();
$mat = [[1,2],[3,4]];	// represents matrix
$r = 4;		// reprresents row
$c = 1;		// represents column
print_r($solution->matrixReshape($mat, $r, $c));
?>

<script type="text/javascript">
	var matrixReshape = function(mat, r, c){
		if(r < 1 || c < 1 || r*c !== mat.length*mat[0].length){
			return mat;
		}		
		var mat_replica = mat.flat();
		//var enough = mat_replica.length;
		var ReshapedMatrix = [];

		while(r--){
			ReshapedMatrix.push(mat_replica.slice(ReshapedMatrix.length * c, ReshapedMatrix.length * c + c));
		}
		/*
		var start = 0;
		var end = enough/r;
		var get_position = end;
		
		for(var k=0; k<r; k++){
			if(mat_replica.slice(start, end) != ''){					
				ReshapedMatrix[k] = mat_replica.slice(start, end);
				start = end;
				end = start + get_position;	
			}
		}
		*/		
		return ReshapedMatrix;
	};
	var mat = [[1,2,3,4],[5,6,7,8],[9,10,11,12],[13,14,15,16],[17,18,19,20]];
	var r = 42;
	var c = 5;
	console.log(matrixReshape(mat, r, c));
</script>