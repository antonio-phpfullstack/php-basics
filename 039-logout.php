<?php
session_start();
session_destroy();
header('Location: 039-login.php');