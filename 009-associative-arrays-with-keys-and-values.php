<?php
$mixArray = [
    0 => 100,
    1 => 200,
    2 => 300,
    'a' => 400,
    'b' => 500,
    'c' => 600,
    "firstName" => "Mariah",
    "secondName" => "Izabel"
];
echo "My first name is {$mixArray['firstName']}";
echo "\nMy second name is {$mixArray['secondName']}";
echo "\nMy grandfather's age is {$mixArray[0]} years";

