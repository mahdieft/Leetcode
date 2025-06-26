<?php

function sumOfUnique(array $nums): int
{
    $sum = 0;

    $counter = [];
    foreach ($nums as $num) {
        if (!key_exists($num, $counter)) {
            $counter[$num] = 0;
        }
        $counter[$num]++;
    }

    foreach ($counter as $num => $count) {
        if ($count === 1) {
            $sum += $num;
        }
    }

    return $sum;
}
