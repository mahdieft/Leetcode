<?php

class NumArray
{
    private array $nums = [];
    private array $prefix_nums = [];

    function __construct(array $nums)
    {
        $this->nums = $nums;

        $count_nums = count($nums);
        $this->prefix_nums[0] = $nums[0];
        for ($i = 1; $i < $count_nums; $i++) {
            $this->prefix_nums[$i] = $this->prefix_nums[$i - 1] + $nums[$i];
        }
    }

    function sumRange(int $left, int $right): int
    {
        return $this->prefix_nums[$right] - $this->prefix_nums[$left] + $this->nums[$left];
    }
}
