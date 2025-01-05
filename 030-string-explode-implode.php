<?php
$mensagem = "Hello World";
$array = explode(" ", $mensagem);
var_dump($mensagem);
var_dump($array);

$novo_texto = implode(" ", $array);
var_dump($novo_texto);