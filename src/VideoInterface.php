<?php
// User Story 5
namespace DucklingDesigns\ObjectOrientedPhp;

interface VideoInterface {
    public function getName(): string;
    public function getSource(): string;
    public function getEmbedCode(): string;
}
