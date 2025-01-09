<?php
require __DIR__ . '/040-session_start.php';

$user = $_SESSION['user'] ?? null;

if (!isset($user)) {
    header('Location: 039-login.php');
    exit;
}
?>
<h1>Protected Page</h1>
<a href="039-logout.php">Logout</a>
