<?php

function isPathCrossing(string $path): bool
{
    $map = [
        'N' => [0, 1],
        'E' => [1, 0],
        'S' => [0, -1],
        'W' => [-1, 0],
    ];
    $seen = [
        json_encode([0, 0]) => true,
    ];
    $x = 0;
    $y = 0;

    $strlen_path = strlen($path);
    for ($i = 0; $i < $strlen_path; $i++) {
        $step = $map[$path[$i]];
        $x += $step[0];
        $y += $step[1];
        $key = json_encode([$x, $y]);
        if (key_exists($key, $seen)) {
            return true;
        }
        $seen[$key] = true;
    }

    return false;
}
