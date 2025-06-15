<?php

function missingNumber(array $nums): int
{
    $expected = array_sum(range(0, count($nums)));
    $actual = array_sum($nums);
    return $expected - $actual;
}
