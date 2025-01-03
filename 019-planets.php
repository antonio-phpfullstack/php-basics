<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
</head>
<body>
<?php
    $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];
?>
    <ul>
        <?php foreach ($planets as $planet) : ?>
        <li>
            <a href="019-planet.php?planet=<?= $planet ?>"><?= $planet ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
