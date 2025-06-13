<?php

function findLongestSubstring(string $s, int $k): int
{
    $strlen_s = strlen($s);
    $seen = [];
    $left = 0;
    $substring_length = 0;

    for ($right = 0; $right < $strlen_s; $right++) {
        if (!key_exists($s[$right], $seen)) {
            $seen[$s[$right]] = 0;
        }
        $seen[$s[$right]]++;

        while (count($seen) > $k) {
            $seen[$s[$left]]--;
            if ($seen[$s[$left]] === 0) {
                unset($seen[$s[$left]]);
            }
            $left++;
        }

        $substring_length = max($substring_length, $right - $left + 1);
    }

    return $substring_length;
}
