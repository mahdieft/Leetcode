<?php

function findMaxLength(array $nums): int
{
    $count_nums = count($nums);
    $max_length = 0;
    $count = 0;
    $map = [
        0 => -1,
    ];

    for ($i = 0; $i < $count_nums; $i++) {
        $count += $nums[$i] === 1 ? 1 : -1;

        if (key_exists($count, $map)) {
            $max_length = max($max_length, $i - $map[$count]);
        } else {
            $map[$count] = $i;
        }
    }
    return $max_length;
}
