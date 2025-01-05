<?php
function arrayOutput($nameArray, $array):void {
    echo "{$nameArray} = [\n";
    foreach ($array as $key => $value) {
        echo "\t{$key} => {$value},\n";
    }
    echo "]\n";
}

$wishList = ["iPhone", "MacBook", "iPad", "Ferrari", "Mansion", "Pool"];
arrayOutput("wishList", $wishList);

arsort($wishList);
arrayOutput("wishList", $wishList);

rsort($wishList);
arrayOutput("wishList", $wishList);

asort($wishList);
arrayOutput("wishList", $wishList);

sort($wishList);
arrayOutput("wishList", $wishList);