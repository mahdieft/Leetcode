<?php

function findWinners(array $matches): array
{
    $all_players = [];
    $losers = [];

    foreach ($matches as $match) {
        if (!key_exists($match[1], $losers)) {
            $losers[$match[1]] = 0;
        }
        $losers[$match[1]]++;

        $all_players[$match[0]] = true;
        $all_players[$match[1]] = true;
    }

    $winners = [];
    $lost_once = [];
    foreach ($all_players as $player => $value) {
        if (!key_exists($player, $losers)) {
            $winners[] = $player;
        } else if ($losers[$player] === 1) {
            $lost_once[] = $player;
        }
    }
    sort($winners);
    sort($lost_once);

    return [$winners, $lost_once];
}
