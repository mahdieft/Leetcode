<?php

function largestUniqueNumber(array $nums): int
{
    $frequency_map = [];
    foreach ($nums as $num) {
        if (!key_exists($num, $frequency_map)) {
            $frequency_map[$num] = 0;
        }
        $frequency_map[$num]++;
    }

    $largest_unique_number = -1;
    foreach ($frequency_map as $number => $frequency) {
        if ($frequency === 1 && $number > $largest_unique_number) {
            $largest_unique_number = $number;
        }
    }

    return $largest_unique_number;
}
