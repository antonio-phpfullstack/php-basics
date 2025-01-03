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