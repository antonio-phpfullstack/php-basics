<?php
$counter = 0;
while ($counter < 10) {
//    $counter = $counter + 1; //if this expression is missing: infinite loop
    $counter++; //post-increment

    if ($counter % 2 == 0) {
        continue;
    }

    echo $counter . "\n";

    if ($counter == 5) {
        break;
    }
}

$number = 8;

$multiplier = 1;
while ($multiplier <= 10) {
    echo "{$number} * $multiplier = " . $number * $multiplier . "\n";
    $multiplier++;
}