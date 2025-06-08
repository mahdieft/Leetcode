<?php

function findLength(string $s): int
{
    $strlen_s = strlen($s);

    $max = 0;
    $flip_count = 0;

    $left = 0;
    for ($right = 0; $right < $strlen_s; $right++) {
        if ($s[$right] === 0) {
            $flip_count++;
        }

        while ($flip_count > 1) {
            if ($s[$left] === 0) {
                $flip_count--;
            }
            $left++;
        }
        $max = max($max, $right - $left + 1);
    }
    return $max;
}
