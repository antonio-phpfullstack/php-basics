<?php
$nameAnthony = "Anthony";
$nameMariah = "Mariah";
$nameEsther = "Esther";
$nameVitoria = "Vitoria";
$nameThais = "Thais";
$nameCompact = compact("nameAnthony", "nameMariah", "nameEsther", "nameVitoria", "nameThais");
$nameVector = [$nameAnthony, $nameMariah, $nameEsther, $nameVitoria, $nameThais];
$nameArray = array($nameAnthony, $nameMariah, $nameEsther, $nameVitoria, $nameThais);

var_dump($nameCompact);
var_dump(is_array($nameCompact));
var_dump(in_array("Anthony", $nameCompact));