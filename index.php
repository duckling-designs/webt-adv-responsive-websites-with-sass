<?php

namespace DucklingDesigns\ObjectOrientedPhp;
require 'vendor/autoload.php';

$videos[] = new YouTubeVideo("What If The World Went Vegetarian?", 'https://www.youtube.com/watch?v=ANUoAdXfA60');
$videos[] = new YouTubeVideo("How the food you eat affects your brain - Mia Nacamulli", 'https://www.youtube.com/watch?v=xyQY8a-ng6g');
$videos[] = new YouTubeVideo("Kids vocabulary - World food - Learn English for kids - English educational video", 'https://www.youtube.com/watch?v=4uuGYHfnVRE');
$videos[] = new YouTubeVideo("Why is junk food unhealthy? - Ask Coley - Health Tips for Kids | Educational Videos by Mocomi", 'https://www.youtube.com/watch?v=5iJcLl0sHic');
$videos[] = new YouTubeVideo("Healthy Eating: An introduction for children aged 5-11", 'https://www.youtube.com/watch?v=mMHVEFWNLMc');
$videos[] = new YouTubeVideo("Food Groups for Kids | Learn about the five food groups and their benefits", 'https://www.youtube.com/watch?v=pmgkj01uUTw');
$videos[] = new VimeoVideo("Banana Bread with Chocolate Chip Streusel", 'https://vimeo.com/groups/bestfoodvideos/videos/150608195');
$videoString = "";
foreach ($videos as $video){
    $videoString .= $video;
}
$htmlOutput = <<< HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link rel="stylesheet" href="scss/custom.css">
    <title>FoodTube</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
    <div class="container justify-content-end">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main role="main" class="container">
    <div class="row">
        <div class="col text-center">
            <div class="mt-5">
                <h1 class="display-2">Welcome to FoodTube</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-evenly">
        $videoString
        $videoString
    </div>
    </div>
</main>
<footer class="container mt-4">
    <div class="row">
        <div class="col">
            <p class="text-center">Website by duckling-designs</p>
        </div>
    </div>
</footer>
</body>
</html>
HTML;
echo $htmlOutput;
