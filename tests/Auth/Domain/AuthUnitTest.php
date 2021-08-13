<?php

use PHPUnit\Framework\TestCase;
use App\Auth\Domain\Auth;

class AuthUnitTest extends TestCase
{
    function test_should_execute_method_login()
    {
        $expectedValue = 'Login with email user@email.com and password p@$$w0rd';
        $auth = new Auth("user@email.com", "p@$\$w0rd");

        $login = $auth->login();

        $this->assertEquals($expectedValue, $login);
    }
}