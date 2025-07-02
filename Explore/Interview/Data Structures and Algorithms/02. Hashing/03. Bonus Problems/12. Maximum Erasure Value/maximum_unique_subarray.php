<?php

function maximumUniqueSubarray(array $nums): int
{
    $seen = [];
    $count_nums = count($nums);
    $current = 0;
    $left = 0;
    $answer = 0;

    for ($right = 0; $right < $count_nums; $right++) {
        $current += $nums[$right];
        if (!key_exists($nums[$right], $seen)) {
            $seen[$nums[$right]] = 1;
        } else {
            $seen[$nums[$right]]++;
        }

        while ($seen[$nums[$right]] > 1) {
            $current -= $nums[$left];
            $seen[$nums[$left]]--;
            $left++;
        }

        $answer = max($answer, $current);
    }

    return $answer;
}

echo maximumUniqueSubarray([5, 2, 1, 2, 5, 2, 1, 2, 5]);
