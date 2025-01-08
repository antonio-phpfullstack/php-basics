<?php
session_start();

$_SESSION['user'] = [
    'name' => 'Antonio',
    'email' => 'antonio@phpfullstack.com.br',
    'age' => 25,
    'active' => true,
    'birthdate' => '1990-01-01'
];