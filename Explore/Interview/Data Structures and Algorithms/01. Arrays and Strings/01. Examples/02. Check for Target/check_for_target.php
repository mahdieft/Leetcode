<?php

function checkForTarget(array $nums, int $target): bool
{
    $left = 0;
    $right = count($nums) - 1;

    while ($left < $right) {
        $sum = $nums[$left] + $nums[$right];
        if ($sum === $target) {
            return true;
        }

        if ($sum < $target) {
            $left++;
        } else {
            $right--;
        }
    }

    return false;
}
