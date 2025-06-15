<?php

function countElements(array $nums): int
{
    $answer = 0;
    $map = [];
    foreach ($nums as $num) {
        $map[$num] = true;
    }

    foreach ($nums as $num) {
        if (key_exists($num + 1, $map)) {
            $answer++;
        }
    }
    return $answer;
}
