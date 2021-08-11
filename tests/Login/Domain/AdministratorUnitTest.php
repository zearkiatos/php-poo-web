<?php

namespace App\Test\Login\Domain;

use PHPUnit\Framework\TestCase;
use App\Login\Domain\Administrator;

class AdministratorUnitTest extends TestCase
{
    function test_should_execute_the_method_login()
    {
        $expectedValue = 'My name is Pedro from the class App\Login\Domain\Administrator';
        $administrator = new Administrator('Pedro');

        $login = $administrator->login();

        $this->assertEquals($expectedValue, $login);
    }
}
