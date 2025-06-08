<?php

function findBestSubarray(array $nums, int $k): int
{
    $count_nums = count($nums);

    $largest_sum = 0;
    for ($i = 0; $i < $k; $i++) {
        $largest_sum += $nums[$i];
    }

    $current_sum = $largest_sum;
    for ($i = $k; $i < $count_nums; $i++) {
        $current_sum += $nums[$i] - $nums[$i - $k];
        $largest_sum = max($largest_sum, $current_sum);
    }

    return $largest_sum;
}
