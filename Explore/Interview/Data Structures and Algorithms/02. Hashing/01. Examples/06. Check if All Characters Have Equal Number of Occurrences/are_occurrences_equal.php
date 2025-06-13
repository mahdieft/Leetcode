<?php

function areOccurrencesEqual(string $s): bool
{
    $frequency_map = [];
    $strlen_s = strlen($s);

    for ($i = 0; $i < $strlen_s; $i++) {
        if (!key_exists($s[$i], $frequency_map)) {
            $frequency_map[$s[$i]] = 0;
        }
        $frequency_map[$s[$i]]++;
    }

    $count_map = [];
    foreach ($frequency_map as $count) {
        $count_map[$count] = true;
    }

    return count($count_map) === 1;
}
