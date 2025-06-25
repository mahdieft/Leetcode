<?php

function canConstruct(string $ransomNote, string $magazine): bool
{
    $magazine_map = array_count_values(str_split($magazine));

    $strlen_ransom_note = strlen($ransomNote);
    for ($i = 0; $i < $strlen_ransom_note; $i++) {
        if (!key_exists($ransomNote[$i], $magazine_map) || $magazine_map[$ransomNote[$i]] === 0) {
            return false;
        }
        $magazine_map[$ransomNote[$i]]--;
    }
    return true;
}
