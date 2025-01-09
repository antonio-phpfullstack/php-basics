<?php
require __DIR__ . '/040-session_start.php';

if (isset($_POST['email'])) {
    $_SESSION['user'] = [
        "email" => $_POST['email']
    ];
    header('Location: 039-basic-login-example.php');
    exit;
}
?>
<h1>Login</h1>
<form action="039-login.php" method="post">
    <input type="email" name="email" placeholder="Email...">
    <input type="submit" value="send-form">
</form>
