<?php

class TreeNode
{
    public int $val;
    public TreeNode|null $left;
    public TreeNode|null $right;

    function __construct(int $val = 0, TreeNode|null $left = null, TreeNode|null $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{
    function checkTree(TreeNode|null $root): bool
    {
        return $root->val === $root->left->val + $root->right->val;
    }
}
