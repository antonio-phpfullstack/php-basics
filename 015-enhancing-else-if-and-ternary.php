<?php
$average = 80;
$frequency = 75;

$averageStudent = 70;
$frequencyStudent = 85;

//$failedDueToAbsences = ($frequencyStudent < $frequency)?true:false;
$failedDueToAbsences = $frequencyStudent < $frequency;
if (!$failedDueToAbsences) {
    if ($averageStudent > $average) {
        echo "The student passed\n";
    } else {
        echo "The student is in summer school to recover their grades.\n";
    }
} else {
    echo "The student failed due to absence\n";
}

$number = 15;
if ($number === 15) {
    echo "The number is 15\n";
} else if ($number === 16) {
    echo "The number is 16\n";
} else if ($number === 17) {
    echo "The number is 17\n";
} else if ($number === 18) {
    echo "The number is 18\n";
} else if ($number === 19) {
    echo "The number is 19\n";
} else {
    echo "The number is not 15, 16, 17, 18 or 19\n";
}

switch ($number) {
    case 15:
        echo "The number is 15\n";
        break;
    case 16:
        echo "The number is 16\n";
        break;
    case 17:
        echo "The number is 17\n";
        break;
    case 18:
        echo "The number is 18\n";
        break;
    case 19:
        echo "The number is 19\n";
        break;
    default:
        echo "The number is not 15, 16, 17, 18 or 19\n";
        break;
}

echo match ($number) {
    15 => "The number is 15\n",
    16 => "The number is 16\n",
    17 => "The number is 17\n",
    18 => "The number is 18\n",
    19 => "The number is 19\n",
    default => "The number is not 15, 16, 17, 18 or 19\n",
};