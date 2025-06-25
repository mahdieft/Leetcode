<?php

function numJewelsInStones(string $jewels, string $stones): int
{
    $jewels_map = array_count_values(str_split($jewels));

    $count = 0;
    $strlen_stones = strlen($stones);
    for ($i = 0; $i < $strlen_stones; $i++) {
        if (key_exists($stones[$i], $jewels_map)) {
            $count++;
        }
    }

    return $count;
}
