<?php

function twoSum(array $nums, int $target): array
{
    $map = [];
    foreach ($nums as $index => $num) {
        $complement = $target - $num;
        if (key_exists($complement, $map)) {
            return [$index, $map[$complement]];
        }
        $map[$num] = $index;
    }
    return [];
}
