<?php

function reverseWords(string $s): string
{
    $strlen_s = strlen($s);
    $left = 0;
    for ($i = 0; $i <= $strlen_s; $i++) {
        if ($s[$i] === ' ' || $i === $strlen_s) {
            $right = $i - 1;
            while ($left < $right) {
                $temp = $s[$left];
                $s[$left] = $s[$right];
                $s[$right] = $temp;
                $left++;
                $right--;
            }
            $left = $i + 1;
        }
    }
    return $s;
}
