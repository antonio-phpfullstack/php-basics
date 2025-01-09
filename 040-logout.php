<?php
require __DIR__ . '/040-session_start.php';
session_destroy();
header('Location: 039-login.php');