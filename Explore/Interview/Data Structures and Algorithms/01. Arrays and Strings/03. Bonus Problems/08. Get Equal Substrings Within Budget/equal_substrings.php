<?php

function equalSubstring(string $s, string $t, int $maxCost)
{
    $left = $right = 0;
    $strlen = strlen($s);
    $answer = 0;
    $current_cost = 0;
    while ($right < $strlen) {
        $current_cost += abs(ord($s[$right]) - ord($t[$right]));
        while ($current_cost > $maxCost) {
            $current_cost -= abs(ord($s[$left]) - ord($t[$left]));
            $left++;
        }

        $answer = max($answer, $right - $left + 1);
        $right++;
    }

    return $answer;
}
