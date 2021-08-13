<?php

namespace App\Inheritance\Domain;

class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    final public function getName()
    {
        return $this->name;
    }
}
