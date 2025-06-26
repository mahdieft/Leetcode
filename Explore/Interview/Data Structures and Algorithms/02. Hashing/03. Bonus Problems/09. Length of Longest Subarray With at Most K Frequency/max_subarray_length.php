<?php

function maxSubarrayLength(array $nums, int $k): int
{
    $max = 0;

    $seen = [];
    $count_nums = count($nums);
    $left = 0;
    for ($right = 0; $right < $count_nums; $right++) {
        if (!key_exists($nums[$right], $seen)) {
            $seen[$nums[$right]] = 0;
        }
        $seen[$nums[$right]]++;

        while ($seen[$nums[$right]] > $k) {
            $seen[$nums[$left]]--;
            if ($seen[$nums[$left]] === 0) {
                unset($seen[$nums[$left]]);
            }
            $left++;
        }

        $max = max($max, $right - $left + 1);
    }

    return $max;
}
