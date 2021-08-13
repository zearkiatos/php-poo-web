<?php

namespace App\Person\Domain;

class Person
{
    public function greet()
    {
        return "Hello $this->name";
    }
}
