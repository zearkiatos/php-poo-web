<?php

namespace App\Shared\Domain;

abstract class Base
{
    protected $name;

    public function get()
    {
    }

    private function getClassName()
    {
        return get_called_class();
    }

    public function login()
    {
        return "My name is $this-name from the class {$this->getClassName()}";
    }

    abstract public function store();
}
