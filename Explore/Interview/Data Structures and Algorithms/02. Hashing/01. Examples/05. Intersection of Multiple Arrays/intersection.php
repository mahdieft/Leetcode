<?php

function intersection(array $nums): array
{
    $seen = [];
    foreach ($nums[0] as $num) {
        $seen[$num] = 1;
    }

    $count_nums = count($nums);
    for ($i = 1; $i < $count_nums; $i++) {
        foreach ($nums[$i] as $num) {
            if (key_exists($num, $seen)) {
                $seen[$num]++;
            }
        }
    }

    $answer = [];
    foreach ($seen as $num => $frequency) {
        if ($frequency === $count_nums) {
            $answer[] = $num;
        }
    }

    sort($answer);
    return $answer;
}
