<?php

namespace App\Login\Domain;

use App\Shared\Domain\BaseLogin;

class User extends BaseLogin
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}