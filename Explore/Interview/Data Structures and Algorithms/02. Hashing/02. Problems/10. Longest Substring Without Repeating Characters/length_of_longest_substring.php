<?php

function lengthOfLongestSubstring(string $s): int
{
    $max_length = 0;
    $map = [];

    $strlen_s = strlen($s);
    $left = 0;
    for ($right = 0; $right < $strlen_s; $right++) {
        if (!key_exists($s[$right], $map)) {
            $map[$s[$right]] = 0;
        }
        $map[$s[$right]]++;

        while ($map[$s[$right]] > 1) {
            $map[$s[$left]]--;
            if ($map[$s[$left]] === 0) {
                unset($map[$s[$left]]);
            }
            $left++;
        }

        $max_length = max($max_length, $right - $left + 1);
    }

    return $max_length;
}

echo lengthOfLongestSubstring("tmmzuxt");
