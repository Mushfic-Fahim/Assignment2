<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $string = strtolower($string);

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

function reverseString($string) {
    return strrev($string);
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
