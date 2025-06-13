<?php

function findNumbers(array $nums)
{
    $map = [];
    foreach ($nums as $num) {
        $map[$num] = true;
    }

    $answer = [];
    foreach ($nums as $num) {
        if (!key_exists($num + 1, $map) && !key_exists($num - 1, $map)) {
            $answer[] = $num;
        }
    }
    return $answer;
}
