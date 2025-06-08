<?php

function combine(array $nums_1, array $nums_2): array
{
    $combined = [];
    $count_nums_1 = count($nums_1);
    $count_nums_2 = count($nums_2);

    $pointer_1 = 0;
    $pointer_2 = 0;
    while ($pointer_1 < $count_nums_1 && $pointer_2 < $count_nums_2) {
        if ($nums_1[$pointer_1] < $nums_2[$pointer_2]) {
            $combined[] = $nums_1[$pointer_1];
            $pointer_1++;
        } else {
            $combined[] = $nums_2[$pointer_2];
            $pointer_2++;
        }
    }

    while ($pointer_1 < $count_nums_1) {
        $combined[] = $nums_1[$pointer_1];
        $pointer_1++;
    }

    while ($pointer_2 < $count_nums_2) {
        $combined[] = $nums_2[$pointer_2];
        $pointer_2++;
    }

    return $combined;
}
