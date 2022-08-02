<!-- 
21. Merge Two Sorted Lists
Easy

13778

1241

Add to List

Share
You are given the heads of two sorted linked lists list1 and list2.

Merge the two lists in a one sorted list. The list should be made by splicing together the nodes of the first two lists.

Return the head of the merged linked list.

 

Example 1:


Input: list1 = [1,2,4], list2 = [1,3,4]
Output: [1,1,2,3,4,4]
Example 2:

Input: list1 = [], list2 = []
Output: []
Example 3:

Input: list1 = [], list2 = [0]
Output: [0]
 

Constraints:

The number of nodes in both lists is in the range [0, 50].
-100 <= Node.val <= 100
Both list1 and list2 are sorted in non-decreasing order.
 -->

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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        if($list1 === null){    return $list2;    }
        if($list2 === null){    return $list1;    }
        
        $ListNode = new ListNode(-1);
        $cur = $ListNode;
        
        while($list1 != null && $list2 != null){
            $cur->next = $list1->val <= $list2->val ? $list1 : $list2;
            $cur = $cur->next;
            if($cur->val == $list1->val) {
                $list1 = $list1->next;
            } else {
                $list2 = $list2->next;
            }
        }
        $cur->next = $list1 != null ? $list1 : $list2;
        return $ListNode->next;
    }
}
?>