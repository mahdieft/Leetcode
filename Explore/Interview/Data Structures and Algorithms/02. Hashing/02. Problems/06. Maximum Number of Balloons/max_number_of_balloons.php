<?php

function maxNumberOfBalloons(string $text)
{
    $text_map = [];
    $strlen = strlen($text);
    for ($i = 0; $i < $strlen; $i++) {
        if (!key_exists($text[$i], $text_map)) {
            $text_map[$text[$i]] = 0;
        }
        $text_map[$text[$i]]++;
    }

    $balloon_map = array_count_values(str_split('balloon'));
    $answer = [];
    foreach ($balloon_map as $character => $frequency) {
        if (!key_exists($character, $text_map)) {
            return 0;
        }
        $answer[] = (int)($text_map[$character] / $frequency);
    }

    return min(...$answer);
}
