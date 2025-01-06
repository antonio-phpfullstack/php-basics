<?php

function showName(? string $name = null):void {
    if (isset($name)) {
        echo "The name {$name} is set}\n";
    } else {
        echo "The name is not set\n";
    }
}

$name = "Joseph Climber";
showName($name);

unset($name);
showName($name); //PHP Warning Message




