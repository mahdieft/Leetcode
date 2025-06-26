<?php

function frequencySort(string $s): string
{
    $answer = '';

    $counter = array_count_values(str_split($s));
    arsort($counter);

    foreach ($counter as $letter => $count) {
        for ($i = 1; $i <= $count; $i++) {
            $answer .= $letter;
        }
    }

    return $answer;
}
