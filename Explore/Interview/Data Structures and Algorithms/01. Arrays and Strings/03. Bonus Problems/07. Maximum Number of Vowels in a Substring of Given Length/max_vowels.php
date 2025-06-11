<?php

function maxVowels(string $s, int $k)
{
    $vowels = [
        'a' => true,
        'e' => true,
        'i' => true,
        'o' => true,
        'u' => true,
    ];

    $max_count = 0;
    for ($i = 0; $i < $k; $i++) {
        if (key_exists($s[$i], $vowels)) {
            $max_count++;
        }
    }

    $strlen_s = strlen($s);
    $current_count = $max_count;
    for ($i = $k; $i < $strlen_s; $i++) {
        $current_count -= key_exists($s[$i - $k], $vowels) ? 1 : 0;
        $current_count += key_exists($s[$i], $vowels) ? 1 : 0;
        $max_count = max($max_count, $current_count);
    }

    return $max_count;
}
