<?php

function reversePrefix(string $word, string $ch): string
{
    $strlen_word = strlen($word);
    $left = 0;
    for ($i = 0; $i < $strlen_word; $i++) {
        if ($word[$i] !== $ch) {
            continue;
        }

        while ($left < $i) {
            $temp = $word[$left];
            $word[$left] = $word[$i];
            $word[$i] = $temp;
            $i--;
            $left++;
        }
        break;
    }
    return $word;
}
