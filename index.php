<?php

namespace DucklingDesigns\ObjectOrientedPhp;
require 'vendor/autoload.php';

$youtubeVideo1 = new YouTubeVideo("What If The World Went Vegetarian?", 'https://www.youtube.com/watch?v=ANUoAdXfA60');
$youtubeVideo2 = new YouTubeVideo("How the food you eat affects your brain - Mia Nacamulli", 'https://www.youtube.com/watch?v=xyQY8a-ng6g');
$youtubeVideo3 = new YouTubeVideo("Kids vocabulary - World food - Learn English for kids - English educational video", 'https://www.youtube.com/watch?v=4uuGYHfnVRE');
$youtubeVideo4 = new YouTubeVideo("Why is junk food unhealthy? - Ask Coley - Health Tips for Kids | Educational Videos by Mocomi", 'https://www.youtube.com/watch?v=5iJcLl0sHic');
$youtubeVideo5 = new YouTubeVideo("Healthy Eating: An introduction for children aged 5-11", 'https://www.youtube.com/watch?v=mMHVEFWNLMc');
$youtubeVideo6 = new YouTubeVideo("Food Groups for Kids | Learn about the five food groups and their benefits", 'https://www.youtube.com/watch?v=pmgkj01uUTw');
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
$youtubeVideo1
$youtubeVideo2
$youtubeVideo3
$youtubeVideo4
$youtubeVideo5
$youtubeVideo6
$vimeoVideo
$vimeoVideo
$vimeoVideo
$vimeoVideo
$vimeoVideo
</div>
</body>
</html>
HTML;
echo $htmlOutput;
