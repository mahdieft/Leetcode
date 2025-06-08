<?php

function numSubarrayProductLessThanK(array $nums, int $k): int
{
    if ($k <= 1) {
        return 0;
    }

    $count_nums = count($nums);
    $number_of_subarray = 0;

    $product = 1;
    $left = 0;
    for ($right = 0; $right < $count_nums; $right++) {
        $product *= $nums[$right];

        while ($product >= $k) {
            $product /= $nums[$left];
            $left++;
        }

        $number_of_subarray += $right - $left + 1;
    }

    return $number_of_subarray;
}
