<?php

for($i = 0; $i < 10; $i++) {
    echo $i . "\n";
}

$fruits = ["apple", "banana", "orange"];
for($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "\n";
}

$myArray = [
    "fruits" => ["apple", "banana", "orange"],
    "vegetables" => ["carrot", "potato", "onion"],
    "meat" => ["beef", "pork", "chicken"],
    "dairy" => ["milk", "yogurt", "cheese"],
    "drinks" => ["water", "tea", "coffee"],
    "food" => ["pizza", "burger", "salad"],
    "sports" => ["tennis", "soccer", "basketball"]
];
// Using a for loop with a pre-calculated array length to iterate through the array.
// // This approach stores the array length in a variable ($iMax) to avoid recalculating it on each iteration, improving performance.
$keys = array_keys($myArray);
for($i = 0, $iMax = count($myArray); $i < $iMax; $i++) {
    echo $keys[$i] . " => ";
    for($j = 0, $jMax = count($myArray[$keys[$i]]); $j < $jMax; $j++) {
        echo $myArray[$keys[$i]][$j] . ", ";
    }
    echo "\n";
}