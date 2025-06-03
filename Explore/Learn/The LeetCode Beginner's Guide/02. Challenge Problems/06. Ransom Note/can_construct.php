<?php

function canConstruct(string $ransomNote, string $magazine): bool
{
    $magazine_map = [];
    $strlen_magazine = strlen($magazine);
    for ($i = 0; $i < $strlen_magazine; $i++) {
        if (!key_exists($magazine[$i], $magazine_map)) {
            $magazine_map[$magazine[$i]] = 0;
        }
        $magazine_map[$magazine[$i]]++;
    }

    $strlen_ransome_note = strlen($ransomNote);
    for ($i = 0; $i < $strlen_ransome_note; $i++) {
        if (!key_exists($ransomNote[$i], $magazine_map) || $magazine_map[$ransomNote[$i]] === 0) {
            return false;
        }
        $magazine_map[$ransomNote[$i]]--;
    }

    return true;
}
