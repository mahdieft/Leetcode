<?php

function moveZeroes(array $nums): array
{
    $count_nums = count($nums);
    $write = 0;
    for ($read = 0; $read < $count_nums; $read++) {
        if ($nums[$read] !== 0) {
            $nums[$write] = $nums[$read];
            $write++;
        }
    }

    while ($write < $count_nums) {
        $nums[$write] = 0;
        $write++;
    }

    return $nums;
}
