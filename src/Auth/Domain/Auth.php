<?php

namespace App\Auth\Domain;

class Auth
{
    protected $email;
    protected $password;

    function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function login()
    {
        return "Login with email $this->email and password $this->password";
    }

    public function validate()
    {
        return "Validate with email $this->email and password $this->password";
    }
}
