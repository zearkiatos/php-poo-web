<?php

namespace App\Shared\Domain;

abstract class BaseLogin
{
    protected $name;

    private function getClassName()
    {
        return get_called_class();
    }

    public function login()
    {
        return "My name is $this->name from the class {$this->getClassName()}";
    }
}