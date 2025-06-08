<?php

function findLength(array $nums, int $k): int
{
    $max = 0;

    $count_nums = count($nums);
    $left = 0;
    $sum = 0;
    for ($right = 0; $right < $count_nums; $right++) {
        $sum += $nums[$right];

        while ($sum > $k) {
            $sum -= $nums[$left];
            $left++;
        }

        $max = max($max, $right - $left + 1);
    }

    return $max;
}
