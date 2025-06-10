<?php

function minStartValue(array $nums): int
{
    $sum = 0;
    $min = $nums[0];
    foreach ($nums as $num) {
        $sum += $num;
        $min = min($min, $sum);
    }

    return $min >= 1 ? 1 : 1 - $min;
}
