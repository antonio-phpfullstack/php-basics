<?php

$myName = "Son";
$yourName = "Son";

if ($myName === $yourName) {
    echo "Our name is $myName\n";
} else {
    echo "My name is {$myName} and your name is {$yourName}\n";
}

$yourName = "James";
$isEqualOurNames = $myName === $yourName;
if ($isEqualOurNames) {
    echo "Our names are equal\n";
} else {
    echo "Our names are not equal\n";
}

$myAge = 25;
$yourAge = 25;
if ($myAge === $yourAge) {
    echo "Our ages are equal\n";
} elseif ( $myAge > $yourAge) {
    echo "I'm older than you\n";
} else {
    echo "You're older than me\n";
}

$yourAge = 26;
if ($myAge === $yourAge) {
    echo "Our ages are equal\n";
} elseif ( $myAge > $yourAge) {
    echo "I'm older than you\n";
} else {
    echo "You're older than me\n";
}

$yourAge = 24;
if ($myAge === $yourAge) {
    echo "Our ages are equal\n";
} elseif ( $myAge > $yourAge) {
    echo "I'm older than you\n";
} else {
    echo "You're older than me\n";
}

$isTwin = true;
if (!$isTwin)
    echo "We're twins.\n";
else
    echo "We're not twins.\n";

$isTwin = $myAge === $yourAge;
if (!$isTwin)
    echo "We're twins.\n";
else
    echo "We're not twins.\n";