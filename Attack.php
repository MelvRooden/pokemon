<?php

class Attack
{
    public $name;
    public $damage;

    public function __construct($_name, $_damage)
    {
        $this->name = $_name;
        $this->damage = $_damage;
    }
}