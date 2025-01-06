<?php
echo date("Y") . "\n"; //Ex: 2026
echo date("y") . "\n"; //Ex: 26
echo date("m") . "\n"; //Ex: 01
echo date("M") . "\n"; //Ex: Jan
echo date("F") . "\n"; //Ex: January
echo date("d") . "\n"; //Ex: 06
echo date("D") . "\n"; //Ex: Mon
echo date("G") . "\n"; //Ex: Hour(24h) -> 13
echo date("g") . "\n"; //Ex: Hour(12h) -> 1
echo date("h") . "\n"; //Ex: Hour(12h) -> 1 -> 12h format of an hour with leading zeros
echo date("i") . "\n"; //Ex: 03 -> minutes with leading zeros
echo date("s") . "\n"; //Ex: 07 -> seconds with leading zeros

echo date("Y-m-d H:i:s") . "\n";
echo date("Y-m-d H:i:s", strtotime("2026-01-06 13:03:07")) . "\n";
echo strtotime("2026-01-06 13:03:07 +1 day");