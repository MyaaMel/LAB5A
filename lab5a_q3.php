<?php

function calculateArea($width, $height) {
    $area = $width * $height;
    return $area;
}

// Example usage:
$width = 5;
$height = 3;

$result = calculateArea($width, $height);

echo "<h3>The area of a rectangle with a width of $width and a height of $height is: $result</h3>";
?>