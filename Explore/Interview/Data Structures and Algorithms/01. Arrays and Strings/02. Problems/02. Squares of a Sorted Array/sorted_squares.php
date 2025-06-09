<?php

function sortedSquares(array $nums)
{
    $count_nums = count($nums);
    $sorted_squared = array_fill(0, $count_nums, 0);

    $left = 0;
    $right = $count_nums - 1;
    $index = $count_nums - 1;
    while ($left <= $right) {
        if (abs($nums[$left]) < abs($nums[$right])) {
            $sorted_squared[$index] = $nums[$right] ** 2;
            $right--;
        } else {
            $sorted_squared[$index] = $nums[$left] ** 2;
            $left++;
        }
        $index--;
    }

    return $sorted_squared;
}
