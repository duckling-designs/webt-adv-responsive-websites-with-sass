<?php
//User Story 7
namespace DucklingDesigns\ObjectOrientedPhp;

class YouTubeVideo extends AbstractVideo
{
    private string $youtubeId;

    public function __construct($name, $url)
    {
        parent::__construct($name, "YouTube");

        if (str_contains($url, "?v=")) {
            $this->youtubeId = substr($url, strpos($url, "?v=") + 3);
        } else {
            $this->youtubeId = substr($url, strrpos($url, "/") + 1);
        }
    }

    public function getEmbedCode(): string
    {
        return <<< HTML
<iframe width="320" height="180" src="https://www.youtube.com/embed/$this->youtubeId"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
HTML;
    }
}
