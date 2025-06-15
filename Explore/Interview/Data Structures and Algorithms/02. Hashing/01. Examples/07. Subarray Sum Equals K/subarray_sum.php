<?php

function subarraySum(array $nums, int $k): int
{
    $answer = 0;
    $prefix_sum_map = [0 => 1];
    $current_sum = 0;

    foreach ($nums as $num) {
        $current_sum += $num;
        if (key_exists($current_sum - $k, $prefix_sum_map)) {
            $answer += $prefix_sum_map[$current_sum - $k];
        }

        if (!key_exists($current_sum, $prefix_sum_map)) {
            $prefix_sum_map[$current_sum] = 0;
        }
        $prefix_sum_map[$current_sum]++;
    }

    return $answer;
}
