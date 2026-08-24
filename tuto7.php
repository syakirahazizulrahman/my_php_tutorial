<?php

// VIDEO 7 - ARRAYS


$peopleOne = ['Elita', 'Bumblebee', 'Jazz'];
$peopleTwo = ['Ratchet', 'Rodimus'];

$ages = [20, 30, 40, 50];

$ages[1] = 25;
$ages[] = 10;
array_push($ages, 70);

$peopleThree = array_merge($peopleOne, $peopleTwo);


// Associative arrays

$ninjasOne = [
    'Elita' => 'Pink',
    'Megatron' => 'Black',
    'Optimus' => 'Blue'
];

$ninjasTwo = [
    'Drift' => 'Yellow',
    'Ultra Magnus' => 'Red'
];

$ninjasTwo['Polita'] = 'Pink';

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);

