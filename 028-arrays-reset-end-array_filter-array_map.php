<?php
function arrayOutput($nameArray, $array):void {
    echo "{$nameArray} = [\n";
    foreach ($array as $key => $value) {
        echo "\t{$key} => {$value},\n";
    }
    echo "]\n";
}

$fruits = [
    'One' => 'apple',
    'Two' => 'banana',
    'Three' => 'orange',
    'Four' => 'grape',
    'Five' => 'mango',
    'Six' => 'pineapple',
    'Seven' => 'strawberry',
    'Eight' => 'watermelon'
];
arrayOutput("fruits", $fruits);

//echo "My first value is: " . $fruits[0] . "\n"; //Doesn't work
echo "My first value is: " . $fruits[array_keys($fruits)[0]] . "\n";
echo "My first value is: " . reset($fruits) . "\n"; //Does not modify the array's value
arrayOutput("fruits", $fruits);

//echo "My last value is: " . $fruits[$fruits[count($fruits) - 1]] . "\n";
echo "My last value is: " . $fruits[array_keys($fruits)[count($fruits) - 1]] . "\n";
echo "My last value is: " . end($fruits) . "\n"; //Does not modify the array's value
arrayOutput("fruits", $fruits);

$fruits = array_filter($fruits, function ($value) {
    return strlen($value) > 5;
});
arrayOutput("fruits", $fruits);

$fruits = array_map(function ($value) {
    return ucfirst($value);
}, $fruits);
arrayOutput("fruits", $fruits);