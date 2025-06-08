<?php

function waysToSplitArray(array $nums): int
{
    $count_nums = count($nums);
    for ($i = 1; $i < $count_nums; $i++) {
        $nums[$i] += $nums[$i - 1];
    }

    $answer = 0;
    for ($i = 0; $i < $count_nums - 1; $i++) {
        if ($nums[$i] >= $nums[$count_nums - 1] - $nums[$i]) {
            $answer++;
        }
    }

    return $answer;
}
