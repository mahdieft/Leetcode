<?php

function maximumWealth(array $accounts): int
{
    $max_wealth = PHP_INT_MIN;
    foreach ($accounts as $account) {
        $max_wealth = max($max_wealth, array_sum($account));
    }

    return $max_wealth;
}
