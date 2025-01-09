<?php
session_start();

$user = $_SESSION['user'] ?? null;

if (!isset($user)) {
    header('Location: 039-login.php');
    exit;
}
?>
<h1>Protected Page</h1>
<a href="039-logout.php">Logout</a>
