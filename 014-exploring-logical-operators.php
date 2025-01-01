<?php
$average = 80;
$frequency = 75;

$averageStudent = 90;
$frequencyStudent = 85;

if ($averageStudent >= $average && $frequencyStudent >= $frequency) {
    echo "The student passed\n";
} else {
    echo "The student failed\n";
}

$haveMoney = true;
$haveCar = false;

if ($haveMoney || !$haveCar) {
    echo "My children are happy";
} else {
    echo "My children are sad";
}