<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include/Require</title>
</head>
<body>
<?php
    include "035-header.php";
//    include_once "035-header.php";  //Ensures that the file will be included only once
//    require "035-header.php"; //When the file is not found, it generates a fatal error, halting the execution of the script
//    require_once "035-header.php";  //Ensures that the file will be included only once. When the file is not found, it generates a fatal error, halting the execution of the script
?>
    <main>
        <h1>#Website content#</h1>
    </main>
<?php
    include "035-footer.php";
//    include_once "035-footer.php";
//    require "035-footer.php";
//    require_once "035-footer.php";
?>
</body>
</html>