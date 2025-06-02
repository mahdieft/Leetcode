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
    function invertTree(TreeNode|null $root): TreeNode|null
    {
        if (!$root) {
            return $root;
        }

        $this->invertTree($root->left);
        $this->invertTree($root->right);

        $temp = $root->left;
        $root->left = $root->right;
        $root->right = $temp;

        return $root;
    }
}
