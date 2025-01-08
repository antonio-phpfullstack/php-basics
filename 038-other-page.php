<?php
session_start();
echo "<pre>";
echo "Session Started\n";
var_dump($_SESSION);
echo "</pre>";

if (isset($_SESSION['myName'])) {
    unset($_SESSION['myName']);
}

$_SESSION['user']['name'] = 'Antonio Gutierrez';
echo "<pre>";
echo "Session Updated\n";
var_dump($_SESSION);
echo "</pre>";

session_destroy();
echo "<pre>";
echo "Seesion Destroyed\n";
var_dump($_SESSION);
echo "</pre>";

$_SESSION = [];
echo "<pre>";
echo "Session Cleaned\n";
var_dump($_SESSION);
echo "</pre>";