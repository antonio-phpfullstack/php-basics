<?php
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
echo "\n";

$myArray = [
    "fruits" => ["apple", "banana", "orange"],
    "vegetables" => ["carrot", "potato", "onion"],
    "meat" => ["beef", "pork", "chicken"],
    "dairy" => ["milk", "yogurt", "cheese"],
    "drinks" => ["water", "tea", "coffee"],
    "food" => ["pizza", "burger", "salad"],
    "sports" => ["tennis", "soccer", "basketball"]
];
foreach ($myArray as $key => $value) {
    echo $key . " => ";
    foreach ($value as $item) {
        echo $item . ", ";
    }
    echo "\n";
}