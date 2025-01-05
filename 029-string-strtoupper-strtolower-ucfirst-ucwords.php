<?php
$phrase = "Jesus, is my Lord";
echo "{$phrase}\n";
echo strtoupper($phrase) . "\n";
echo "\n";

echo "{$phrase}\n";
echo strtolower($phrase) . "\n";
echo "\n";

echo strtolower($phrase) . "\n";
echo ucfirst(strtolower($phrase)) . "\n";
echo "\n";

echo "{$phrase}\n";
echo ucwords($phrase);