<?php

namespace App\User\Domain;

class User
{
    public $type;
    public const PAGINATE = 25;

    public $username;

    public function getUsername()
    {
        return $this->username;
    }
}
