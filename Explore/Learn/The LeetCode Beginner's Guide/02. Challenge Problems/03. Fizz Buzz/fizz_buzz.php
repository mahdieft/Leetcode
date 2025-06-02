<?php

function fizzBuzz(int $n): array
{
    $answer = [];

    $map = [
        3 => 'Fizz',
        5 => 'Buzz',
    ];

    for ($i = 1; $i <= $n; $i++) {
        $temp_answer = '';
        foreach ($map as $key => $value) {
            if ($i % $key === 0) {
                $temp_answer .= $value;
            }
        }
        if (!$temp_answer) {
            $temp_answer .= (string)$i;
        }

        $answer[] = $temp_answer;
    }

    return $answer;
}
