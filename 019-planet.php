<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet</title>
</head>
<body>
<?php $planet = $_GET["planet"] ?? "Planet isn't defined."; ?>
    <p><strong>Your favorite planet is: </strong><?=$planet?></p>
</body>
</html>