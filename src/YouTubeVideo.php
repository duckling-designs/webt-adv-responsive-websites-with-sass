<?php
//User Story 7
namespace DucklingDesigns\ObjectOrientedPhp;

class YouTubeVideo extends AbstractVideo {
    private $embedCode;

    public function __construct($name, $source, $embedCode) {
        parent::__construct($name, $source);
        $this->embedCode = $embedCode;
    }

    public function getEmbedCode(): string {
        return $this->embedCode;
    }
}
