<?php
//User Story 6
namespace DucklingDesigns\ObjectOrientedPhp;

abstract class AbstractVideo implements VideoInterface {
    private $name;
    private $source;

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
}
