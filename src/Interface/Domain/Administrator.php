<?php

namespace App\Inheritance\Domain;

class Administrator implements Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
