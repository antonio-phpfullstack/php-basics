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

$myArray = [
    "fruits" => ["apple", "banana", "orange"],
    "vegetables" => ["carrot", "potato", "onion"],
    "meat" => ["beef", "pork", "chicken"],
    "dairy" => ["milk", "yogurt", "cheese"],
    "drinks" => ["water", "tea", "coffee"],
    "food" => ["pizza", "burger", "salad"],
    "sports" => ["tennis", "soccer", "basketball"]
];

echo "My favorite food is {$myArray['food'][0]}\n";
echo "My favorite sport is {$myArray['sports'][2]}\n";
echo "My favorite drink is {$myArray['drinks'][0]}\n";
echo "My favorite fruit is {$myArray['vegetables'][1]}\n";