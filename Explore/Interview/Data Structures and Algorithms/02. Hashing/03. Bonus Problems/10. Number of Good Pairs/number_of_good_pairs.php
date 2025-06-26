<?php

function numIdenticalPairs(array $nums): int
{
    $seen = [];
    $answer = 0;

    foreach ($nums as $num) {
        if (!key_exists($num, $seen)) {
            $seen[$num] = 0;
        }
        $answer += $seen[$num];
        $seen[$num]++;
    }

    return $answer;
}
