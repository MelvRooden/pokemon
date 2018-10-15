<?php

class Resistance
{
    public $name;
    public $blockPoints;

    public function __construct($_name, $_blockPoints)
    {
        $this->name = $_name;
        $this->blockPoints = $_blockPoints;
    }
}