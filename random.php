<?php

$quotes = [
    [
        'author' => 'Chris Pine',
        'text' => 'Programming isnt about what you know; its about what you can figure out.',
    ],
    [
        'author' => 'Dennis Ritchie',
        'text' => 'The only way to learn a new programming language is by writing programs in it.',
    ],
    [
        'author' => 'Joyce Wheeler',
        'text' => 'Sometimes its better to leave something alone, to pause, and thats very true of programming.',
    ],
    [
        'author' => 'Andrew Hunt',
        'text' => 'In some ways, programming is like painting. You start with a blank canvas and certain basic raw materials. You use a combination of science, art, and craft to determine what to do with them',
    ],
    [
        'author' => 'Burt Rutan',
        'text' => 'Testing leads to failure, and failure leads to understanding',
    ],
    [
        'author' => 'Thomas Fuchs',
        'text' => 'The best error message is the one that never shows up.',
    ],
    [
        'author' => 'Grace Hopper',
        'text' => 'The most damaging phrase in the language is.. its always been done this way',
    ],
    [
        'author' => 'Jason C. McDonald',
        'text' => 'Dont write better error messages, write code that doesnt need them.',
    ],
];

$quote = $quotes[array_rand($quotes)];

echo json_encode($quote);

?>

