<?php

function answerQueries(array $nums, array $queries, int $limit): array
{
    $count_nums = count($nums);
    $prefix_sum[] = $nums[0];
    for ($i = 1; $i < $count_nums; $i++) {
        $prefix_sum[$i] = $prefix_sum[$i - 1] + $nums[$i];
    }

    $answer = [];
    foreach ($queries as $query) {
        $sum = $prefix_sum[$query[1]] - $prefix_sum[$query[0]] + $nums[$query[0]];
        $answer[] = $sum < $limit;
    }

    return $answer;
}
