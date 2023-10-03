<?php
//User Story 6
namespace DucklingDesigns\ObjectOrientedPhp;

abstract class AbstractVideo implements VideoInterface {
    private $name;
    protected $source;

    public function __construct($name, $source) {
        $this->name = $name;
        $this->source = $source;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSource(): string {
        return $this->source;
    }

    // The getEmbedCode method is declared as abstract
    abstract public function getEmbedCode(): string;

    public function __toString() {
        return <<< HTML
<div class="video-entry">
    <h2>$this->name</h2>
    <p>Origin: $this->source</p>
    {$this->getEmbedCode()}
</div>
HTML;
    }
}
