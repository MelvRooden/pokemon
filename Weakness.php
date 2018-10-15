<?php

class Weakness
{
    public $name;
    public $multiplier;

    public function __construct($_name, $_multiplier)
    {
        $this->name = $_name;
        $this->multiplier = $_multiplier;
    }
}