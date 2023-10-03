<?php
namespace DucklingDesigns\ObjectOrientedPhp;
require 'vendor/autoload.php';

// Usage example
$htmlOutput = <<< HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">
    <title>FoodTube</title>
</head>
<body>

<h1>FoodTube</h1>
<div class="flex-container">

</div>
</body>
</html>
HTML;
echo $htmlOutput;