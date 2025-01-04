<?php
echo "<pre>";
myHello("Anthony");
function myHello($name = "Antonio") {
    echo "Hello, $name\n";
}
myHello("Mariah");
myHello("Esther");
myHello("Vitória");
myHello();

function getHello(string $friend): string {
    return "Hello, $friend\n";
}
echo getHello("Altair");

function result(float $num1, float $num2): float {
    return $num1 + $num2;
}
echo "Sum: " . result(10.1, 20) . "\n";

function invisibleVariable() {
    $name = "Thais";
}
invisibleVariable();
echo "My name is {$name} \n";

$nickName = "Thony";
function canNotAccess() {
    $nickName = "Max";
    echo "My nick name in \"canNotAccess\" is {$nickName}\n";
}
canNotAccess();
echo "My nick name after \"canNotAccess\" is {$nickName}\n";

function canAccess() {
    global $nickName;
    echo "My nick name in \"canAccess\" is {$nickName}\n";
    $nickName = "Peter";
}
canAccess();
echo "My nick name after \"canAccess\" is {$nickName}\n";

function factorial(int $number): int {
    if ($number == 0) {
        return 1;
    }
    return $number * factorial($number - 1);
}
echo factorial(5) . "\n";