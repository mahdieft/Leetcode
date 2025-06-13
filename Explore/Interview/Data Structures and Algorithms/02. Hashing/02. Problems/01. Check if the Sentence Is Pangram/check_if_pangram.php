<?php

function checkIfPangram(string $sentence): bool
{
    $seen = [];
    $strlen_sentence = strlen($sentence);

    for ($i = 0; $i < $strlen_sentence; $i++) {
        $seen[$sentence[$i]] = true;
    }

    return count($seen) === 26;
}
