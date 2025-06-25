<?php

function containsDuplicate(array $nums): bool
{
    $seen = [];

    foreach ($nums as $num) {
        if (key_exists($num, $seen)) {
            return true;
        }
        $seen[$num] = true;
    }

    return false;
}
