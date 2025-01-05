<?php
function arrayOutput($nameArray, $array) {
    echo "{$nameArray} = [";
    foreach ($array as $value) {
        echo $value . ",";
    }
    echo "]\n";
}

$colors = ["red", "green", "blue", "yellow", "black", "white", "brown"];
arrayOutput("colors", $colors);

$arrayPop = array_pop($colors);
echo "arrayPop = {$arrayPop} \n";
arrayOutput("colors", $colors);

$arrayShift = array_shift($colors);
echo "arrayShift = {$arrayShift} \n";
arrayOutput("colors", $colors);

$variableArrayPush = "pink";
$arrayPush =array_push($colors, $variableArrayPush);
echo "arrayPush([$variableArrayPush}) = {$arrayPush} \n";
arrayOutput("colors", $colors);

$variableArrayUnshift = "orange";
$arrayUnshift = array_unshift($colors, $variableArrayUnshift);
echo "arrayUnshift({$variableArrayUnshift}) = {$arrayUnshift} \n";
arrayOutput("colors", $colors);

echo "unset({$colors[0]})\n";
unset($colors[0]);
arrayOutput("colors", $colors);

$variableArrayPush1 = "black";
$variableArrayPush2 = "yellow";
array_push($colors, $variableArrayPush1);
array_push($colors, $variableArrayPush1);
array_push($colors, $variableArrayPush1);
array_push($colors, $variableArrayPush2);
array_push($colors, $variableArrayPush2);
echo "arrayPush([$variableArrayPush1}) = {$arrayPush} \n";
echo "arrayPush([$variableArrayPush1}) = {$arrayPush} \n";
echo "arrayPush([$variableArrayPush1}) = {$arrayPush} \n";
echo "arrayPush([$variableArrayPush2}) = {$arrayPush} \n";
echo "arrayPush([$variableArrayPush2}) = {$arrayPush} \n";
$colorsUnique = array_unique($colors);
arrayOutput("colors", $colors);
arrayOutput("colorsUnique", $colorsUnique);

$colors[] = "blue"; //faster than array_push()
arrayOutput("colors", $colors);