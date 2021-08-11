<?php

namespace App\Login\Domain;

use App\Shared\Domain\BaseLogin;

class Administrator extends BaseLogin
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}
