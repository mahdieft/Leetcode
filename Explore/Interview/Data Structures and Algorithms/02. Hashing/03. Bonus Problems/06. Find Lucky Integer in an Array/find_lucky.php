<?php

function findLucky(array $arr): int
{
    $answer = -1;
    $frequency = array_count_values($arr);

    foreach ($frequency as $num => $count) {
        if ($num === $count) {
            $answer = max($answer, $num);
        }
    }

    return $answer;
}
