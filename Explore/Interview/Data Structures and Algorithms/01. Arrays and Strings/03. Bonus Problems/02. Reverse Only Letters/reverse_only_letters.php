<?php

function reverseOnlyLetters(string $s): string
{
    $left = 0;
    $right = strlen($s) - 1;

    while ($left < $right) {
        while (!ctype_alpha($s[$left]) && $left < $right) {
            $left++;
        }

        while (!ctype_alpha($s[$right]) && $right > $left) {
            $right--;
        }

        $temp = $s[$left];
        $s[$left] = $s[$right];
        $s[$right] = $temp;

        $left++;
        $right--;
    }

    return $s;
}
