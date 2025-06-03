<?php

class ListNode
{
    public int $val;
    public ListNode|null $next;

    function __construct(int $val = 0, ListNode|null $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    function middleNode(ListNode|null $head): ListNode|null
    {
        $slow = $fast = $head;
        while ($fast && $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        return $slow;
    }
}
