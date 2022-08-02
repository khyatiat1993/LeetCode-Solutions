<!-- 
Determine if a 9 x 9 Sudoku board is valid. Only the filled cells need to be validated according to the following rules:

Each row must contain the digits 1-9 without repetition.
Each column must contain the digits 1-9 without repetition.
Each of the nine 3 x 3 sub-boxes of the grid must contain the digits 1-9 without repetition.
Note:

A Sudoku board (partially filled) could be valid but is not necessarily solvable.
Only the filled cells need to be validated according to the mentioned rules.
 

Example 1:


Input: board = 
[["5","3",".",".","7",".",".",".","."]
,["6",".",".","1","9","5",".",".","."]
,[".","9","8",".",".",".",".","6","."]
,["8",".",".",".","6",".",".",".","3"]
,["4",".",".","8",".","3",".",".","1"]
,["7",".",".",".","2",".",".",".","6"]
,[".","6",".",".",".",".","2","8","."]
,[".",".",".","4","1","9",".",".","5"]
,[".",".",".",".","8",".",".","7","9"]]
Output: true
Example 2:

Input: board = 
[["8","3",".",".","7",".",".",".","."]
,["6",".",".","1","9","5",".",".","."]
,[".","9","8",".",".",".",".","6","."]
,["8",".",".",".","6",".",".",".","3"]
,["4",".",".","8",".","3",".",".","1"]
,["7",".",".",".","2",".",".",".","6"]
,[".","6",".",".",".",".","2","8","."]
,[".",".",".","4","1","9",".",".","5"]
,[".",".",".",".","8",".",".","7","9"]]
Output: false
Explanation: Same as Example 1, except with the 5 in the top left corner being modified to 8. Since there are two 8's in the top left 3x3 sub-box, it is invalid.
 

Constraints:

board.length == 9
board[i].length == 9
board[i][j] is a digit 1-9 or '.'.
 -->
<?php
class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        for($i=0; $i < count($board); $i++){
            for($j=0; $j < count($board); $j++){
            	if($board[$i][$j] != '.'){
            		$tempj = "";
	                $tempj = $board[$i][$j];
	                $board[$i][$j] = "0";
	                
	                if(array_search($tempj, $board[$i])){
	                    return false;
	                }
	                else{
	                	$board[$i][$j] =  $tempj;
	                }
	                $tempI2 = $tempI3 = $tempJ2 = $tempJ3 = "";

	                if($i == 0 || $i == 3 || $i == 6){    	$tempI2 = $i + 1;	$tempI3 = $i + 2;      }
	                if($i == 1 || $i == 4 || $i == 7){    	$tempI2 = $i - 1;	$tempI3 = $i + 1;      }
	                if($i == 2 || $i == 5 || $i == 8){    	$tempI2 = $i - 2;	$tempI3 = $i - 1;      }

	                if($j == 0 || $j == 3 || $j == 6){    	$tempJ2 = $j + 1;	$tempJ3 = $j + 2;      }
	                if($j == 1 || $j == 4 || $j == 7){    	$tempJ2 = $j - 1;	$tempJ3 = $j + 1;      }
	                if($j == 2 || $j == 5 || $j == 8){    	$tempJ2 = $j - 2;	$tempJ3 = $j - 1;      }

	                if($tempI2 >= 0 && $tempI3 >= 0 && $tempJ2 >= 0 && $tempJ3 >= 0){
	                	if($board[$tempI2][$tempJ2] == $tempj || $board[$tempI2][$tempJ3] == $tempj || $board[$tempI3][$tempJ2] == $tempj || $board[$tempI3][$tempJ3] == $tempj){
	                		return false;
	                	}
	                }
	                for($k = 0 ; $k<9; $k++){
	                	if($board[$i][$j] == $board[$k][$j] && ($i !== $k)){
	                		return false;
	                	}
	                }
            	}
            }
        }
        return true;
    }
}
$solution = new Solution();
$board = [[".","4",".",".",".",".",".",".","."],[".",".","4",".",".",".",".",".","."],[".",".",".","1",".",".","7",".","."],[".",".",".",".",".",".",".",".","."],[".",".",".","3",".",".",".","6","."],[".",".",".",".",".","6",".","9","."],[".",".",".",".","1",".",".",".","."],[".",".",".",".",".",".","2",".","."],[".",".",".","8",".",".",".",".","."]];

//[[".","8","7","6","5","4","3","2","1"],["2",".",".",".",".",".",".",".","."],["3",".",".",".",".",".",".",".","."],["4",".",".",".",".",".",".",".","."],["5",".",".",".",".",".",".",".","."],["6",".",".",".",".",".",".",".","."],["7",".",".",".",".",".",".",".","."],["8",".",".",".",".",".",".",".","."],["9",".",".",".",".",".",".",".","."]];

//[["5","3",".",".","7",".",".",".","."],["6",".",".","1","9","5",".",".","."],[".","9","8",".",".",".",".","6","."],["8",".",".",".","6",".",".",".","3"],["4",".",".","8",".","3",".",".","1"],["7",".",".",".","2",".",".",".","6"],[".","6",".",".",".",".","2","8","."],[".",".",".","4","1","9",".",".","5"],[".",".",".",".","8",".",".","7","9"]];

if($solution->isValidSudoku($board)){
	echo 'true';
}else{
	echo 'false';
}
//echo "<br/>";
//echo $solution->isValidSudoku($board);
?>