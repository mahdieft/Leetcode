<?php

function numSubarraysWithSum(array $nums, int $goal): int
{
    $current = 0;
    $map = [0 => 1];
    $answer = 0;

    foreach ($nums as $num) {
        $current += $num;
        if (key_exists($current - $goal, $map)) {
            $answer += $map[$current - $goal];
        }
        if (!key_exists($current, $map)) {
            $map[$current] = 0;
        }
        $map[$current]++;
    }

    return $answer;
}
