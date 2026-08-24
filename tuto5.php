<?php


// VIDEO 5 - STRINGS


$name = 'Megatron';
$age = 30;

$stringOne = 'My email is ';
$stringTwo = 'orionpax@autobots.co.uk';

$email = $stringOne . $stringTwo;

$nameWithGreeting = 'Hey, my name is ' . $name;

$escapedText = 'The optimus screamed "roll out"';

$firstCharacter = $name[0];

$nameLength = strlen($name);
$nameUppercase = strtoupper($name);
$nameLowercase = strtolower($name);
$nameReplaced = str_replace('m', 'w', strtolower($name));