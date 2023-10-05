<?php

namespace DucklingDesigns\ObjectOrientedPhp;

class VimeoVideo extends AbstractVideo
{
    private string $vimeoId;

    public function __construct($name, $url)
    {
        parent::__construct($name, "Vimeo");

        $this->vimeoId = substr($url, strrpos($url, "/") + 1);
    }

    public function getEmbedCode(): string
    {
        return <<< HTML
<iframe src="https://player.vimeo.com/video/$this->vimeoId" width="320" height="180" 
allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
HTML;
    }
}