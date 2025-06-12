<?php

function findDuplicate(string $s): string
{
    $strlen_s = strlen($s);
    $seen = [];
    for ($i = 0; $i < $strlen_s; $i++) {
        if (key_exists($s[$i], $seen)) {
            return $s[$i];
        }
        $seen[$s[$i]] = true;
    }
    return '';
}
