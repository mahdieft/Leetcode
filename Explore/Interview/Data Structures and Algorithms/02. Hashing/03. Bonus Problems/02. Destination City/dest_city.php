<?php

function destCity(array $paths): string
{
    $all_cities = [];
    $paths_map = [];

    foreach ($paths as $path) {
        $all_cities[] = $path[0];
        $all_cities[] = $path[1];
        $paths_map[$path[0]] = $path[1];
    }

    $destination = '';
    foreach ($all_cities as $city) {
        if (!key_exists($city, $paths_map)) {
            $destination = $city;
            break;
        }
    }

    return $destination;
}
