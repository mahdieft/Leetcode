<?php

function numberOfSubarrays(array $nums, int $k): int
{
    $counts = [0 => 1];
    $answer = 0;
    $current = 0;

    foreach ($nums as $num) {
        $current += $num % 2;

        if (key_exists($current - $k, $counts)) {
            $answer += $counts[$current - $k];
        }

        if (!key_exists($current, $counts)) {
            $counts[$current] = 0;
        }
        $counts[$current]++;
    }

    return $answer;
}
