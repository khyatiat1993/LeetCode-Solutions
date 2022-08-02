<!-- 
Write an efficient algorithm that searches for a value target in an m x n integer matrix matrix. This matrix has the following properties:

Integers in each row are sorted from left to right.
The first integer of each row is greater than the last integer of the previous row.
 

Example 1:


Input: matrix = [[1,3,5,7],[10,11,16,20],[23,30,34,60]], target = 3
Output: true
Example 2:


Input: matrix = [[1,3,5,7],[10,11,16,20],[23,30,34,60]], target = 13
Output: false
 

Constraints:

m == matrix.length
n == matrix[i].length
1 <= m, n <= 100
-104 <= matrix[i][j], target <= 104
 -->
<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target) {
        // loop through all the sub array to get final array which holds the target.
        for($i=0; $i < count($matrix); $i++){
            
            $length = count($matrix[$i]);
            $start = $matrix[$i][0];
            $end = $matrix[$i][$length-1];
            
            if($target >= $start && $target <= $end){
                
                if($target == $start || $target == $end){    return 'true';    }
                
                // loop through to check if target exists
                for($j=1; $j < $length; $j++){
                  	if($matrix[$i][$j] == $target){   return 'true';     }
                }
            }
        }
        return 'false';
    }
}

$TargetExist = new Solution();
$matrix = [[-8,-7,-5,-3,-3,-1,1],[2,2,2,3,3,5,7],[8,9,11,11,13,15,17],[18,18,18,20,20,20,21],[23,24,26,26,26,27,27],[28,29,29,30,32,32,34]];
$target = -5;
echo $TargetExist->searchMatrix($matrix, $target);
?>