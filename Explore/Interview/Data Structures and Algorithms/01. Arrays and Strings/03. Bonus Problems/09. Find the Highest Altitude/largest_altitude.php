<?php

function largestAltitude(array $gain): int
{
    $max = 0;
    $current = 0;
    $count_gain = count($gain);

    for ($i = 0; $i < $count_gain; $i++) {
        $current += $gain[$i];
        $max = max($max, $current);
    }

    return $max;
}
