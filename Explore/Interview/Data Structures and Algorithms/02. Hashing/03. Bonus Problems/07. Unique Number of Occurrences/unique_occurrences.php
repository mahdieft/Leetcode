<?php

function uniqueOccurrences(array $arr): bool
{
    $frequency = array_count_values($arr);
    $occurrences = [];

    foreach ($frequency as $count) {
        if (key_exists($count, $occurrences)) {
            return false;
        }
        $occurrences[$count] = true;
    }
    return true;
}
