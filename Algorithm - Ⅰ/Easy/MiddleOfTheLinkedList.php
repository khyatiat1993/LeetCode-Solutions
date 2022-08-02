<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        
        while($head->next){
            
            $new_head = new ListNode($head->val);
            // removing first element
            $head = $head->next;
            
            // removing last element
            $tmp = $new_head;
            while($head->next){
                $new_node = new ListNode($head->val);
                $new_head->next = $new_node;
                $new_head = $new_head->next;
                $head=$head->next;
            }
            
            //adding at the beginning start the last removing element to new list
            $new_node = new ListNode($head->val);
            if(isset($result)){
                $new_node->next = $result;
            }
            $result = $new_node;
            
            $head = $tmp->next;
        }
        
        // only works when count nodes is odd just check any node rests will be added our new list at the beginning
        if($head){
            $new_node = new ListNode($head->val);
            if(isset($result)){
                $new_node->next = $result;
            }
            $result = $new_node;
        }
        
        return $result;
    }
}
$solution = new Solution();
$head = [1,2,3,4,5,6,7,8,9];
print_r($solution->middleNode($head));
?>
<script type="text/javascript">
/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} head
 * @return {ListNode}
 */
var middleNode = function(head) {
    let slowRunner = head,
      fastRunner = head;
    while (fastRunner && fastRunner.next) {
        slowRunner = slowRunner.next;
        fastRunner = fastRunner.next.next;
    }
    return slowRunner; 
};
</script>