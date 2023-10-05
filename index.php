<?php

namespace DucklingDesigns\ObjectOrientedPhp;
require 'vendor/autoload.php';

$youtubeVideo = new YouTubeVideo("What If The World Went Vegetarian?", 'https://www.youtube.com/watch?v=ANUoAdXfA60');
$vimeoVideo = new VimeoVideo("Banana Bread with Chocolate Chip Streusel", 'https://vimeo.com/groups/bestfoodvideos/videos/150608195');

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
$youtubeVideo
$vimeoVideo
</div>
</body>
</html>
HTML;
echo $htmlOutput;
