<?php

function minSubArrayLen(int $target, array $nums): int
{
    $count_nums = count($nums);
    $sum = 0;
    $answer = PHP_INT_MAX;

    for ($i = 0, $j = 0; $i < $count_nums; $i++) {
        $sum += $nums[$i];
        while ($sum >= $target) {
            $answer = min($answer, $i - $j + 1);
            $sum -= $nums[$j];
            $j++;
        }
    }

    return $answer === PHP_INT_MAX ? 0 : $answer;
}
