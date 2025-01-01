<?php
$result = 1 + 2 * 3;
/*
 $result = 1 + 6
 $result = 7
Priority:
( )  |
* /  |
+ -  V
 * */
echo $result;

$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
/*
$fullName = "John " . "Doe";
$fullName = "John Doe";
-------> direction
*/
echo $fullName;