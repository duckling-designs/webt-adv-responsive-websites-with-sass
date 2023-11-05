<?php
//User Story 6
namespace DucklingDesigns\ObjectOrientedPhp;

abstract class AbstractVideo implements VideoInterface {
    private string $name;
    private string $source;

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
<div class="col-md video-entry">
    {$this->getEmbedCode()}
    <h3>Origin: $this->source</h3>
    <h2>$this->name</h2>
</div>
HTML;
    }
}
