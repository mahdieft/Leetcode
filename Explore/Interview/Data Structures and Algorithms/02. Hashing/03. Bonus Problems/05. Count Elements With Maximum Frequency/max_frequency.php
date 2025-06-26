<?php

function maxFrequencyElements(array $nums): int
{
    $max_frequency = 0;
    $frequency_map = [];

    foreach ($nums as $num) {
        if (!key_exists($num, $frequency_map)) {
            $frequency_map[$num] = 0;
        }
        $frequency_map[$num]++;
        $max_frequency = max($max_frequency, $frequency_map[$num]);
    }

    $answer = 0;
    foreach ($frequency_map as $num => $frequency) {
        if ($frequency === $max_frequency) {
            $answer += $frequency;
        }
    }

    return $answer;
}
