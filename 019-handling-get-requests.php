<?php
$planet = isset($_GET['planet']) ? $_GET['planet'] : "Planet not found";
echo "<p>The planet is: " . $planet . "</p>";

$color = $_GET['color'] ?? "Color not found";
echo "<p>The color is: " . $color . "</p>";