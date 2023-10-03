<?php
namespace DucklingDesigns\ObjectOrientedPhp;
require 'vendor/autoload.php';

//TODO: remove example

// Usage example
$youtubeVideo = new YouTubeVideo("What If The World Went Vegetarian?", "YouTube", '<iframe src="https://www.youtube.com/embed/ANUoAdXfA60?autoplay=1"></iframe>');

echo "Video Name: " . $youtubeVideo->getName() . "\n";
echo "Video Source: " . $youtubeVideo->getSource() . "\n";
echo "Embed Code: " . $youtubeVideo->getEmbedCode() . "\n";
