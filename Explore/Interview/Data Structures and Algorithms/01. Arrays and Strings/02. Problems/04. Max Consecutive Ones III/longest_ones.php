<?php

function longestOnes(array $nums, int $k): int
{
    $count_nums = count($nums);

    $flip_count = 0;
    $length = 0;
    $left = 0;
    for ($right = 0; $right < $count_nums; $right++) {
        if ($nums[$right] === 0) {
            $flip_count++;
        }

        while ($flip_count > $k) {
            if ($nums[$left] === 0) {
                $flip_count--;
            }
            $left++;
        }

        $length = max($length, $right - $left + 1);
    }

    return $length;
}
